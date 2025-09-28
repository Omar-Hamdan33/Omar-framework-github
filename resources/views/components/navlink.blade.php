@props(['active' => false , 'type' => 'a'] )
@if ($type === 'a'): 

<a style="{{ $active ? 'color: red' : '' }}"> </a>

<a {{ $attributes }}>{{ $slot }}</a>
@else
    <h1> not a link </h1>
@endif