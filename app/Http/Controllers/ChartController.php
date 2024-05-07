<?php

namespace App\Http\Controllers;
use App\Models\drivein;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function showPieChart()
    {   
        $charge_2=DB::select('select sum(charge) as charge from driveins where status like "out" and category like "2-wheeler"');
        $charge_4=DB::select('select sum(charge) as charge from driveins where status like "out" and category like "4-wheeler"');
        $charge_o=DB::select('select sum(charge) as charge from driveins where status like "out" and category like "other"');
        // Retrieve data from the database (example)
        $data = drivein::all();
        // Process data and format it for the chart (example)
        
        return view('/main', compact('charge_2', 'charge_4','charge_o'));
    }
}
