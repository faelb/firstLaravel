<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('allTestdata','App\Http\Controllers\TestdataController@index');
Route::get('withRelations','App\Http\Controllers\TestdataController@withRelations');
Route::get('getById/{id}','App\Http\Controllers\TestdataController@getById');
Route::post('createTestdata','App\Http\Controllers\TestdataController@createTestdata');
