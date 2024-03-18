<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\EmployeeController::class, 'index'])->name('index');
