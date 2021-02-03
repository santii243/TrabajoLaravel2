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

/* Rutas de ciclos */
Route::get('cicles', 'CicleController@index');
Route::get('cicles/{cicleID}/articles', 'CicleController@listArticlesByCicleID');
Route::get('cicles/{cicleID}/offers', 'CicleController@listOffersByCicleID');

/* Rutas de usuarios */
Route::get('users', 'UserController@index');

/* Rutas de ofertas */
Route::get('offers', 'OfferController@index');

/* Rutas de noticias */
Route::get('articles', 'ArticleController@index');

/* Rutas de applieds */
Route::post('applieds', 'AppliedController@store');
Route::delete('applieds/offers/{offer_id}/users/{user_id}', 'AppliedController@unapplyUserFromAppliedOffer');
