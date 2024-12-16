<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserRoleRequest;
use Illuminate\Support\Facades\Route;


Route::middleware([CheckUserRoleRequest::class. ':editor|manager'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

Route::get('/login', function () {
    return view('login');
})->name('login'); 

Route::get('/login-as-editor', [UserController::class, 'loginAsEditor'])->name('login-as-editor');
Route::get('/login-as-manager', [UserController::class, 'loginAsManager'])->name('login-as-manager');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
