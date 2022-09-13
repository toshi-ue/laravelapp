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

use App\Http\Controllers\HelloController;
use App\Http\Controllers\Chapter3Controller;
use App\Http\Controllers\Chapter4Controller;
use App\Http\Middleware\Chapter4Middleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
Route::get('chapter3', 'Chapter3Controller@index');
Route::get('chapter4', 'Chapter4Controller@index')->middleware(Chapter4Middleware::class);
