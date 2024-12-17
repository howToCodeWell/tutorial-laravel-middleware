<?php

use Illuminate\Support\Facades\Route;

Route::middleware('api.key')->group(function (){
    Route::get('/api', function () {
        return Response()->json(['message' => 'welcome']);
    });
});

Route::get('/', function () {
    return view('welcome');
});