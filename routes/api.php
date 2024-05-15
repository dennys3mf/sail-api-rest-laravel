<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ArticuloController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/articulos', 'App\Http\Controllers\ArticuloController@index'); 
Route::post('/articulos', 'App\Http\Controllers\ArticuloController@store');
Route::put('/articulos/{id}', 'App\Http\Controllers\ArticuloController@update');
Route::delete('/articulos/{id}', 'App\Http\Controllers\ArticuloController@destroy');
