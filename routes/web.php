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


Route::get('/continent', 'ContinentController@index');
Route::get('/continent/create', 'ContinentController@create');
Route::post('/continent', 'ContinentController@store');
Route::delete('/continent/{id}', 'ContinentController@destroy')->name('continent.destroy');
Route::get('/continent/{id}/edit', 'ContinentController@edit');
Route::put('/continent/{id}', 'ContinentController@update')->name('continent.update');
Route::get('/continent/{id}', 'ContinentController@show')->name('continent.show');


