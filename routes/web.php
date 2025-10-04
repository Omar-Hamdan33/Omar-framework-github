<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;



Route::view('/', 'Home');

Route::view('/about', 'About');

Route::view('/contact', 'Contact');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::match(['GET', 'POST', 'PUT'], '/jobs/edit/{id}', 'edit');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::put('/jobs/{id}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

Route::resource('jobs', JobController::class);