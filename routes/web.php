<?php

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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('/operations', 'OperationController');
    Route::get('/transfer', 'HomeController@transfer');
    Route::get('/refill', 'HomeController@refill');
    Route::get('/withdraw', 'HomeController@withdraw');
});

