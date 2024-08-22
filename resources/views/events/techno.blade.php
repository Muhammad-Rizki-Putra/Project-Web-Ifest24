<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="hidden md:flex items-center justify-center flex-col h-auto bg-home-bg bg-cover bg-no-repeat bg-center py-10 gap-y-32">
        <h1 class="text-7xl font-bold">TECHNOPRENEUR</h1>
        <p class="text-6xl text-center font-bold">Future Founders:<br>Embracing The Rise of<br>Tech-Based Business</p>
        <div x-data="{ openA: true, openB: false }" class="flex flex-col items-center justfy-center">
            <div class="flex flex-row items-center justify-center pb-20 gap-x-40">
                <x-button>
                    <button x-on:click="openA = !openA; if (openB) openB = false">Seminar</button>
                </x-button>
                <x-button>
                    <button x-on:click="openB = !openB; if (openA) openA = false">Workshop</button>
                </x-button>
            </div>
            <p class="w-3/5 text-center text-3xl">Designed to turn tech skills into successful businesses, Technopreneur is where technology meets entrepreneurship. Through engaging seminars and hands-on workshops, knowledge and tools are provided by professional mentors, helping you leverage digital technology to bring your business ideas to life.</p>
            <div class="flex flex-col items-center justify-center">
                <div x-show="openA" x-transition class="flex flex-col items-center justify-center">
                    <p class="text-7xl font-bold pt-20 pb-10">SEMINAR</p>
                    <p class="w-3/5 text-center text-3xl font-bold pb-40">The material and talk show presented by professional speakers who are experts in technology-based business to develop the interest and talent for entrepreneurship within the community in the field of IT.</p>
                    <x-countdown></x-countdown>
                </div>
                <div x-show="openB" x-transition class="flex flex-col items-center justify-center py-10">
                    <p class="text-7xl font-bold pt-20 pb-10">WORKSHOP</p>
                    <p class="w-3/5 text-center text-3xl font-bold pb-40">An online workshop that provides training and development facilities by professionals with the aim of providing participants with an understanding of the use of technological advances to transform businesses into innovative startups.</p>
                    <x-countdown></x-countdown>
                    <div style="background-image:url('image/Rectangle_74.png');" class="bg-cover w-full p-3.5 text-white mt-40">
                        <p class="text-center text-3xl font-bold p-3.5">Reward for Workshop's 3 winner team</p>
                        <p class="text-center text-7xl font-bold p-3.5">Fresh Money Up To<br>XXX Rupiah</p>
                        <p class="text-center text-4xl font-bold p-3.5">and</p>
                        <p class="text-center text-6xl font-bold p-3.5">Winner Certificate</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex flex-row items-center justify-center space-x-10 w-auto">
            <a href=""><x-button>Register</x-button></a>
            <a href=""><x-button>Guidebook</x-button></a>
        </div>
        <p class="text-center text-3xl font-bold">Limited to Only 15 Selected Teams<br>100k/ team</p>
        <div class="flex flex-col justify-center w-full">
            <h1 class="text-4xl text-center font-bold">The Speakers</h1>
            <div class="flex flex-row items-center justify-center ">
                <div class="control-buttons">
                    <button id="carousel-0-previousButton"><img src="/image/prev.png" alt=""></button>
                </div>
                <div class="gallery">
                    <div class="gallery-container">
                        <img src="/image/box.png" alt="furina" class="gallery-item gallery-item-1" data-index = "1">
                        <img src="/image/furina.png" alt="furina" class="gallery-item gallery-item-2" data-index = "2">
                        <img src="/image/box.png" alt="furina" class="gallery-item gallery-item-3" data-index = "3">
                    </div>
                </div>
                <div class="control-buttons">
                    <button id="carousel-0-nextButton"><img src="/image/next.png" alt=""></button>
                </div>
            </div>
        </div>
        <div class="flex flex-row items-center justify-center w-7/12 rounded-xl p-5" style="background-color: rgb(244 230 230);">
            <div class="mx-10">
                <p class="text-2xl font-bold">Luthfi Hamam Arsyada</p>
                <p class="text-2xl flex flex-row"><img src="/image/Phone_Event.png" class="size-5 mr-2 mt-2"> 081223682256</p>
                <p class="text-2xl flex flex-row"><img src="/image/Email_Event.png" class="size-5 mr-2 mt-2"> lutfiarsd@gmail.com</p>
                <p class="text-2xl flex flex-row"><img src="/image/Line_Event.png" class="size-5 mr-2 mt-2"> gaktaulupa10988</p>
            </div>
            <div class="mx-10">
                <p class="text-2xl font-bold">M. Zahran Muntazar</p>
                <p class="text-2xl flex flex-row"><img src="/image/Phone_Event.png" class="size-5 mr-2 mt-2"> 085174338747</p>
                <p class="text-2xl flex flex-row"><img src="/image/Email_Event.png" class="size-5 mr-2 mt-2"> zahranmuntazar17@gmail.com</p>
                <p class="text-2xl flex flex-row"><img src="/image/Line_Event.png" class="size-5 mr-2 mt-2"> zahranmuntazar</p>
            </div>
        </div>
        <p>Poster??</p>
        <div class="flex flex-col items-center justify-center w-max">
            <p class="text-center text-4xl">FaQ</p>
            <div x-data="{ open: false }" class="my-3">
                <x-button-faq>
                    <button x-on:click="open = ! open" class="w-full text-justify">Pertanyaan 1</button>
                
                    <div x-show="open" x-transition>
                        Dropdown Contents...
                    </div>
                </x-button-faq>
            </div>
            <div x-data="{ open: false }" class="my-3">
                <x-button-faq>
                    <button x-on:click="open = ! open" class="w-full text-justify">Pertanyaan 1</button>
                
                    <div x-show="open" x-transition>
                        Dropdown Contents...
                    </div>
                </x-button-faq>
            </div>
            <div x-data="{ open: false }" class="my-3">
                <x-button-faq>
                    <button x-on:click="open = ! open" class="w-full text-justify">Pertanyaan 1</button>
                
                    <div x-show="open" x-transition>
                        Dropdown Contents...
                    </div>
                </x-button-faq>
            </div>
            <div x-data="{ open: false }" class="my-3">
                <x-button-faq>
                    <button x-on:click="open = ! open" class="w-full text-justify">Pertanyaan 1</button>
                
                    <div x-show="open" x-transition>
                        Dropdown Contents...
                    </div>
                </x-button-faq>
            </div>
            <div x-data="{ open: false }" class="my-3">
                <x-button-faq>
                    <button x-on:click="open = ! open" class="w-full text-justify">Pertanyaan 1</button>
                
                    <div x-show="open" x-transition>
                        Dropdown Contents...
                    </div>
                </x-button-faq>
            </div>
        </div>

    </div>
</x-layout>