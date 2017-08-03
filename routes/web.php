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

Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();

Route::auth();

Route::resource('sistema/usuario','Usuarios');
Route::resource('sistema/cancha','Canchas');
Route::resource('sistema/mensaje','Mensajes');


