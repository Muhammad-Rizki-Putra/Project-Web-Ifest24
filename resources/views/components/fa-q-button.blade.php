<div x-data="{ open: false }" x-cloak>
    <div class="z-20">
        <button x-on:click="open = !open" class="flex flex-col w-full bg-navy-bg text-white p-5 rounded-lg font-semibold text-left">{{ $slottitle ?? 'Default Title' }}</button>
    </div>
    <div x-show="open"
        x-transition:enter="transition ease-out duration-500" 
        x-transition:enter-start="opacity-0 transform -translate-y-full" 
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="transform translate-y-0" 
        x-transition:leave-end="transform -translate-y-full"
        class="overflow-hidden bg-white z-20">
        {{ $slotdrop ?? 'Default Dropdown Content' }}
    </div>
</div>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></
