<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MyC\MyController;
use app\Http\Controllers\MyC;
use app\Http\Controllers;
use Illuminate\Http\Request;


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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('h',function(){
    return view('main');
});

Route::namespace('App\Http\Controllers\MyC')->group(function(){
    Route::get('/','C1@page1');
});

Route::get('/g','App\Http\Controllers\Ff@page1');
