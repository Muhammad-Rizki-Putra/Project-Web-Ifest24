<nav class="bg-cream-bg" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 min-w-max">
        <div class="flex flex-col items-center justify-center">
            <div class="">
                <div class="flex justify-center">
                    <img class="h-auto w-auto pt-5" src="/image/logo_ifest2.png"
                        alt="logo_ifest2">
                </div>
                <div class="hidden md:flex">
                    <div class="flex items-baseline space-x-10">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/partner-with-us" :active="request()->is('/')">Partner With Us!</x-nav-link>
                        <x-dropdown>
                            <x-slot name="button"> Events </x-slot>
                            <a href="/grand-opening" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Grand Opening</a>
                            <a href="/technopreneur" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Technopreneur</a>
                            <a href="/last-act" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Last Act</a>
                            <a href="/seminar-nasional" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Semnas</a>
                        </x-dropdown>
                        <x-dropdown>
                            <x-slot name="button"> Competitions </x-slot>
                            <a href="/competitive-programming" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Competitive Programming</a>
                            <a href="/data-analysis-competition" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Data Analysis</a>
                            <a href="/capture-the-flag" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Capture The Flag</a>
                            <a href="/informatics-competition" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Informatics Competition</a>
                            <a href="/web-development-competition" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Web Development</a>
                        </x-dropdown>
                        @if(auth()->guest())
                            <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                            <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                        @else
                            <x-dropdown>
                                <x-slot name="button">{{ auth()->user()->name }}</x-slot>
                                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Profile</a>
                                <a href="/logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Logout</a>
                            </x-dropdown>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/partner-with-us" :active="request()->is('/')">Partner With Us!</x-nav-link>
            <x-dropdown>
                <x-slot name="button"> Events </x-slot>
                <a href="/grand-opening" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Grand Opening</a>
                <a href="/technopreneur" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Technopreneur</a>
                <a href="/last-act" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Last Act</a>
                <a href="/seminar-nasional" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Semnas</a>
            </x-dropdown>
            <x-dropdown>
                <x-slot name="button"> Competitions </x-slot>
                <a href="/competitive-programming" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Competitive Programming</a>
                <a href="/data-analysis-competition" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Data Analysis</a>
                <a href="/capture-the-flag" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Capture The Flag</a>
                <a href="/informatics-competition" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Informatics Competition</a>
                <a href="/web-development-competition" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Web Development</a>
            </x-dropdown>
            @if(auth()->guest())
                <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
            @else
                <x-dropdown>
                    <x-slot name="button">{{ auth()->user()->name }}</x-slot>
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Profile</a>
                    <a href="/logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">Logout</a>
                </x-dropdown>
            @endif
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                    <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                </div>
                <button type="button"
                    class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                    Profile</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                    out</a>
            </div>
        </div>
    </div>
</nav>
