<?php

namespace App\Http\Controllers;


use App\Models\drivein;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashdriveoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('preventBackHistory');
    }
    public function index()
    {
                
        $arr = DB::select('select cap  from capacity');
        $total = $arr[0]->cap;

        $arr = DB::select('select count(id) as count from insides');
        $cap = $arr[0]->count;

        $capmsg = 'Capacity: ' . $cap . '/'.$total;
        $table = DB::select('select * from insides');
        // dd(session('susmsg'));
        $msg = ['capmsg' => $capmsg, 'susmsg' => session('susmsg'), 'data' => $table];
        // dd($msg);
        return view('dashboard/driveout', $msg);
    }

    public function out()
    {
                
        $arr = DB::select('select cap  from capacity');
        $total = $arr[0]->cap;

        $arr = DB::select('select count(id) as count from insides');
        $cap = $arr[0]->count;

        $capmsg = 'Capacityyyyy: ' . $cap . '/'.$total;
        $table = DB::select('select * from insides');

        $data = DB::select('select created_at,category from insides where reg_num=?', [request('reg_num')]);
        $rates = DB::select('select category,rate from rates');

        $rate_arr = [];
        foreach ($rates as $value) {
            $rate_arr[$value->category] = $value->rate;
        }

        // dd($data);

        $string = $data[0]->created_at;
        $category = $data[0]->category;
        $start =  Carbon::parse($string);
        $now = Carbon::now();

        $diff_in_hours = $start->diffInHours($now);
        if ($category == '4-wheeler') {
            if ($diff_in_hours < 1)
                $price = $rate_arr['4-wheeler'];
            else
                $price = $rate_arr['4-wheeler'] * $diff_in_hours;
        } elseif ($category == '2-wheeler') {
            if ($diff_in_hours < 1)
                $price = $rate_arr['2-wheeler'];
            else
                $price = $rate_arr['2-wheeler'] * $diff_in_hours;
        } else {
            if ($diff_in_hours < 1)
                $price = $rate_arr['other'];
            else
                $price = $rate_arr['other'] * $diff_in_hours;
        }


        DB::update('update driveins set charge=?,updated_at=?,payment_mode=?,status="out" where created_at like ?', [$price, $now, "admin- " . Auth::user()->name, $string]);

        DB::table('insides')->where('created_at', '=', $string)->delete();

        $msg = ['capmsg' => $capmsg, 'susmsg' => $price, 'data' => $table];

        return redirect()->back()->with('msg', $msg)->with('price', "Charge Rs." . $price);
    }
}
