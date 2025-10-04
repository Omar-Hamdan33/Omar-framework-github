<x-layout>
    <x-slot:title>
       create Job
    </x-slot:title>

<form action="/jobs" method="POST">
    @csrf
    <input type="text" name="title" placeholder="title" required>
    @error('title')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <input type="text" name="logo" placeholder="logo" required>
    @error('logo')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <input type="text" name="url" placeholder="url" required>
    @error('url')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <button type="submit">submit</button>
</form>

 

</x-layout>