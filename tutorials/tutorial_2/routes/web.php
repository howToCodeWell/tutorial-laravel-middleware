<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UpdateUserRequest;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/list', [UserController::class, 'list'])
    ->middleware([UpdateUserRequest::class]);

