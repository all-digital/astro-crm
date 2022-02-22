<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Dashboard\FinanceController::class, 'finance'])->name('finance');