<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DemController extends Controller
{
    public function countRowsPerMonth()
    {
        $results = DB::table('students')
            ->where('year_c', '2021')
            ->whereIn('month_c', range(1, 12))
            ->select('month_c', DB::raw('COUNT(*) as count'))
            ->groupBy('month_c')
            ->orderBy('month_c')
            ->get();

        $monthlyCounts = array_fill(0, 12, 0); // Mảng trung gian với giá trị ban đầu là 0 cho 12 tháng

        foreach ($results as $result) {
            $monthIndex = intval($result->month_c) - 1;
            $monthlyCounts[$monthIndex] = $result->count;
        }

        return response()->json($monthlyCounts);
    }
}
