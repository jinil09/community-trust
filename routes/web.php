<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/donate', [PageController::class, 'donate'])->name('donate');
Route::post('/volunteer', [PageController::class, 'volunteer'])->name('volunteer');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.form');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');
Route::get('/volunteer-form', [VolunteerController::class, 'showForm'])->name('volunteer.form');
Route::post('/volunteer-form', [VolunteerController::class, 'submitForm'])->name('volunteer.submit');

// Route::get('/', function () {
//     return view('welcome');
// });
