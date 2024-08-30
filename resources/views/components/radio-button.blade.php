@props(['textSize' => 'text-3xl'])
@props(['textPadding' => 'p-3'])
@props(['name'])
@props(['id'])
@props(['value'])

<div class="{{$textPadding }} px-4 rounded-md {{$textSize }} font-bold bg-navy-bg text-white hover:text-navy-bg hover:bg-cream-bg transition duration-300" x-on:click="selected = '{{ $value }}'">
    <input type="radio" id="{{$id}}" name="{{$name}}" value="{{$value}}" class="hidden">
    <label for="{{ $id }}" class="cursor-pointer">
        {{ $slot }}
    </label>
</div>