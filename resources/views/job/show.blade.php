
<x-layout>
  @if (!empty($job) && $job->id !== null)
    
        <div style="border: 1px solid black; padding: 10px; margin: 10px; width: 20rem; align-items: center; text-align: center;">
            <hr>
            <img src="{{ $job->logo }}" alt="logo" style="width: 50px; height: 50px;" > <hr> </img>
            <h2><a href="/jobs/{{ $job->id }}">{{ $job->title }}</a></h2 >
            <a href="{{ $job->url }}">Apply Now</a>
            <a href="/jobs/edit/{{ $job->id }}">Edit Job</a>
            <hr>
        </div>
       

    @else
        <h1>Job not found</h1>
    @endif
  

</x-layout>