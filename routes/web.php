<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes([
    'verify' => true,
]);

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::namespace('App\Http\Controllers')->group(function() {
    Route::prefix('test')->controller('TestController')->group(function() {
        Route::get('send-email', 'sendEmail');
    });
});