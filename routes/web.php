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



Route::get('penyakit','PenyakitController@index');
Route::get('penyakit/create','PenyakitController@create');
Route::post('penyakit/store','PenyakitController@store');
Route::get('penyakit/edit/{id}','PenyakitController@edit');
Route::post('penyakit/update/{id}','PenyakitController@update');
Route::delete('penyakit/delete/{id}','PenyakitController@destroy');

Route::get('gejala','GejalaController@index');
Route::get('gejala/create','GejalaController@create');
Route::post('gejala/store','GejalaController@store');
Route::get('gejala/edit/{id}','GejalaController@edit');
Route::post('gejala/update/{id}','GejalaController@update');
Route::delete('gejala/delete/{id}','GejalaController@destroy');

Route::get('tentu','TentuController@index');

Route::get('solusi','SolusiController@index');
Route::get('solusi/create','SolusiController@create');
Route::post('solusi/store','SolusiController@store');
Route::get('solusi/edit/{id}','SolusiController@edit');
Route::post('solusi/update/{id}','SolusiController@update');
Route::delete('solusi/delete/{id}','SolusiController@destroy');



Route::get('page/getcity', 'PageController@getcity');
Route::get('page/getprovince', 'PageController@getprovince');
