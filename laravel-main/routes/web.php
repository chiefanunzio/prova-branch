<?php

use Illuminate\Support\Facades\Route;

Route::get('/','MainController@indexView') -> name('indexViewLink');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
