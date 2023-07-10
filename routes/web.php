<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\chartresultcontroller;
use App\Models\student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [ViewController::class, 'Viewhome'])->name('Viewhome');


Route::get('/bigupload', [Homecontroller::class, 'bigupload'])->name('bigupload');
Route::post('/biguplpad', [Homecontroller::class, 'chunking'])->name('chunking');
Route::get('/upload-csv-file', [Homecontroller::class, 'upload'])->name('upload');

Route::get('get-data', [SearchController::class, 'getData'])->name('getData');
Route::get('historysearch', [SearchController::class, 'showData'])->name('showData');

Route::get('about', [aboutcontroller::class, 'showAbout'])->name('showAbout');

Route::get('result', [ChartResultController::class, 'resultTraining'])->name('resultTraining');
Route::get('count-by-year', [ChartResultController::class, 'countByYear'])->name('countByYear');
