<x-navlink href="/"> Home </x-navlink>
<x-navlink href="/about"> About </x-navlink>
<x-navlink href="/contact"> Contact</x-navlink>
<h1>{{ $title ?? 'Default Title' }}</h1>
{{ $slot }}