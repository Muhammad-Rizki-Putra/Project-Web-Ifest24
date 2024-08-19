<nav class="bg-cream-bg">
    <div class="hidden md:flex flex-col items-center justify-center">
        <div class="flex justify-center">
            <img class="h-auto w-auto pt-2" src="/image/logo_ifest2.png" alt="logo_ifest2">
        </div>
        <div class="hidden md:flex md:justify-center md:space-x-32 pb-3">
            <a href="/" class="text-lg font-bold flex items-center">Home</a>
            <a href="/partner-with-us" class="text-lg font-bold flex items-center text-nowrap">Partner With Us!</a>
            <div x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false">
                <button class="text-lg font-bold flex items-center">Events</button>
                <div x-show="open" class="absolute shadow-md bg-black text-white">
                    <a href="/grand-opening" class="block px-4 py-2 text-sm text-gray-700">Grand Opening</a>
                    <a href="/technopreneur" class="block px-4 py-2 text-sm text-gray-700">Technopreneur</a>
                    <a href="/last-act" class="block px-4 py-2 text-sm text-gray-700">Last Act</a>
                    <a href="/seminar-nasional" class="block px-4 py-2 text-sm text-gray-700">Semnas</a>
                </div>
            </div>
            <div x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false">
                <button class="text-lg font-bold flex items-center">Competitions</button>
                <div x-show="open" class="absolute shadow-md">
                    <a href="/competitive-programming" class="block px-4 py-2 text-sm text-gray-700">Competitive Programming</a>
                    <a href="/data-analysis-competition" class="block px-4 py-2 text-sm text-gray-700">Data Analysis</a>
                    <a href="/capture-the-flag" class="block px-4 py-2 text-sm text-gray-700">Capture The Flag</a>
                    <a href="/informatics-competition" class="block px-4 py-2 text-sm text-gray-700">Informatics Competition</a>
                    <a href="/web-development-competition" class="block px-4 py-2 text-sm text-gray-700">Web Development</a>
                </div>
            </div>
            @if(auth()->guest())
            <div x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false">
                <button class="text-lg font-bold flex items-center">Login/Register</button>
                <div x-show="open" class="absolute shadow-md">
                    <a href="/login" class="block px-4 py-2 text-sm text-gray-700">Login</a>
                    <a href="/register" class="block px-4 py-2 text-sm text-gray-700">Register</a>
                </div>
            </div>
            @else
            <div x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false">
                <button class="text-lg font-bold flex items-center">{{ auth()->user()->name }}</button>
                <div x-show="open" class="absolute shadow-md mt-2">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700">Profile</a>
                    <a href="/logout" class="block px-4 py-2 text-sm text-gray-700">Logout</a>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- mobile navbar -->
    <div class="md:hidden flex flex-row items-start justify-between w-full" x-data="{ isOpen: false }">
        <img class="h-auto w-[50%] p-2" src="/image/logo_ifest2.png" alt="logo_ifest2">
        <div class="p-5">
            <button class="relative group mt-[1%]" x-on:click="isOpen = !isOpen">
                <img src="/image/hamburger.png" alt="" class="w-auto h-5">
            </button>
        </div>
        <div class="absolute bg-black w-screen h-[200%] opacity-50" x-show="isOpen"></div>
        <div class="absolute right-0 z-20 w-[50%] h-auto bg-cream-bg flex flex-col rounded-lg text-end fill-left-to-right" x-show="isOpen">
            <div class="w-full h-auto p-3">
                <button class="text-lg text-bold" x-on:click="isOpen = !isOpen">
                    <img src="/image/hamburger.png" alt="" class="w-auto h-5">
                </button>
            </div>
            <div class="w-full h-auto p-3">
                <a href="/" class="text-lg font-bold justify-self-end">Home</a>
            </div>
            <div class="w-full h-auto p-3">
                <a href="/partner-with-us" class="text-lg font-bold items-center text-nowrap">Partner With Us!</a>
            </div>
            <div class="w-full h-auto p-3">
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="text-lg font-bold">Events</button>
                    <div 
                        x-show="open" 
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 transform scale-95" 
                        x-transition:enter-end="opacity-100 transform scale-100" 
                        x-transition:leave="transition ease-in duration-75" 
                        x-transition:leave-start="opacity-100 transform scale-100" 
                        x-transition:leave-end="opacity-0 transform scale-95" 
                        class="mt-2 bg-cream-bg fill-up-to-down"
                    >
                        <a href="/grand-opening" class="block px-4 py-2 text-sm text-gray-700">Grand Opening</a>
                        <a href="/technopreneur" class="block px-4 py-2 text-sm text-gray-700">Technopreneur</a>
                        <a href="/last-act" class="block px-4 py-2 text-sm text-gray-700">Last Act</a>
                        <a href="/seminar-nasional" class="block px-4 py-2 text-sm text-gray-700">Semnas</a>
                    </div>
                </div>
            </div>
            <div class="w-full h-auto p-3">
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="text-lg font-bold">Competitions</button>
                    <div 
                        x-show="open" 
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 transform scale-95" 
                        x-transition:enter-end="opacity-100 transform scale-100" 
                        x-transition:leave="transition ease-in duration-75" 
                        x-transition:leave-start="opacity-100 transform scale-100" 
                        x-transition:leave-end="opacity-0 transform scale-95" 
                        class="mt-2 bg-cream-bg fill-up-to-down"
                    >
                        <a href="/competitive-programming" class="block px-4 py-2 text-sm text-gray-700">Competitive Programming</a>
                        <a href="/data-analysis-competition" class="block px-4 py-2 text-sm text-gray-700">Data Analysis</a>
                        <a href="/capture-the-flag" class="block px-4 py-2 text-sm text-gray-700">Capture The Flag</a>
                        <a href="/informatics-competition" class="block px-4 py-2 text-sm text-gray-700">Informatics Competition</a>
                        <a href="/web-development-competition" class="block px-4 py-2 text-sm text-gray-700">Web Development</a>
                    </div>
                </div>
            </div>
            <div class="w-full h-auto p-3">
                @if(auth()->guest())
                <div class="w-full h-auto p-3">
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="text-lg font-bold">Login/Register</button>
                        <div 
                            x-show="open" 
                            x-transition:enter="transition ease-out duration-200" 
                            x-transition:enter-start="opacity-0 transform scale-95" 
                            x-transition:enter-end="opacity-100 transform scale-100" 
                            x-transition:leave="transition ease-in duration-75" 
                            x-transition:leave-start="opacity-100 transform scale-100" 
                            x-transition:leave-end="opacity-0 transform scale-95" 
                            class="mt-2 bg-cream-bg fill-up-to-down"
                        >
                        <a href="/login" class="block px-4 py-2 text-sm text-gray-700">Login</a>
                        <a href="/register" class="block px-4 py-2 text-sm text-gray-700">Register</a>
                        </div>
                    </div>
                </div>
                @else
                <div class="w-full h-auto p-3">
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="text-lg font-bold">{{ auth()->user()->name }}</button>
                        <div 
                            x-show="open" 
                            x-transition:enter="transition ease-out duration-200" 
                            x-transition:enter-start="opacity-0 transform scale-95" 
                            x-transition:enter-end="opacity-100 transform scale-100" 
                            x-transition:leave="transition ease-in duration-75" 
                            x-transition:leave-start="opacity-100 transform scale-100" 
                            x-transition:leave-end="opacity-0 transform scale-95" 
                            class="mt-2 bg-cream-bg fill-up-to-down"
                        >
                        <a href="/profile" class="block px-4 py-2 text-sm text-gray-700">Profile</a>
                        <a href="/logout" class="block px-4 py-2 text-sm text-gray-700">Logout</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</nav>
