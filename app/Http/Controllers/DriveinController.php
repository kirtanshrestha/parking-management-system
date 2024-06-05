<?php

namespace App\Http\Controllers;

use App\Models\drivein;
use App\Models\inside;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDO;

class DriveinController extends Controller
{
    public function index()
    {
        
        $arr = DB::select('select cap  from capacity');
        $total = $arr[0]->cap;
        $arr = DB::select('select count(id) as count from insides');
        $table = DB::select('select * from rates');

        $cap = $arr[0]->count;

        if ($cap < $total)
            $capmsg = 'Capacity: ' . $cap . '/'. $total;
        else {
            $capmsg = 'Capacity: ' . $cap . '/'.$total.'. Capacity full.';
            $alt = 'Click here to find alternative parkings nearby.';
            $msg = ['capmsg' => $capmsg, 'susmsg' => '', 'alt' => $alt];

            return view('main', $msg);
        }
        $msg = ['capmsg' => $capmsg, 'susmsg' => '', 'alt' => '', 'data' => $table];
        return view('user/driveIn', $msg);
    }

    public function store(Request $request)
    {
                
        $arr = DB::select('select cap  from capacity');
        $total = $arr[0]->cap;
        // storing to db
        $drivein = new drivein();
        $inside = new inside();

        //cars with same registration
        $data = DB::select('select reg_num from insides where reg_num like ?', [request('reg_num')]);

        if (sizeof($data) >= 1) {
            $duplicate_msg = 'Vehicle with registration number ' . request('reg_num') . ' is already parked inside.';
            return redirect('/driveIn')->with('same', $duplicate_msg);
        }

        $errors = [];



        //validating num and reg num
        $phoneNumber = $request->input('num');
        $regNumber = $request->input('reg_num');

        // Define the regular expression for validation
        $regexnum = '/^(\+977)?[9][6-8]\d{8}$/';
        $regexreg = '/^[A-Za-z]+\s[A-Za-z]+\s[0-9]{4}$/';

        // Validate the phone number using preg_match
        if (!preg_match($regexnum, $phoneNumber)) {
            $errors['num'] = "Invalid Phone number.";
        }
        if (!preg_match($regexreg, $regNumber)) {
            $errors['reg'] = "Invalid Registraion number.";
        }

        if (!empty($errors)) {
            return redirect('/driveIn')->withErrors($errors);
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


        $capmsg = 'Capacity:' . $cap . '/'.$total;

        $msg = ['capmsg' => $capmsg, 'susmsg' => 'Vehicle entry successful', 'alt' => ''];
        return view('main', $msg);
    }
}
