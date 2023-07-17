<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseInfoController extends Controller
{
    public function courseinfoView(){
        return view('courseinfo');
    }
}
