@props(['href'])

@php
    $active = request()->is(trim($href, '/')) || request()->is(trim($href, '/') . '/*');
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $active ? 'text-black' : 'text-gray-300 hover:text-black']) }}>
    {{ $slot }}
</a>
