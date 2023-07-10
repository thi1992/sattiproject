<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class ChartResultController extends Controller
{
        public function resultTraining()
    {
        $year = "2022"; // Năm bạn muốn đếm
        $counts = student::countByMonthYear($year);
        return view('chart', compact('counts'));
    }

    public function countByYear(Request $request)
    {
        $year = $request->query('year', null);
        $counts = student::countByMonthYear($year);
        return response()->json([
            'counts' => $counts,
        ]);
    }
}
