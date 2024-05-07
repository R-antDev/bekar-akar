@props(['size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl text-2xs font-bold transition-colors duration-300';

    if ($size === 'base') {
        $classes .= ' px-3 py-1 text-sm';
    }
    if ($size === 'small') {
        $classes .= ' px-2 py-0.5 text-2xs';
    }
@endphp

<a class='{{ $classes }}' href="">{{ $slot }}</a>
