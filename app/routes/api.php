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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//rutas para API
//listar todas las categorias
Route::get('categories','App\Http\Controllers\CategoryController@index');

//listar por id
Route::get('category/{id}','App\Http\Controllers\CategoryController@show');

//guardar
Route::post('category','App\Http\Controllers\CategoryController@store');

//update
Route::put('category','App\Http\Controllers\CategoryController@store');

//eliminar
Route::delete('category/{id}','App\Http\Controllers\CategoryController@destroy');