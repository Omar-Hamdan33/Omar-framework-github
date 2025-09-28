<?php

use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Jobsmodel;




Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view(view: 'about');
});


Route::get('/contact', function () {
    return view(view: 'contact');
});


Route::get('/jobs', function () {
    return view( 'jobs', [
        'name' => 'Job page',
        'jobs' => Jobsmodel::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {


    return view('job', [
        'job' => Jobsmodel::find($id)
    ]);
});