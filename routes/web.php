<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CatrgoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;

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
// Route::get('/', function () {
//     return view('auth.login');
// });


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home');
})->name('dashboard'); 

//all employee
Route::get('/allemployee',[EmployeeController::class, 'index'])->name('allemployee');
Route::get('/details/{id}',[EmployeeController::class, 'details']);

