<?php

use App\Http\Middleware\EnsureKeyIsValid;
use Illuminate\Support\Facades\Route;

// Adds a middleware to route '/'
// Route::get('/', function () {
//     return view('welcome');
// })->withMiddleware([EnsureKeyIsValid::class]);

Route::middleware([EnsureKeyIsValid::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
 
    Route::get('/login', function () {
        return view('login');
    })->withoutMiddleware([EnsureKeyIsValid::class]);
});