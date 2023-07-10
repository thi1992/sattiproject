<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function showData()
    {
        return view('historysearch');
    }
    
    public function getData()
    {        
        $data = student::select(['gen_c', 'name_c', 'team_c', 'courses_name_c','year_c','month_c'])->get();
        return response()->json(['data' => $data]);
    }
}
