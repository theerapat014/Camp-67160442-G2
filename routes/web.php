<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});
Route::get('/view2', function () {
    return view('html102');
});
Route::get('/MyController', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/MyController', [App\Http\Controllers\MyController::class, 'process']);
