<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.menu');
});

Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
