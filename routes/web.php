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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/android', function(){
    return view ('android');
});

Route::get('/iphone', function(){
    return view ('iphone');
});

Route::get('/informatica', function(){
    return view ('informatica');
});

Route::get('/audio-video', function(){
    return view ('audio-video');
});

Route::get('/soporte', function(){
    return view ('soporte');
});

Route::get('/donde-comprar', function(){
    return view ('donde-comprar');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

