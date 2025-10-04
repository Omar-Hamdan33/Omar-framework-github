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
    return view( 'job/index', [
        'name' => 'Job page',
        'jobs' => Jobsmodel::all()
    ]);
});

Route::get('/jobs/create', function () {
    return view('job/create');
});

Route::get('/jobs/{id}', function ($id) {


    return view('job/show', [
        'job' => Jobsmodel::find($id)
    ]);
});



Route::post('/jobs', function () {
    $job = Jobsmodel::create([
        'title' => request('title'),
        'logo' => request('logo'),
        'url' => request('url')
    ]);
    return redirect('/jobs/' . $job->id);
});