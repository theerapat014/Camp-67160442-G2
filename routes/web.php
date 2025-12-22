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
Route::get('/Info', [App\Http\Controllers\Info::class, 'index']);
Route::post('/Info', [App\Http\Controllers\Info::class, 'process']);

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/Flights', 'FlightController@index');
    Route::get('/Flights/{id}', 'FlightController@update');
    Route::post('/Flight', 'FlightController@store');

});


