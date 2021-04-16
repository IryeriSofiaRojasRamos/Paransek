<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('bienvenida');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
