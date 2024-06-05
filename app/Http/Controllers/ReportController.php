<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
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
        $data = DB::select('select * from insides');

        //getting the month
        if (request('month') == null) {
            $month = Carbon::now();
            $month = substr($month, 0, 7);
        } else {
            $month = request('month');
        }
        $mnth = $month;
        $month = $month . "%";
        //getting month string
        $monthMap = [
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ];
        $year = substr($mnth,0,4);
        $mnth = substr($mnth,5,7);
        $mnth =$monthMap[$mnth];

        $time = $mnth.", ".$year;
        // dd($time);
        //for table
        $data = DB::select('select * from driveins where updated_at like ?', [$month]);

        //for pie-chart of revenue      :
        $charge_4 = DB::select('select sum(charge) as charge from driveins where status like "out" and category like "4-wheeler" and updated_at like ?', [$month]);
        $charge_2 = DB::select('select sum(charge) as charge from driveins where status like "out" and category like "2-wheeler"and updated_at like ?', [$month]);
        $charge_0 = DB::select('select sum(charge) as charge from driveins where status like "out" and category like "other"and updated_at like ?', [$month]);

        $chargepie = [$charge_4[0]->charge, $charge_2[0]->charge, $charge_0[0]->charge];


        //for pie-chart of category
        $cat_4 = DB::select('select count(id) as category from driveins where status like "out" and category like "4-wheeler" and updated_at like ?', [$month]);
        $cat_2 = DB::select('select count(id) as category from driveins where status like "out" and category like "2-wheeler"and updated_at like ?', [$month]);
        $cat_0 = DB::select('select count(id) as category from driveins where status like "out" and category like "other"and updated_at like ?', [$month]);

        $catpie = [$cat_4[0]->category, $cat_2[0]->category, $cat_0[0]->category];

        //totals 
        $totalcategory = $cat_4[0]->category + $cat_2[0]->category + $cat_0[0]->category;
        $totalcharge = $charge_4[0]->charge + $charge_2[0]->charge + $charge_0[0]->charge;
      
        // dd($data);
        $msg = ['capmsg' => $capmsg, 'month' => $time, 'catpie' => $catpie, 'chargepie' => $chargepie, 'data' => $data, 'totalcat' => $totalcategory, 'totalcharge' => $totalcharge];

        return view('dashboard/report', $msg);
    }
}
