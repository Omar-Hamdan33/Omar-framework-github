<x-layout>
    <x-slot:title>
       Edit Job
    </x-slot:title>

<form action="/jobs/edit/{{ $job->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="title" value="{{ $job->title }}" required>
    @error('title')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <input type="text" name="logo" placeholder="logo" value="{{ $job->logo }}" required>
    @error('logo')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <input type="text" name="url" placeholder="url" value="{{ $job->url }}" required>
    @error('url')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <button type="submit">submit</button>
    <button form="delete-form" type="submit" style="background-color: red; color: white;">Delete</button>
</form>

<form id="delete-form" action="/jobs/{{ $job->id }}" method="POST">
    @csrf
    @method('DELETE')
</form>

 

</x-layout>