@props(['textSize' => 'text-3xl'])
@props(['textPadding' => 'p-3'])
@props(['bgColor' => 'bg-navy-bg'])
@props(['bgcolorhover' => 'bg-cream-bg'])

<div class="{{$textPadding }} px-4 rounded-md {{$textSize }} font-bold {{$bgColor }} text-white hover:text-navy-bg hover:{{$bgcolorhover }} transition duration-300">
    {{ $slot }}
</div>