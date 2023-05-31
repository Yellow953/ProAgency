<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::post('/vip_request/create', [App\Http\Controllers\VipRequestController::class, 'create']);

Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'Edit']);
Route::post('/user/{id}/update', [App\Http\Controllers\UserController::class, 'Update']);
Route::post('/user/{id}/savepassword', [App\Http\Controllers\UserController::class, 'SavePassword']);

Route::get('/app/users', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/app/vip_requests', [App\Http\Controllers\VipRequestController::class, 'index']);

Route::get('/app', [App\Http\Controllers\AdminController::class, 'index']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');