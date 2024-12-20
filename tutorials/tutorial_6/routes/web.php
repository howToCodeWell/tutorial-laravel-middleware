<?php

use App\Http\Middleware\LowercaseName;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/user/{name}', function (string $name) {
    return View('user', ['name' => $name]);
})->middleware(LowercaseName::class);

