<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::post('/request/vip', [App\Http\Controllers\HomeController::class, 'vip']);

Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'Edit']);
Route::post('/user/{id}/update', [App\Http\Controllers\UserController::class, 'Update']);
Route::post('/user/{id}/savepassword', [App\Http\Controllers\UserController::class, 'SavePassword']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');