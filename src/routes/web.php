<?php

use AshokDevatwal\EnvManager\Http\Controllers\EnvManagerController;
use AshokDevatwal\EnvManager\Http\Middleware\EnvManagerAuth;

Route::middleware([EnvManagerAuth::class])->group(function () {
    Route::get('/env-manager', [EnvManagerController::class, 'index'])->name('envmanager.index');
    Route::post('/env-manager', [EnvManagerController::class, 'update'])->name('envmanager.update');
});