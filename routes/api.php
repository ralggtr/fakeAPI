<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vData;

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

Route::get('/vacunacion',[vData::class,'index']);
Route::get('/vacunacionGT',[vData::class,'indexGT']);
Route::get('/vacunacion2GT',[vData::class,'index2GT']);



