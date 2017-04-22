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
    return view('inicio');
})->name('home');
Route::get('/formulario-alta', function () {
    return view('formularioAlta');
});
Route::get('/reserva-correcta', function () {
    return view('reservaOK');
});
Route::get('/reserva-errónea', function () {
    return view('reservaKO');
});
Route::get('/instalaciones', function () {
    return view('instalaciones');
})->name('instalaciones');
Route::get('/login-cliente', function () {
    return view('login');
})->name('loginCliente');
Route::get('/registro', function () {
    return view('registro');
})->name('registro');
Route::get('/reservas', function () {
    return view('reservas');
})->name('reservas');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::resource('booking', 'BookingController', ['only' => [
    'store'
]]);

Route::post('/booking/create', 'BookingController@store');

Route::post('/client/create', 'ClientController@store');