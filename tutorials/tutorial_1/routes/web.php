<?php

use App\Http\Middleware\EnsureKeyIsValid;
use Illuminate\Support\Facades\Route;

Route::middleware([EnsureKeyIsValid::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/login', function () {
        return view('login');
    })->withoutMiddleware([EnsureKeyIsValid::class]);
});