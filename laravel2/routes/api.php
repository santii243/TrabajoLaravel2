<?php

use Illuminate\Http\Request;

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
/* TODO: Autenticacion API Descomentar en un futuro
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('ciclos', 'CicleController@index');
Route::get('ciclos/{id}', 'CicleController@show');
Route::post('ciclos', 'CicleController@create');

