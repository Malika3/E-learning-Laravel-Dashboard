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
Route::get("getsalles","SalleController@getsalles");
Route::get("getmodules","ModuleController@getmodules");
Route::get("getniveaux","NiveauxController@getniveaux");
Route::get("getseances","SeanceController@getseances");
Route::get("getgroupes","GroupeController@getgroupes");



/**Les routes de l'emploi */

Route::get("getnivempt","emptController@getnivempt");
Route::get("getempt","emptController@getempt");

Route::get("filter","emptController@filter");
Route::get("get1CPI","emptController@get1CPI");











/**Les routes de l'enseignant */
/**ajouter enseignant */
Route::get('/iEnsForm', 'EnsController@iEnsForm');
Route::post('getens','EnsController@store');
/**modfier enseignant */
Route::get('getens/{id}/edit','EnsController@editEns');
Route::put('getens/{id}','EnsController@update');

/**supprimer enseignant */
Route::delete('getens/{id}','EnsController@destroy')->name('ens.destroy');


/**Les routes de la salle */
Route::get('/insalleform', 'SalleController@insalleform');
Route::post('getsalles','SalleController@store');
/**modfier salle */
Route::get('getsalles/{id}/edit','SalleController@editsalle');
Route::put('getsalles/{id}','SalleController@update');
/**supprimer salle */
Route::delete('getsalles/{id}','SalleController@destroy')->name('salle.destroy');


/**Les routes du module */
Route::get('/imoduleForm', 'ModuleController@imoduleForm');
Route::post('getmodules','ModuleController@store');
/**modfier module */
Route::get('getmodules/{id}/edit','ModuleController@editmodule');
Route::put('getmodules/{id}','ModuleController@update');
/**supprimer module */
Route::delete('getmodules/{id}','ModuleController@destroy')->name('module.destroy');


/**Les routes du niveau */
Route::get('/insnivform', 'NiveauxController@insnivform');
Route::post('getniveaux','NiveauxController@store');
/**modfier module */
Route::get('getniveaux/{id}/edit','NiveauxController@editniv');
Route::put('getniveaux/{id}','NiveauxController@update');
/**supprimer module */
Route::delete('getniveaux/{id}','NiveauxController@destroy')->name('niveau.destroy');




/**Les routes du groupe */
Route::get('/insgroupe', 'GroupeController@insgroupe');
Route::post('getgroupes','GroupeController@store');
/**modfier module */
Route::get('getgroupes/{id}/edit','GroupeController@editgroupe');
Route::put('getgroupes/{id}','GroupeController@update');
/**supprimer module */
Route::delete('getgroupes/{id}','GroupeController@destroy')->name('groupe.destroy');



/**Les routes du seance */
Route::get('/inseance', 'SeanceController@inseance');
Route::post('getseances','SeanceController@store');
/**modfier module */
Route::get('getseances/{id}/edit','SeanceController@editseance');
Route::put('getseances/{id}','SeanceController@update');
/**supprimer module */
Route::delete('getseances/{id}','SeanceController@destroy')->name('seance.destroy');


