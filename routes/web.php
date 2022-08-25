<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController2;
use App\Http\Controllers\CustomerController;

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

Route::get('list', [ProductController::class, 'index']);
Route::get('add', [ProductController::class, 'add']);
Route::post('save', [ProductController::class, 'save']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('update', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);

Route::get('/', [ProductController2::class, 'index']);
Route::get('/products', [ProductController2::class, 'showProducts']);
Route::get('/details/{id}', [ProductController2::class, 'details']);

Route::get('/register', [CustomerController::class, 'register']);
Route::post('/register-process', [CustomerController::class, 'registerProcess'])->name('register-process');
Route::get('/login', [CustomerController::class, 'login']);
Route::post('/login-process', [CustomerController::class, 'loginProcess'])->name('login-process');
Route::get('/logout', [CustomerController::class, 'logout']);

Route::get('/admin', [AdminController::class, 'admin']);

Route::get('user', [CustomerController::class, 'index']);
Route::get('user_edit/{id}', [CustomerController::class, 'user_edit']);
Route::post('user_update', [CustomerController::class, 'user_update']);
Route::get('user_delete/{id}', [CustomerController::class, 'user_delete']);
Route::get('add_user', [CustomerController::class, 'add_user']);
Route::post('user_save', [CustomerController::class, 'user_save']);