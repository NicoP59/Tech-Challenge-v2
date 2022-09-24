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

// C'est ici que vous pouvez enregistrer des routes Web pour votre application. Ces
//  les routes sont chargées par le RouteServiceProvider au sein d'un groupe qui
// contient le groupe middleware "web".

Route::get('/', 'App\Http\Controllers\ArgonauteController@AffichageArgo');
Route::get('/FormUpdate/{id}', 'App\Http\Controllers\ArgonauteController@AffichageFormUpdate');


// CRUD

Route::post('/create-argonaute', 'App\Http\Controllers\ArgonauteController@create');
Route::post('/FormUpdate/{id}', 'App\Http\Controllers\ArgonauteController@update');
Route::get('/delete-argonaute/{id}', 'App\Http\Controllers\ArgonauteController@delete');
