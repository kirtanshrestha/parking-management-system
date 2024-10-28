<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
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

        $capmsg = 'Capacity: ' . $cap . '/' . $total;
        $table = DB::select('select * from rates');

        $msg = ['capmsg' => $capmsg, 'susmsg' => '', 'data' => $table];

        return view('dashboard/rates', $msg);
    }

    public function update(Request $request)
    {
        if ($request->input('action') == "rate") {
            $category = request('cat');
            $rate = request('rate');
            if ($rate < 1) {
                $msg = 'Invalid rate: ' . $rate;
                return redirect('/rate')->with('susmsg', $msg);
            }
            DB::update('update rates set rate=? where category like ?', [$rate, $category]);

            $msg = 'Rate update for ' . $category . ' (Rs. ' . $rate . ')';
            return redirect('/rate')->with('susmsg', $msg);
        } else if ($request->input('action') == "cap") {

            $cap = request('capacity');
            if ($cap < 1) {
                $msg = 'Invalid capacity: ' . $cap;
                return redirect('/rate')->with('susmsg', $msg);
            }
            DB::update('update capacity set cap=?', [$cap]);
            $msg = 'Capacity updated as ' . $cap;
            return redirect('/rate')->with('susmsg', $msg);
        }
    }
}
