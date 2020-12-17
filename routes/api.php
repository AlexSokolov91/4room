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

    Route::get('/currencies', 'ApiController@index');
    Route::get('/currencies/{currency}', 'Api\CurrencyController@show');
    Route::get('/currencies/{currency}/history', 'Api\CurrencyController@history');

