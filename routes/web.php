<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/companies','CompanyController@index');
Route::get('/companies/{company}', 'CompanyController@show');

Route::get('/store', 'StoreController@index');

Route::get('/store/{store}/edit', 'StoreController@edit');
Route::put('/store/{store}','StoreController@update');

Route::post('/open-time/{store}', 'StoreTimeController@store');