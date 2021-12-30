<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::post("/register",[App\Http\Controllers\UserController::class,'register']);
Route::post("/login","UserController@login");
Route::get('/user','UserController@userInfo')->middleware('auth:api');
Route::get('/home/{ip}','IndexController@index');
Route::post('/feedback','IndexController@create');
Route::post('/insert','IndexController@addSkill');
