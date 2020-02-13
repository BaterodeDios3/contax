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
    return view('home');
})->name('home');

// +++++++++++++++++++++++ Periodos ++++++++++++++++++++++++++++++++++++++
Route::get('periodos','PeriodoController@index')->name('periodos.index');
Route::get('periodos/create', 'PeriodoController@create')->name('periodos.create');
Route::post('periodos/store', 'PeriodoController@store')->name('periodos.store');

// ++++++++++++++++++++++++ Contribuyentes +++++++++++++++++++++++++++++++
Route::get('contribuyentes',  'ContribuyenteController@index')->name('contribuyentes.index');
Route::get('contribuyentes/create', 'ContribuyenteController@create')->name('contribuyentes.create');

// +++++++++++++++++++++++++ regímenes +++++++++++++++++++++++++++++++++++
Route::get('regimen',  'RegimenController@index')->name('regimen.index');
Route::get('regimen/create', 'RegimenController@create')->name('regimen.create');