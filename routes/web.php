<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{code}','UrlController@show');
Route::post('url','UrlController@store');

// infinite scroll
Route::get('url/index', 'UrlController@index');
