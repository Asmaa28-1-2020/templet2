<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers;
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
Route::get('insert','con1@insert');
Route::post('addacount','con1@addacount');
Route::get('show','con1@show');
Route::get('login','con1@login');
Route::get('home','con1@home');
Route::post('check','con1@check');
Route::get('{id}/delete','con1@delete');
Route::get('{id}/edit','con1@edit');
Route::post('{id}/update','con1@update');
Route::get('add','con1@add');
