<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function Downloadview(){
        return view('download');
    }

    public function download1(){
        try{
            $myFile = storage_path("download/gxwork2.rar");
            return response()->download($myFile);
        }
        catch (Exception $e)
        {
            abort(404);
        }
    }
}
