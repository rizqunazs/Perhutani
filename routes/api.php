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


Route::get('/tebang', 'Api\TebangController@index');
Route::post('/tebang/store', 'Api\TebangController@store');
Route::get('/tebang/show/{id_tebang}', 'Api\TebangController@show');
Route::put('/tebang/update/{id_tebang}', 'Api\TebangController@update');
Route::delete('/tebang/delete/{id_tebang}', 'Api\TebangController@destroy');

Route::get('/tanam', 'Api\TanamController@index');
Route::post('/tanam/store', 'Api\TanamController@store');
Route::get('/tanam/show/{id_tanam}', 'Api\TanamController@show');
Route::put('/tanam/update/{id_tanam}', 'Api\TanamController@update');
Route::delete('/tanam/delete/{id_tanam}', 'Api\TanamController@destroy');