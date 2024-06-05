<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
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
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //for capacity
                
        $arr = DB::select('select cap  from capacity');
        $total = $arr[0]->cap;

        $arr = DB::select('select count(id) as count from insides');
        $cap = $arr[0]->count;
        $capmsg = 'Capacity: ' . $cap . '/'.$total;

        // for charge piechart
        $charge_4 = DB::select('select sum(charge) as charge from driveins where status like "out" and category like "4-wheeler"');
        $charge_2 = DB::select('select sum(charge) as charge from driveins where status like "out" and category like "2-wheeler"');
        $charge_0 = DB::select('select sum(charge) as charge from driveins where status like "out" and category like "other"');

        $charge = [$charge_4[0]->charge, $charge_2[0]->charge, $charge_0[0]->charge];

        //for bargraph
        $arr = DB::select('select created_at,reg_num from driveins where status like "in" ');
        $now = Carbon::now();
        
        
        
        if($arr == null){
            $data=0;
        }
        else{
        foreach ($arr as $item) {

            $start = Carbon::parse($item->created_at);

            $diff = $start->diffInMinutes($now);

            $data[] = [
                'registration_number' => $item->reg_num,
                'hours' => $diff,
            ];
        }
    }

        //for icon display
        $arr = DB::select('select count(id) as count from driveins');
        $all = $arr[0]->count;
        $out = $all - $cap;
        $total = $charge_4[0]->charge + $charge_2[0]->charge + $charge_0[0]->charge;

        $icon = [];
        $icon = [$all, $cap, $out, $total];

        $msg = ['capmsg' => $capmsg, 'susmsg' => '', 'charge' => $charge, 'icon' => $icon, 'data' => $data];
        return view('dashboard/home', $msg);
    }
}
