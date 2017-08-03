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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('usuario', 'Usuarios@show');

Route::post('usuario', 'Usuarios@store');

Route::delete('usuario', 'Usuarios@delete');

Route::get('mensaje', 'Mensajes@show');

Route::post('mensaje', 'Mensajes@store');

Route::delete('mensaje', 'Mensajes@delete');

Route::get('cancha', 'CanchasApi@show');

Route::post('cancha', 'CanchasApi@store');

Route::delete('cancha', 'CanchasApi@delete');
