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

Route::get('/index', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {
    return "Bienvenide";
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/preguntas', function () {
    return view('preguntas');
});
Route::get('/olvidePass', function () {
    return view('olvidePass');
});
Route::get('/passRecuperada', function () {
    return view('passRecuperada');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
