<?php

use App\Http\Controllers\OnePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OnePageController::class, 'index'])->name('home');
