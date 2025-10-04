<x-navlink href="/" :active="request()->routeIs('home')" > Home </x-navlink>
<x-navlink href="/about" :active="  request()->routeIs('about') " > About </x-navlink>
<x-navlink href="/contact" :active="  request()->routeIs('contact') " > contact </x-navlink>
<x-navlink href="/jobs" :active="  request()->routeIs('jobs') " > Jobs </x-navlink>
<x-navlink href="/jobs/create" :active="  request()->routeIs('jobs/create') " > create Job </x-navlink>
<x-navlink href="/contact" :active="  request()->routeIs('contact') " type="none" > none </x-navlink>
<h1>{{ $title ?? 'Default Title' }}</h1>
{{ $slot }}
<!-- @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->