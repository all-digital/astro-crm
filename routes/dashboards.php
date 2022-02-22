<?php

use Illuminate\Support\Facades\Route;



Route::get('', [App\Http\Controllers\Dashboard\DashboardController::class, 'dashboard'])->name('dashboard');