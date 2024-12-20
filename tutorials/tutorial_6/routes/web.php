<?php

use App\Http\Middleware\LowercaseName;
use App\Http\Middleware\RemoveSymbolsFromName;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}', function (string $name) {
    return view('user', ['name' => $name]);
})->middleware([LowercaseName::class, RemoveSymbolsFromName::class]);
