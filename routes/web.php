<?php

use App\Http\Middleware\HelloMiddleware;
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

Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::get('/hello/{person}', 'App\Http\Controllers\HelloController@index');
Route::post('/hello', 'App\Http\Controllers\HelloController@send');
Route::get('/hello/other', 'App\Http\Controllers\HelloController@other');
Route::get('/hello/json', 'App\Http\Controllers\HelloController@json');
Route::get('/hello/json/{id}', 'App\Http\Controllers\HelloController@json');


Route::get('/hello/{id}/{name}', 'App\Http\Controllers\HelloController@save');
Route::post('/hello', 'App\Http\Controllers\HelloController@index');
