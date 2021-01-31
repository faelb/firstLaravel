<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route geregelt über PageController
Route::get('/','App\Http\Controllers\PageController@index');


//Route::get('/testdatas','App\Http\Controllers\TestdataController@index');

//Route::get('/', function () {
//    return view('vue');
//});
