<x-layout>
    <x-slot:title>
        {{ $name ?? 'title' }} 
    </x-slot:title>


    @foreach ($jobs as $job)
    
        <div style="border: 1px solid black; padding: 10px; margin: 10px; width: 20rem; align-items: center; text-align: center;">
            <hr>
            <img src="{{ $job->logo }}" alt="logo" style="width: 50px; height: 50px;" > <hr> </img>
            <h2><a href="/jobs/{{ $job->id }}">{{ $job->title }}</a></h2 >
            <a href="{{ $job->url }}">Apply Now</a>
            <hr>
        </div>
       
    @endforeach

</x-layout>