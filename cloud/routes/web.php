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

/*
Route::get('/nomina', function () {
    return view('nominaV');
});

Route::get('/', function () {
    return view('home');
});
*/
Route::get('/','Controller@index');
Route::get('datash','Controller@datashboard');
Route::get('empleadosC','Controller@empleadosPerfil');