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
Route::get('testdataWithRelations','App\Http\Controllers\TestdataController@testdataWithRelations');
Route::get('clientWithRelations','App\Http\Controllers\ClientController@clientWithRelations');
Route::get('getById/{id}','App\Http\Controllers\TestdataController@getById');

Route::post('createTestdata','App\Http\Controllers\TestdataController@createTestdata');
