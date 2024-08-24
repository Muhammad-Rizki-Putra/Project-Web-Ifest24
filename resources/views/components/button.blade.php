@props(['textSize' => 'text-3xl'])
@props(['textPadding' => 'p-3'])

<div class="{{$textPadding }} px-4 rounded-full {{$textSize }} font-bold bg-navy-bg text-white hover:text-navy-bg hover:bg-cream-bg transition duration-300">
    {{ $slot }}
</div>