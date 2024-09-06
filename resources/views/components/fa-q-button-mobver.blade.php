<div x-data="{ open: false }" x-cloak class="relative">
    <div class="z-20 relative">
        <button :class="{'rounded-t-lg': open, 'rounded-lg': !open}" x-on:click="open = !open" class="flex-col w-full bg-navy-bg text-white p-2 rounded-lg text-sm font-semibold text-left py-[2.5%]">
            {{ $slottitle ?? 'Default Title' }}
        </button>
    </div>
    <div x-show="open"
        x-transition:enter="transition ease-out duration-500" 
        x-transition:enter-start="opacity-0 transform -translate-y-full" 
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="transform translate-y-0" 
        x-transition:leave-end="transform -translate-y-full opacity-0"
        class="overflow-hidden bg-white z-0 p-2 rounded-b-lg outline outline-1 outline-navy-bg -outline-offset-1 ease-out text-sm">
        {{ $slotdrop ?? 'Default Dropdown Content' }}
    </div>
</div>
