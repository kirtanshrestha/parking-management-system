<?php

namespace App\Http\Controllers;

use App\Models\drivein;
use App\Models\inside;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DriveinController extends Controller
{
    public function index()
    {

        $arr = DB::select('select count(id) as count from insides');

        $cap = $arr[0]->count;

        if ($cap < 10)
            $capmsg = 'Capacity: ' . $cap . '/10';
        else {
            $capmsg = 'Capacity: ' . $cap . '/10. Capacity full.';
            $alt = 'Click here to find alternative parkings nearby.';
            $msg = ['capmsg' => $capmsg, 'susmsg' => '', 'alt' => $alt];

            return view('main', $msg);
        }
        $msg = ['capmsg' => $capmsg, 'susmsg' => '', 'alt' => ''];
        return view('user/driveIn', $msg);
    }

    public function store()
    {

        // storing to db
        $drivein = new drivein();
        $inside = new inside();

        //cars with same registration
        $data = DB::select('select reg_num from insides where reg_num like ?', [request('reg_num')]);

        if (sizeof($data) >= 1) {
            $duplicate_msg = 'Vehicle with registration number ' . request('reg_num') . ' is already parked inside.';
            return redirect('/driveIn')->with('same', $duplicate_msg);
        }
        $drivein->reg_num = request('reg_num');
        $drivein->category = request('cat');
        $drivein->name = request('name');
        $drivein->num = request('num');


        $inside->reg_num = request('reg_num');
        $inside->category = request('cat');
        $inside->name = request('name');
        $inside->num = request('num');

        $drivein->save();
        $inside->save();

        //processing for navbar and return msg
        $arr = DB::select('select count(id) as count from insides');

        $cap = $arr[0]->count;


        $capmsg = 'Capacity:' . $cap . '/10';

        $msg = ['capmsg' => $capmsg, 'susmsg' => 'Vehicle entry successful', 'alt' => ''];
        return view('main', $msg);
    }
}
