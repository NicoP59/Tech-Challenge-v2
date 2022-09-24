<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// C'est ici que vous pouvez enregistrer des routes d'API pour votre application. Ces
//   routes sont chargées par le RouteServiceProvider au sein d'un groupe qui
//  se voit attribuer le groupe middleware "api". Amusez-vous à créer votre API !

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
