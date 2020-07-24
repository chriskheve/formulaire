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

Route::get('/', [
    'as' => 'root_path', //nom de la route
    'uses' => 'HomeController@index' // NomControlleur@action
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/document', 'DocRefController@index')->name('docRef');
Route::post('/document', 'DocRefController@store')->name('docRef.store');

Route::get('/etat/{id}', 'EtatController@index')->name('etat');
Route::post('/etat/{id}', 'EtatController@store')->name('etat.post');


Route::get('/controle/{id}', 'ControleController@index')->name('controle');
Route::post('/controle/{id}', 'ControleController@store')->name('controle.post');

Route::get('/traitement/{id}', 'TraitementController@index')->name('traitement');
Route::post('/traitement/{id}', 'TraitementController@store')->name('traitement.post');

Route::get('/avis/{id}', 'AvisController@index')->name('avis');
Route::post('/avis/{id}', 'AvisController@store')->name('avis.post');


Route::get('/print/{id}', 'PrintController@index')->name('print');