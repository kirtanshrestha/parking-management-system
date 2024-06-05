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
        $arr = DB::select('select count(id) as count from insides');
        $cap = $arr[0]->count;

        $capmsg = 'Capacity: ' . $cap . '/10';
        $table = DB::select('select * from rates');

        $msg = ['capmsg' => $capmsg, 'susmsg' => '', 'data' => $table];

        return view('dashboard/rates', $msg);
    }

    public function update()
    {
        $category = request('cat');
        $rate = request('rate');

        DB::update('update rates set rate=? where category like ?', [$rate, $category]);

        $msg = 'Rate update for ' . $category . ' (Rs. ' . $rate . ')';
        return redirect('/rate')->with('susmsg', $msg);
    }
}
