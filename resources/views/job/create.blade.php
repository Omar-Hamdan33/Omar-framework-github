<x-layout>
    <x-slot:title>
       create Job
    </x-slot:title>

<form action="/jobs" method="POST">
    @csrf
    <input type="text" name="title" placeholder="title" required>
    <input type="text" name="logo" placeholder="logo">
    <input type="text" name="url" placeholder="url">
    <button type="submit">submit</button>
</form>

 

</x-layout>