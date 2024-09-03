<nav class="fixed top-0 z-30" x-data="{ IsopenEvent: false, IsopenCompetition: false, IsopenProfile: false }">   
    <div class="hidden md:flex flex-col items-end h-[20%] ">  
        <div class="bg-white h-full p-5 px-16 w-screen z-20 flex flex-row items-center justify-between shadow-xl">
            <div class="flex justify-center ">
                <img class="h-auto w-[50px] pt-2" src="/image/logo_ifest.png" alt="logo_ifest2">
            </div>
            <div class="hidden md:flex md:justify-center md:space-x-16 lg:space-x-24 item-center h-full">
                <a href="/" class="text-lg font-reguler flex items-center ">Home</a>
                <a href="/partner-with-us" class="text-lg font-reguler flex items-center text-nowrap ">Partner With Us!</a>
                <div class="flex flex-row items-center justify-center">
                    <button @click="IsopenEvent = ! IsopenEvent, IsopenCompetition = false , IsopenProfile = false" class="text-lg font-reguler flex items-center ">Events</button>
                    <img src="/image/NavbarArrow.png" alt="" class="h-5 w-5 transition-transform duration-300 ease-in-out" :class="{'rotate-180': IsopenEvent}">
                </div>
                <div class="flex flex-row items-center justify-center">
                    <button @click="IsopenCompetition = ! IsopenCompetition, IsopenEvent = false, IsopenProfile = false" class="text-lg font-reguler flex items-center ">Competitions</button>
                    <img src="/image/NavbarArrow.png" alt="" class="h-5 w-5 transition-transform duration-300 ease-in-out" :class="{'rotate-180': IsopenCompetition}">
                </div>
                @if(auth()->guest())
                <div class="flex flex-row items-center justify-center">
                    <button @click="IsopenProfile = ! IsopenProfile, IsopenCompetition = false, IsopenEvent = false" class="text-lg font-reguler flex items-center ">Login/Register</button>
                    <img src="/image/NavbarArrow.png" alt="" class="h-5 w-5 transition-transform duration-300 ease-in-out" :class="{'rotate-180': IsopenProfile}">
                </div>
                @else
                <div class="flex flex-row items-center justify-center">
                    <button @click="IsopenProfile = ! IsopenProfile, IsopenCompetition = false, IsopenEvent = false" class="text-lg font-reguler flex items-center ">Profile/Logout</button>
                    <img src="/image/NavbarArrow.png" alt="" class="h-5 w-5 transition-transform duration-300 ease-in-out" :class="{'rotate-180': IsopenProfile}">
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
                <a href="/grand-opening" class="block px-4 text-sm text-white font-semibold ">Grand Opening</a>
                <a href="/technopreneur" class="block px-4 text-sm text-white font-semibold ">Technopreneur</a>
                <a href="/last-act" class="block px-4 text-sm text-white font-semibold ">Last Act</a>
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
                <a href="/competitive-programming" class="hidden lg:block  py-2 text-xs font-semibold text-white">Competitive Programming</a>
                <a href="/competitive-programming" class="lg:hidden block  py-2 text-xs font-semibold text-white">Comprog</a>
                <a href="/data-analysis-competition" class="hidden lg:block  py-2 text-xs font-semibold text-white">Data Analysis</a>
                <a href="/data-analysis-competition" class="lg:hidden block  py-2 text-xs font-semibold text-white">DaC</a>
                <a href="/capture-the-flag" class="hidden lg:block  py-2 text-xs font-semibold text-white">Capture The Flag</a>
                <a href="/capture-the-flag" class="lg:hidden block  py-2 text-xs font-semibold text-white">CTF</a>
                <a href="/informatics-competition" class="hidden lg:block  py-2 text-xs font-semibold text-white">Informatics Competition</a>
                <a href="/informatics-competition" class="lg:hidden block  py-2 text-xs font-semibold text-white">InforCom</a>
                <a href="/web-development-competition" class="hidden lg:block  py-2 text-xs font-semibold text-white">Web Development</a>
                <a href="/web-development-competition" class="lg:hidden block  py-2 text-xs font-semibold text-white">WebDev</a>
            </div>
        </div>

        @if(auth()->guest())
        <div x-show="IsopenProfile" class="bg-navy-bg w-[50%] h-7 rounded-b-lg relative items-center justify-center z-0"
        x-transition:enter="transition ease-out duration-500" 
        x-transition:enter-start="opacity-0 transform -translate-y-full" 
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in -duration-100"
        x-transition:leave-start="transform translate-y-0" 
        x-transition:leave-end="transform -translate-y-full">
            <div class="flex flex-row items-center justify-evenly">
                <a href="/login" class="block px-4 py-2 text-sm text-white  font-semibold">Login</a>
                <a href="/register" class="block px-4 py-2 text-sm text-white font-semibold ">Register</a>
            </div>
        </div>
        @else
        <div x-show="IsopenProfile" class="bg-navy-bg w-[50%] h-7 rounded-b-lg relative items-center justify-center z-0"
        x-transition:enter="transition ease-out duration-500" 
        x-transition:enter-start="opacity-0 transform -translate-y-full" 
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in -duration-100"
        x-transition:leave-start="transform translate-y-0" 
        x-transition:leave-end="transform -translate-y-full">
            <div class="flex flex-row items-center justify-evenly">
                <a href="/profile" class="block px-4 py-2 text-sm text-white  font-semibold">Profile</a>
                <a href="/logout" class="block px-4 py-2 text-sm text-white  font-semibold">Logout</a>
            </div>
        </div>
        @endif
    </div>

    <!-- bg-white w-screen z-20 -->

    <!-- mobile navbar -->

    <div class="md:hidden flex flex-row items-start justify-between w-screen bg-white shadow-xl" x-data="{ isOpen: false }">
        <a href="/"><img class="h-auto w-[60%] p-2" src="/image/logo_ifest2.png" alt="logo_ifest2"></a>
        <div class="p-5">
            <button class="relative group mt-[1%]" x-on:click="isOpen = !isOpen">
                <img src="/image/hamburger.png" alt="" class="w-auto h-5">
            </button>
        </div>
        <div class="absolute bg-black w-[calc(100vh+1vh)] h-[calc(100vh+1vh)] opacity-50" x-show="isOpen"></div>
        <div 
            class="absolute right-0 z-20 w-[50%] h-auto max-h-screen bg-white flex flex-col rounded-lg text-end outline outline-2 outline-offset-2 outline-navy-bg overflow-y-auto"
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
                <a href="/" class="text-lg font-reguler justify-self-end">Home</a>
            </div>
            <div class="w-full h-auto p-3">
                <a href="/partner-with-us" class="text-lg font-reguler items-center text-nowrap">Partner With Us!</a>
            </div>
            <div class="w-full h-auto p-3">
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="text-lg font-reguler">Events</button>
                    <div 
                        x-show="open" 
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 transform scale-95" 
                        x-transition:enter-end="opacity-100 transform scale-100" 
                        x-transition:leave="transition ease-in duration-75" 
                        x-transition:leave-start="opacity-100 transform scale-100" 
                        x-transition:leave-end="opacity-0 transform scale-95" 
                        class="mt-2 bg-white fill-up-to-down"
                    >
                        <a href="/grand-opening" class="block px-4 py-2 text-sm text-gray-700">Grand Opening</a>
                        <a href="/technopreneur" class="block px-4 py-2 text-sm text-gray-700">Technopreneur</a>
                        <a href="/last-act" class="block px-4 py-2 text-sm text-gray-700">Last Act</a>
                    </div>
                </div>
            </div>
            <div class="w-full h-auto p-3">
                <div x-data="{ open: false }">
                    <button @click="open = !open" class="text-lg font-reguler">Competitions</button>
                    <div 
                        x-show="open" 
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 transform scale-95" 
                        x-transition:enter-end="opacity-100 transform scale-100" 
                        x-transition:leave="transition ease-in duration-75" 
                        x-transition:leave-start="opacity-100 transform scale-100" 
                        x-transition:leave-end="opacity-0 transform scale-95" 
                        class="mt-2 bg-white fill-up-to-down"
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
                        <button @click="open = !open" class="text-lg font-reguler">Login/Register</button>
                        <div 
                            x-show="open" 
                            x-transition:enter="transition ease-out duration-200" 
                            x-transition:enter-start="opacity-0 transform scale-95" 
                            x-transition:enter-end="opacity-100 transform scale-100" 
                            x-transition:leave="transition ease-in duration-75" 
                            x-transition:leave-start="opacity-100 transform scale-100" 
                            x-transition:leave-end="opacity-0 transform scale-95" 
                            class="mt-2 bg-white fill-up-to-down"
                        >
                        <a href="/login" class="block px-4 py-2 text-sm text-gray-700">Login</a>
                        <a href="/register" class="block px-4 py-2 text-sm text-gray-700">Register</a>
                        </div>
                    </div>
                </div>
                @else
                <div class="w-full h-auto p-3">
                    <div>
                        <button @click="IsopenProfile = !IsopenProfile" class="text-lg font-reguler"><img src="/image/DefaultProfilePicture.jpg" alt="" class="w-10 h-auto rounded-full"></button>
                        <div 
                            x-show="IsopenProfile" 
                            x-transition:enter="transition ease-out duration-200" 
                            x-transition:enter-start="opacity-0 transform scale-95" 
                            x-transition:enter-end="opacity-100 transform scale-100" 
                            x-transition:leave="transition ease-in duration-75" 
                            x-transition:leave-start="opacity-100 transform scale-100" 
                            x-transition:leave-end="opacity-0 transform scale-95" 
                            class="mt-2 bg-white fill-up-to-down"
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
