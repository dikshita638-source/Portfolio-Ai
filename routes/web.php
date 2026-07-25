<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact.submit');

Route::get('/resume/download', [PortfolioController::class, 'downloadResume'])->name('resume.download');
