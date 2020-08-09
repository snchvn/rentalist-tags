<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('tag', 'TagController@index');
Route::get('tag/{id}', 'TagController@show');
Route::post('tag', 'TagController@store');
Route::put('tag/{id}', 'TagController@update');
Route::delete('tag/{id}', 'TagController@delete');
