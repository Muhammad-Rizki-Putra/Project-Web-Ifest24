<x-layout>
    <x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div x-data="{ selected: 'rh-la1' }">
        <div
            class="hidden md:flex items-center justify-center flex-col min-h-screen h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20 gap-y-10 px-[25%]">

            <div class="flex items-center justify-center flex-col h-auto top-0 gap-10">
                <div>
                    <h1 class="text-6xl font-bold" style="color: rgb(12 40 62);">LAST ACT</h1>
                </div>

                <div>
                    <img src="/image/logo_ifest.png" class="h-auto w-[300px]" alt="">
                </div>

                <div class="flex flex-row gap-20 pt-5">

                    <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-la" value="rh-la1" id="rh-la-1"
                        x-model="selected">Semnas</x-radio-button>

                    <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-la" value="rh-la2" id="rh-la-2"
                        x-model="selected">Company Expo</x-radio-button>

                    <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-la" value="rh-la3" id="rh-la-3"
                        x-model="selected">Awarding</x-radio-button>
                </div>
            </div>

            <!-- Semnas -->
            <div x-show="selected === 'rh-la1'"
                class="md:flex items-center justify-center flex-col h-auto py-10 gap-y-5"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div>
                    <h1 class="text-5xl font-semibold text-center text-wrap pb-[22px]">SEMINAR NASIONAL</h1>
                    <h1 class="text-2xl text-center text-wrap">Exploring Career Path In Technology: Navigating
                        Challenges and Opportunities</h1>
                </div>

                <div class="pb-10">
                    <p class="text-lg text-center">National seminar is an event that invites speakers who have insights
                        into
                        informatics careers. We aim to provide a platform for sharing information, experiences, and
                        ideas
                        for
                        those already involved in or interested in pursuing a career in the field of informatics.</p>
                </div>

                <div>
                    <x-countdown>2024-09-14</x-countdown>
                </div>

                <div class="grid grid-cols-2 grid-rows-1 gap-x-10 pt-10">
                    <div class="w-[315px] h-[400px] bg-speaker bg-cover bg-center bg-no-repeat p-1.5">
                        <img src="/image/tba-pp.jpg" alt="" class="h-[75%] w-full">
                        <div class="w-[100%] bg-navy-bg h-[25%] flex items-center justify-center">
                            <h1 class="text-white font-semibold text-lg">To Be Announced</h1>
                        </div>
                    </div>

                    <div class="w-[315px] h-[400px] bg-speaker bg-cover bg-center bg-no-repeat p-1.5">
                        <img src="/image/tba-pp.jpg" alt="" class="h-[75%] w-full">
                        <div class="w-[100%] bg-navy-bg h-[25%] flex items-center justify-center">
                            <h1 class="text-white font-semibold text-lg">To Be Announced</h1>
                        </div>
                    </div>
                </div>



                <div class="flex items-center w-full flex-col gap-y-5 pt-10">
                    <p class="text-2xl text-center">Is pursuing a career in IT still worth it?</p>
                    <p class="text-lg text-center">With the end of the pandemic, the startup trend that had been growing
                        has
                        seen
                        a decline over the past two years. Additionally, issues like Artificial Intelligence potentially
                        replacing programmer jobs have emerged. So, as job opportunities in the IT field decrease, is
                        pursuing a
                        career in this field still worth it?</p>
                </div>

                <div>
                    <a 
                    @if(auth()->guest())
                    href="/login"
                    @else
                    href="/payment"
                    @endif
                    ><x-button textSize="text-4xl" textPadding="p-1">Register Now!</x-button></a>
                </div>

                <div class="w-full flex justify-center items-center py-5 pb-3">
                    <a href="http://bit.lt/SCIFest" class="w-full max-w-md">
                        <div
                            class="bg-transparent rounded-xl p-3 w-full flex flex-row items-center justify-center gap-x-3 outline outline-2 outline-offset-2 outline-navy-bg">
                            <img src="/image/Zoom2.png" alt="" class="w-16 h-auto">
                            <p class="text-center text-navy-bg text-xl font-medium">Click here to Join!</p>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col items-center justify-start w-auto rounded-md p-5 m-5 gap-y-5"
                    style="background-color: rgb(244 230 230);">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col gap-y-2">
                            <p class="font-bold">Alif Al Husaini</p>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/Phone.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">081237449945</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <p class="font-bold">Panji Iman Sujatmiko</p>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/Phone.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">089647824647</p>
                            </div>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/lineapp.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">panjiimans</p>
                            </div>
                        </div>
                    </div>
                    <p class="font-semibold">Or</p>
                    <div>
                        <div class="flex flex-row items-center gap-x-2">
                            <img src="/image/Email1.png" alt="" class="h-5 w-auto">
                            <p class="font-semibold">keilmuan.himatif@gmail.com</p>
                        </div>
                    </div>
                </div>


                <div>
                    <h1 class="text-6xl font-semibold py-10">Frequently Asked Questions</h1>
                </div>

                <div class="w-full gap-y-10 flex flex-col">
                    <div x-data="{ open: false }">
                        <x-faq-button>
                            <x-slot:slottitle>What is the event about?</x-slot:slottitle>
                            <x-slot:slotdrop>This event is about...</x-slot:slotdrop>
                        </x-faq-button>
                    </div>

                    <div x-data="{ open: false }">
                        <x-faq-button>
                            <x-slot:slottitle>When is the event?</x-slot:slottitle>
                            <x-slot:slotdrop>The event will take place on...</x-slot:slotdrop>
                        </x-faq-button>
                    </div>

                    <div x-data="{ open: false }">
                        <x-faq-button>
                            <x-slot:slottitle>Where is the event?</x-slot:slottitle>
                            <x-slot:slotdrop>The event location is...</x-slot:slotdrop>
                        </x-faq-button>
                    </div>
                </div>
            </div>

            <!-- Company Expo -->
            <div x-show="selected === 'rh-la2'"
                class="hidden md:flex items-center justify-center flex-col h-auto py-20 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div class="flex flex-row items-center gap-x-5">
                    <img src="/image/ComingSoon.png" alt="" class="h-auto w-[200px]">
                    <h1 class="text-5xl font-semibold text-center text-wrap pb-[22px] text-navy-bg">Coming Soon!</h1>
                </div>
            </div>

            <!-- Awarding -->
            <div x-show="selected === 'rh-la3'"
                class="hidden md:flex items-center justify-center flex-col h-auto py-20 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div class="flex flex-row items-center gap-x-5">
                    <img src="/image/ComingSoon.png" alt="" class="h-auto w-[200px]">
                    <h1 class="text-5xl font-semibold text-center text-wrap pb-[22px] text-navy-bg">Coming Soon!</h1>
                </div>
            </div>
        </div>

        <!-- Mobver -->
        <div
            class="md:hidden min-h-screen flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">
            <div>
                <h1 class="text-3xl font-bold" style="color: rgb(12 40 62);">LAST ACT</h1>
            </div>

            <div class="flex justify-center w-full">
                <img src="/image/logo_ifest.png" alt="" class="h-auto w-[40%] mt-4">
            </div>

            <div class="flex justify-center items-center w-full">
                <div class="flex flex-row gap-x-10 gap-y-3 flex-wrap overflow-x-auto max-w-[75%] mt-4 justify-center">

                    <x-radio-button textSize="text-lg" textPadding="p-1" name="rh-la" value="rh-la1" id="rh-la-1"
                        x-model="selected">Semnas</x-radio-button>

                    <x-radio-button textSize="text-lg" textPadding="p-1" name="rh-la" value="rh-la3" id="rh-la-3"
                        x-model="selected">Awarding</x-radio-button>

                    <x-radio-button textSize="text-lg" textPadding="p-1" name="rh-la" value="rh-la2" id="rh-la-2"
                        x-model="selected">Company Expo</x-radio-button>
                </div>
            </div>

            <!-- Semnas -->
            <div x-show="selected === 'rh-la1'"
                class="md:flex items-center justify-center flex-col h-auto py-10 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-4xl font-semibold text-center text-wrap pb-4" style="color: rgb(12 40 62);">SEMINAR
                        NASIONAL</h1>
                    <h1 class="text-lg text-center text-wrap pb-4 w-4/5 font-semibold" style="color: rgb(12 40 62);">
                        Exploring Career Path In Technology: Navigating
                        Challenges and Opportunities</h1>
                </div>

                <div class="flex flex-col items-center justify-center">
                    <p class="text-md text-center w-4/5 font-semibold" style="color: rgb(12 40 62);">National seminar is
                        an event that invites speakers who have insights
                        into
                        informatics careers. We aim to provide a platform for sharing information, experiences, and
                        ideas
                        for
                        those already involved in or interested in pursuing a career in the field of informatics.</p>
                </div>

                <div class="flex flex-col items-center justify-center py-8">
                    <div class="w-4/5">
                        <x-countdown-mobver>2024-09-14</x-countdown-mobver>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center">
                    <div class="grid grid-cols-2 grid-rows-1 gap-x-2 gap-y-2 pb-10">
                        <div class="w-[157px] h-[200px] bg-speaker bg-cover bg-center bg-no-repeat p-[3px]">
                            <img src="/image/tba-pp.jpg" alt="" class="h-[75%] w-full">
                            <div class="w-[100%] bg-navy-bg h-[25%] flex items-center justify-center">
                                <h1 class="text-white font-semibold text-md">To Be Announced</h1>
                            </div>
                        </div>

                        <div class="w-[157px] h-[200px] bg-speaker bg-cover bg-center bg-no-repeat p-[3px]">
                            <img src="/image/tba-pp.jpg" alt="" class="h-[75%] w-full">
                            <div class="w-[100%] bg-navy-bg h-[25%] flex items-center justify-center">
                                <h1 class="text-white font-semibold text-md">To Be Announced</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center w-full flex-col gap-y-2 py-4">
                    <p class="text-xl text-center text-wrap pb-2 w-5/6 font-semibold" style="color: rgb(12 40 62);">Is
                        pursuing a career in IT still worth it?</p>
                    <p class="text-md text-center text-wrap pb-2 w-4/5 font-semibold" style="color: rgb(12 40 62);">With
                        the end of the pandemic, the startup trend that had been growing
                        has
                        seen
                        a decline over the past two years. Additionally, issues like Artificial Intelligence potentially
                        replacing programmer jobs have emerged. So, as job opportunities in the IT field decrease, is
                        pursuing a
                        career in this field still worth it?</p>
                </div>

                <div class="flex flex-col items-center justify-center w-full px-8 pb-12">
                    <a href="http://bit.lt/SCIFest" class="w-full max-w-md">
                        <div
                            class="bg-transparent rounded-xl p-3 w-full flex flex-row items-center justify-center gap-x-3 outline outline-2 outline-offset-2 outline-navy-bg">
                            <p
                                class="text-center text-navy-bg group-hover:text-cream-bg transition duration-150 text-lg font-medium text-nowrap">
                                Click here to claim your ticket!</p>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col items-center justify-center pb-12">
                    <div class="flex flex-col items-center justify-start w-[85%] rounded-xl p-5 gap-y-5"
                        style="background-color: rgb(244 230 230);">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col gap-y-2">
                                <p class="font-bold">Alif Al Husaini</p>
                                <div class="flex flex-row items-center gap-x-2">
                                    <img src="/image/Phone.png" alt="" class="h-5 w-auto">
                                    <p class="font-semibold">081237449945</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-y-2">
                                <p class="font-bold">Panji Iman Sujatmiko</p>
                                <div class="flex flex-row items-center gap-x-2">
                                    <img src="/image/Phone.png" alt="" class="h-5 w-auto">
                                    <p class="font-semibold">089647824647</p>
                                </div>
                                <div class="flex flex-row items-center gap-x-2">
                                    <img src="/image/lineapp.png" alt="" class="h-5 w-auto">
                                    <p class="font-semibold">panjiimans</p>
                                </div>
                            </div>
                        </div>
                        <p class="font-semibold">Or</p>
                        <div>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/Email1.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">keilmuan.himatif@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h1 class="text-center text-2xl font-semibold pb-4">Frequently Asked Questions</h1>
                </div>

                <div class="flex flex-col items-center justify-center w-full">
                    <div x-data="{ open: false }" class="mb-6 w-4/5">
                        <x-fa-q-button-mobver>
                            <x-slot:slottitle>What is the event about?</x-slot:slottitle>
                            <x-slot:slotdrop>This event is about...</x-slot:slotdrop>
                        </x-fa-q-button-mobver>
                    </div>

                    <div x-data="{ open: false }" class="mb-6 w-4/5">
                        <x-fa-q-button-mobver>
                            <x-slot:slottitle>When is the event?</x-slot:slottitle>
                            <x-slot:slotdrop>The event will take place on...</x-slot:slotdrop>
                        </x-fa-q-button-mobver>
                    </div>

                    <div x-data="{ open: false }" class="mb-3 w-4/5">
                        <x-fa-q-button-mobver>
                            <x-slot:slottitle>Where is the event?</x-slot:slottitle>
                            <x-slot:slotdrop>The event location is...</x-slot:slotdrop>
                        </x-fa-q-button-mobver>
                    </div>
                </div>
            </div>

            <!-- Company Expo -->
            <div x-show="selected === 'rh-la2'"
                class="hidden md:flex items-center justify-center flex-col h-auto py-20 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <h1>ini adalah comp expo</h1>
            </div>

            <!-- Awarding -->
            <div x-show="selected === 'rh-la3'"
                class="hidden md:flex items-center justify-center flex-col h-auto py-20 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <h1>ini adalah awarding</h1>
            </div>
        </div>
        <div class="md:hidden flex items-center justify-center flex-col h-auto  py-20">
            <img src="/image/logo_ifest.png" alt="" class="w-auto h-[200px]">
            <h1 class="text-2xl font-semibold">Coming Soon!</h1>
        </div>
    </div>

    </div>
</x-layout>