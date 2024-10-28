<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function show($arg)
    {
        $time = substr($arg, 1);
        $data = substr($arg, 0, 1);
        if ($data == 1)
            $opt = 'Cash';
        elseif ($data == 2)
            $opt = 'Digital Wallet';
        else
            $opt = 'Debit/Credit Card';

        DB::update('update driveins set status=?, payment_mode=? where created_at like ?', ['out', $opt, $time]);

        $arr = DB::select('select cap  from capacity');
        $total = $arr[0]->cap;

        $arr = DB::select('select count(id) as count from insides');
        $cap = $arr[0]->count;
        $alt = '';

        if ($cap < $total)
            $capmsg = 'Capacity: ' . $cap . '/'.$total;
        else {
            $capmsg = 'Capacity: ' . $cap . '/'.$total.' Capacity full.';
            $alt = 'Click here to find alternative parkings nearby.';
        }
        $msg = ['capmsg' => $capmsg, 'susmsg' => 'Payment Successful! You may proceed.', 'alt' => $alt];

        return view('main', $msg);
    }

    public function index()
    {
                
        $arr = DB::select('select cap  from capacity');
        $total = $arr[0]->cap;

        $arr = DB::select('select count(id) as count from insides');
        $cap = $arr[0]->count;
        $alt = '';

        if ($cap < $total)
            $capmsg = 'Capacity: ' . $cap . '/'.$total;
        else {
            $capmsg = 'Capacity: ' . $cap . '/'.$total.' Capacity full.';
            $alt = 'Click here to find alternative parkings nearby.';
        }

        $msg = ['capmsg' => $capmsg, 'susmsg' => '', 'alt' => $alt];
        return view('main', $msg);
    }
}
