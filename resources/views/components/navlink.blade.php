@props(['active' => false])
<a style="{{ $active ? 'color: red' : '' }}"> </a>

<a {{ $attributes }}>{{ $slot }}</a>
