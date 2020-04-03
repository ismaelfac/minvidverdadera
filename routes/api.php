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

Route::group(['middleware' => ['cors']], function () {
    Route::resource('countries', 'Parameters\CountryController');
    Route::resource('departaments', 'Parameters\DepartamentController');
    Route::resource('municipalities', 'Parameters\MunicipalityController');
    Route::resource('locations', 'Parameters\LocationController');
    Route::resource('neighborhood', 'Parameters\NeighborhoodController');
    Route::resource('person', 'PersonController');
});

Route::resource('person','PersonController');
