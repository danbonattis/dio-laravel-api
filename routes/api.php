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

/*Route::get('hello/{name}', function($name) {
    return "hello " . $name;
});

Route::get('hello-post/{name}', 'HelloWorldController@hello');*/

Route::get('bands', 'BandController@getAll');
Route::post('bands/store', 'BandController@store');
Route::get('bands/gender/{gender}', 'BandController@getBandsByGender');
Route::get('bands/{id}', 'BandController@getById');



Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();

});
