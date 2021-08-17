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

Route::post('/login', 'Api\AuthController@login');    //Login
Route::get('/logout', 'Api\AuthController@logout')->middleware(['auth:api']);    //logout
Route::post('/file-upload', 'Api\FileController@uploadDoc')->middleware(['auth:api']);    //file-upload
