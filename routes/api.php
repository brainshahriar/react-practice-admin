<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alldata',[TestController::class,'index']);

Route::post('/add-student',[TestController::class,'store']);

Route::get('/studentshow',[TestController::class,'show']);

Route::get('/edit-student/{id}',[TestController::class,'edit']);

Route::put('/update-student/{id}',[TestController::class,'update']);

Route::delete('/delete-student/{id}',[TestController::class,'destroy']);


Route::post('/store-details',[TestController::class,'storeDetails']);

Route::get('/show-details',[TestController::class,'showDetails']);

Route::get('/show-data',[TestController::class,'showData']);

Route::get('/datadetails/{id}',[TestController::class,'DataDetails']);

//contact route

Route::get('/contact',[ContactController::class,'indexapi']);

Route::post('/store-contact',[ContactController::class,'store']);



