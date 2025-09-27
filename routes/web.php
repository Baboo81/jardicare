<?php

use App\Http\Controllers\OnePageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CookieConsentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OnePageController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

//Gestion des cookies :
Route::post('/cookie-consent', [CookieConsentController::class, 'store'])->name('cookie-consent');
