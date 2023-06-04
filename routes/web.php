<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::post('/vip_request/create', [App\Http\Controllers\VipRequestController::class, 'create']);

Route::post('/profile/update', [App\Http\Controllers\UserController::class, 'profile_update']);
Route::post('/profile/savepassword', [App\Http\Controllers\UserController::class, 'SavePassword']);
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile']);

Route::get('/app/user/{id}/destroy', [App\Http\Controllers\UserController::class, 'destroy']);
Route::post('/app/user/{id}/update', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/app/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/app/user/create', [App\Http\Controllers\UserController::class, 'create']);
Route::get('/app/user/new', [App\Http\Controllers\UserController::class, 'new']);
Route::get('/app/users', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/app/vip_request/{id}/accept', [App\Http\Controllers\VipRequestController::class, 'accept']);
Route::get('/app/vip_request/{id}/decline', [App\Http\Controllers\VipRequestController::class, 'decline']);
Route::get('/app/vip_requests', [App\Http\Controllers\VipRequestController::class, 'index']);

Route::get('/app/logs', [App\Http\Controllers\LogController::class, 'index']);

Route::get('/app/backup/export/users', [App\Http\Controllers\BackupController::class, 'ExportUsers']);
Route::post('/app/backup/import/users', [App\Http\Controllers\BackupController::class, 'ImportUsers']);
Route::get('/app/backup/export/logs', [App\Http\Controllers\BackupController::class, 'ExportLogs']);
Route::post('/app/backup/import/logs', [App\Http\Controllers\BackupController::class, 'ImportLogs']);
Route::get('/app/backup', [App\Http\Controllers\BackupController::class, 'index']);

Route::get('/app', [App\Http\Controllers\AdminController::class, 'index']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');