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

Route::get("getadmins","EnsController@getadmins");
Route::get("getens","EnsController@getens");




/**Les routes de l'enseignant */
/**ajouter enseignant */
Route::get('/iEnsForm', 'EnsController@iEnsForm');
Route::post('getens','EnsController@store');
/**modfier enseignant */
Route::get('getens/{id}/edit','EnsController@editEns');
Route::put('getens/{id}','EnsController@update');

/**supprimer enseignant */
Route::delete('getens/{id}','EnsController@destroy')->name('ens.destroy');