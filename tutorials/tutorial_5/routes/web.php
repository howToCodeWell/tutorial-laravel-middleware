<?php

use App\Http\Middleware\RequireAPIKey;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::middleware('api.key')->group(function () {
    Route::get('/api', function () {
        return Response::json(['message' => 'welcome']);
    });
});

Route::get('/', function () {
    return view('welcome');
});