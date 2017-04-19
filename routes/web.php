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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservaOK', function () {
    return view('reservaOK');
});

Route::get('/reservaKO', function () {
    return view('reservaKO');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
