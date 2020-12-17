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

Route::get('/currencies', 'CurrencyController@index')->name('index');
Route::get('/currencies/{currency}', 'CurrencyController@show')->name('show');
Route::get('/currencies/{currency}/history', 'CurrencyController@history')->name('history');
