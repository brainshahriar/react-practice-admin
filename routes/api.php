<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendenceController; 

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

 /////////////// User Login API Start ////////////////////////

 // Login Routes 
Route::post('/login',[AuthController::class, 'Login']);

 // Register Routes
Route::post('/register',[AuthController::class, 'Register']);

 // Current User Route 
Route::get('/user',[UserController::class, 'User'])->middleware('auth:api');
 /////////////// End User Login API Start ////////////////////////

//all employee route

Route::post('/employeeupdatestore',[EmployeeController::class, 'updatestoreapi']);
Route::post('/employeestore',[EmployeeController::class, 'storeapi']);
Route::get('/allemployee',[EmployeeController::class, 'indexapi']);

//

Route::post('/attendencestore',[AttendenceController::class, 'indexapi']);

Route::get('/attendencedetails/{id}',[AttendenceController::class, 'detailsapi']);
Route::get('/attendencedetails2/{id}',[AttendenceController::class, 'detailsapi2']);

Route::post('/attendenceupdate',[AttendenceController::class, 'updateapi']);

Route::get('/details/{id}',[EmployeeController::class, 'details']);








