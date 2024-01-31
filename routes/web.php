<?php

use Illuminate\Support\Facades\Route;

use sytou\test\Controllers\TestController;


Route::controller(TestController::class)->group(function () {
    Route::get('/home', 'index');
   
});