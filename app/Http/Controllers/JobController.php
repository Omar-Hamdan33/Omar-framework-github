<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobsmodel;

class JobController extends Controller
{
    public function index()
    {
        return view('job/index', [
            'name' => 'Job page',
            'jobs' => Jobsmodel::all()
        ]);
    }

    public function show($job)
    {
        return view('job/show', [
            'job' => $job
        ]);
    }

    public function create()
    {
        return view('job/create');
    }

    public function store(Request $request)
    {
        $job = Jobsmodel::create([
            'title' => $request->input('title'),
            'logo' => $request->input('logo'),
            'url' => $request->input('url')
        ]);
        return redirect('/jobs/' . $job->id);
    }

    public function edit($id)
    {
        if (empty($id)) {
            return redirect('/jobs');
        }

        if (request()->isMethod('POST') || request()->isMethod('PUT')) {
            $job = Jobsmodel::create([
                'id' => $id,
                'title' => request('title'),
                'logo' => request('logo'),
                'url' => request('url')
            ]);
            return redirect('/jobs/' . $job->id);
        } else {
            return view('job/edit', [
                'job' => Jobsmodel::find($id)
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $job = Jobsmodel::create([
            'id' => $id,
            'title' => $request->input('title'),
            'logo' => $request->input('logo'),
            'url' => $request->input('url')
        ]);
        return redirect('/jobs/' . $job->id);
    }

    public function destroy($job)
    {
        ($job->delete)();
        return redirect('/jobs');
    }
}