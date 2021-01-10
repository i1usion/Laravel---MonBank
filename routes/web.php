<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/transfer/confirm', [App\Http\Controllers\TransferController::class, 'confirm']);

Route::post('/transfer/send', [App\Http\Controllers\TransferController::class, 'send']);

Route::get('/history', [App\Http\Controllers\TransferController::class, 'history']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'main']);

Route::get('/admin/transactions', [App\Http\Controllers\AdminController::class, 'transactions']);

Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users']);

Route::post('/admin/users/delete', [App\Http\Controllers\AdminController::class, 'deleteUser']);

Route::post('/admin/users/edit', [App\Http\Controllers\AdminController::class, 'editUser']);

Route::get('/admin/users/new', [App\Http\Controllers\AdminController::class, 'newUser']);
