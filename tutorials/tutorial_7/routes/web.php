<?php

use App\Http\Middleware\LowercaseName;
use App\Http\Middleware\RemoveSymbolsFromName;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/user/{name}', function (string $name) {
    return View('user', ['name' => $name]);
})->middleware('clean-name');

