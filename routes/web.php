<?php

use App\Http\Controllers\JadersWebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [JadersWebController::class, 'contact'])->name('contact');
Route::post('/sendemail', [JadersWebController::class, 'sendemail'])->name('sendemail');

Route::get('/about', [JadersWebController::class, 'about'])->name('about');
Route::get('/skills', [JadersWebController::class, 'skills'])->name('skills');