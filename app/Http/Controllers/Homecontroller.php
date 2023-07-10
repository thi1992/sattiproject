<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Str;
use File;

class Homecontroller extends Controller
{
    public function bigupload(){
        return view('bigupload');
    }

    public function chunking(Request $req){
        $req->validate([
            'csvfile'=>'required|mimes:csv'
        ]);

        $data = file($req->csvfile);
        $chunks = array_chunk($data, 10000);
        $part = storage_path('temp');
        foreach($chunks as $key => $chunk){
            $csv_file = $part."/csv-chunk-{$key}-".Str::random(9)."-".time()."-file.csv";
            file_put_contents($csv_file,$chunk);
        }
        return redirect()->route('upload');    
    }

    public function upload()
    {
        $part = storage_path('temp');
        $files = glob($part.'/*.csv');

        foreach($files as $key => $file){
            $csv = array_map('str_getcsv', file($file));
            if($key==0){
                $header = $csv[0];
                $header = array_map(function($value){
                return str_replace(' ','_',strtolower($value));
                }, $header);
                unset($csv[0]);
            }           

            foreach ($csv as $key => $value) {
                $record = array();
                foreach ($header as $index => $headerField) {
                    if (isset($value[$index])) {
                        $record[$headerField] = $value[$index];
                    } else {
                        $record[$headerField] = null;
                    }
                }
                student::create($record);
            }
            if(File::exists($file)){
                File::delete($file);
            }
        }
    }
}
