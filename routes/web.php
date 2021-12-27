<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
Route::get('/', function () {
    return view('auth.login');
});


// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home');
})->name('dashboard');

//contact route

Route::get('/contactdetails',[ContactController::class,'index'])->name('contact');

//category
Route::get('/category',[CatrgoryController::class,'index'])->name('category');
Route::post('/category-store',[CatrgoryController::class,'store'])->name('store-category');
Route::get('/delete-category/{id}',[CatrgoryController::class,'delete']);

//subcategory
Route::get('/subcategory',[SubcategoryController::class,'index'])->name('subcategory');
Route::post('/subcategory-store',[SubcategoryController::class,'store'])->name('store-subcategory');
Route::get('/delete-subcategory/{id}',[SubcategoryController::class,'delete']);