<?php

use App\Http\Controllers\OnePageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OnePageController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
