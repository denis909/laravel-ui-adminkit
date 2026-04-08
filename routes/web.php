<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')
    ->name('admin.')
    ->namespace('App\Http\Controllers\Admin')
    ->group(function() {
        Auth::routes([
            'login' => true,
            'logout' => true,
            'register' => false, // check admin role first...
            'reset' => false,
            'confirm' => false,
            'verify' => false
        ]);

        Route::middleware(['auth:admin'/*, 'verified'*/])->group(function() {
            require(__DIR__ . '/admin.php');
        });
    });

Route::namespace('App\Http\Controllers')->group(function() {
    Route::prefix('test')->controller('TestController')->group(function() {
        Route::get('send-email', 'sendEmail');
    });
});