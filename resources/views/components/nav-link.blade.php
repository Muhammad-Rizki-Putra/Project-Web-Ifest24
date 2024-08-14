@props(['href'])

@php
    $active = request()->is(trim($href, '/')) || request()->is(trim($href, '/') . '/*');
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $active ? 'text-black' : 'text-black hover:text-gray']) }}>
    @if ($active)
        <div class="flex flex-row items-center justify-center gap-3">
            {{ $slot }}
            <img src="/image/active-navbar.png" alt="">
        </div>
    @else
    {{ $slot }}
    @endif
</a>
