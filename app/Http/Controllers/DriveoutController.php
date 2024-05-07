<?php

namespace App\Http\Controllers;

use App\Models\drivein;
use App\Models\history;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class DriveoutController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $arr=DB::select('select count(id) as count from insides');
       
        $cap=$arr[0]->count;

        
        if($cap<10)
            $capmsg='Capacity: '.$cap.'/10';
        else{
            $capmsg='Capacity: '.$cap.'/10 Capacity full.';
        }
        $msg = ['capmsg'=>$capmsg,'susmsg','alt'=>''];
        
        return view('user/driveOut',$msg);
    }

    public function update()
    {

        // $data=drivein::where('reg_num', request('reg_num'))->firstOrFail();
        $data = DB::select('select created_at,category from insides where num=? AND reg_num=?', [request('num'), request('reg_num')]);

        if (sizeof($data) < 1)
            return redirect('/driveOut')->with('msg', 'Given data doesn\'t match our record. Please try again!');

        $string = $data[0]->created_at;
        $category = $data[0]->category;
        $start =  Carbon::parse($string);
        $now = Carbon::now();

        $diff_in_hours = $start->diffInHours($now);

        if ($category == '4-wheeler') {
            if ($diff_in_hours < 1)
                $price = 60;
            else
                $price = 60 * $diff_in_hours;
        } elseif ($category == '2-wheeler') {
            if ($diff_in_hours < 1)
                $price = 25;
            else
                $price = 25 * $diff_in_hours;
        } else {
            if ($diff_in_hours < 1)
                $price = 20;
            else
                $price = 20 * $diff_in_hours;
        }
        $msg = 'Total hour/s parked: '.$diff_in_hours.'<br>Charge: Rs.'.$price;

 
   
        DB::update('update driveins set charge=?,updated_at=?,status="out" where created_at like ?', [$price, $now, $string]);
        DB::table('insides')->where('created_at', '=', $string)->delete();

        return redirect('/pay')->with('msg', $msg)->with('data', $string);

    }
}