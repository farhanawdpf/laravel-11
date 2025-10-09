<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
//  category
Route::get('/', [CategoryController::class, 'index']);

Route::get('create', [CategoryController::class, 'create'])->name('create');
Route::post('store', [CategoryController::class, 'store'])->name('store');

Route::get('edit/{catagory_id}', [CategoryController::class, 'update'])->name('edit');

Route::post('edit-store', [CategoryController::class, 'editStore'])->name('editStore');

Route::delete('delete', [CategoryController::class, 'destroy'])->name('delete');
