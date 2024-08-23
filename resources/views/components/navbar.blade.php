<nav class="fixed top-0 z-30">   
    <div class="hidden md:flex flex-col items-center justify-center h-[20%]" x-data="{ IsopenEvent: false, IsopenCompetition: false }">  
        <div class="bg-cream-bg w-screen z-20">
            <div class="flex justify-center ">
                <img class="h-auto w-auto pt-2" src="/image/logo_ifest2.png" alt="logo_ifest2">
            </div>
            <div class="hidden md:flex md:justify-center md:space-x-16 lg:space-x-24 pb-3">
                <a href="/" class="text-lg font-bold flex items-center">Home</a>
                <a href="/partner-with-us" class="text-lg font-bold flex items-center text-nowrap">Partner With Us!</a>
                <div class="flex flex-row items-center justify-center">
                    <button @click="IsopenEvent = ! IsopenEvent, IsopenCompetition = false" class="text-lg font-bold flex items-center">Events</button>
                    <img src="/image/NavbarArrow.png" alt="" class="h-5 w-5 transition-transform duration-300 ease-in-out" :class="{'rotate-180': IsopenEvent}">
                </div>
                <div class="flex flex-row items-center justify-center">
                <button @click="IsopenCompetition = ! IsopenCompetition, IsopenEvent = false" class="text-lg font-bold flex items-center">Competitions</button>
                    <img src="/image/NavbarArrow.png" alt="" class="h-5 w-5 transition-transform duration-300 ease-in-out" :class="{'rotate-180': IsopenCompetition}">
                </div>
                @if(auth()->guest())
                <div x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false">
                    <button class="text-lg font-bold flex items-center">Login/Register</button>
                    <div x-show="open" class="absolute bg-black opacity opacity-50">
                        <a href="/login" class="block px-4 py-2 text-sm text-white">Login</a>
                        <a href="/register" class="block px-4 py-2 text-sm text-white">Register</a>
                    </div>
                </div>
                @else
                <div x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false">
                    <button class="text-lg font-bold flex items-center">{{ auth()->user()->name }}</button>
                    <div x-show="open" class="absolute bg-black opacity opacity-50 mt-2">
                        <a href="/profile" class="block px-4 py-2 text-sm text-white">Profile</a>
                        <a href="/logout" class="block px-4 py-2 text-sm text-white">Logout</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div x-show="IsopenEvent" class="bg-navy-bg w-[50%] h-7 rounded-b-lg relative items-center justify-center z-0"
        x-transition:enter="transition ease-out duration-500" 
        x-transition:enter-start="opacity-0 transform -translate-y-full" 
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in -duration-100"
        x-transition:leave-start="transform translate-y-0" 
        x-transition:leave-end="transform -translate-y-full">
            <div class="flex flex-row items-center justify-evenly">
                <a href="/grand-opening" class="block px-4 text-sm text-white font-semibold">Grand Opening</a>
                <a href="/technopreneur" class="block px-4 text-sm text-white font-semibold">Technopreneur</a>
                <a href="/last-act" class="block px-4 text-sm text-white font-semibold">Last Act</a>
                <a href="/seminar-nasional" class="block px-4 text-sm text-white font-semibold">Semnas</a>
            </div>
        </div>

        <div x-show="IsopenCompetition" class="bg-navy-bg w-[50%] h-7 rounded-b-lg relative items-center justify-center z-0"
        x-transition:enter="transition ease-out duration-500" 
        x-transition:enter-start="opacity-0 transform -translate-y-full" 
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in -duration-100"
        x-transition:leave-start="transform translate-y-0" 
        x-transition:leave-end="transform -translate-y-full">
            <div class="flex flex-row items-center justify-evenly">
                <a href="/competitive-programming" class="block px-4 py-2 text-xs font-semibold text-white">Competitive Programming</a>
                <a href="/data-analysis-competition" class="block px-4 py-2 text-xs font-semibold text-white">Data Analysis</a>
                <a href="/capture-the-flag" class="block px-4 py-2 text-xs font-semibold text-white">Capture The Flag</a>
                <a href="/informatics-competition" class="block px-4 py-2 text-xs font-semibold text-white">Informatics Competition</a>
                <a href="/web-development-competition" class="block px-4 py-2 text-xs font-semibold text-white">Web Development</a>
            </div>
        </div>
    </div>

    <!-- bg-cream-bg w-screen z-20 -->

    <!-- mobile navbar -->
    <div class="md:hidden flex flex-row items-start justify-between w-screen bg-cream-bg" x-data="{ isOpen: false }">
        <img class="h-auto w-[50%] p-2" src="/image/logo_ifest2.png" alt="logo_ifest2">
        <div class="p-5">
            <button class="relative group mt-[1%]" x-on:click="isOpen = !isOpen">
                <img src="/image/hamburger.png" alt="" class="w-auto h-5">
            </button>
        </div>
        <div class="absolute bg-black w-screen h-[1200%] opacity-50" x-show="isOpen"></div>
        <div 
            class="absolute right-0 z-20 w-[50%] h-auto bg-cream-bg flex flex-col rounded-lg text-end outline outline-2 outline-offset-2 outline-navy-bg"
            x-show="isOpen" 
            x-transition:enter="transition ease-out duration-200" 
            x-transition:enter-start="opacity-0 transform translate-x-full" 
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="transform translate-x-0" 
            x-transition:leave-end="transform translate-x-full"
            :class="{'fill-right-to-left': !isOpen, 'fill-left-to-right': isOpen}"
        >
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
