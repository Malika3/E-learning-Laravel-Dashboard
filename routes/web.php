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

Auth::routes();

/**Les routes de l'enseignant */
Route::get('/home', 'EnsController@dash')->name('home');
Route::get('/iEnsForm', 'EnsController@iEnsForm');
Route::post('enstore','EnsController@store');

Route::delete('home/{id}','EnsController@destroy')->name('ens.destroy');
Route::get('home/{id}/edit','EnsController@edit');
Route::put('home/{id}','EnsController@update');

