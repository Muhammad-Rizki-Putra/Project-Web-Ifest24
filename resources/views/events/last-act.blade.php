<x-layout>
    <x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div x-data="{ selected: 'rh-la1' }">
    <div
        class="hidden md:flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20 gap-y-10 px-[25%]"
        >

        <div>
            <h1 class="text-6xl font-bold">LAST ACT</h1>
        </div>

        <div class="flex flex-row gap-10">

            <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-la" value="rh-la1"
                id="rh-la-1" x-model="selected">Semnas</x-radio-button>

            <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-la" value="rh-la2"
                id="rh-la-2" x-model="selected">Company Expo</x-radio-button>

            <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-la" value="rh-la3"
                id="rh-la-3" x-model="selected">Awarding</x-radio-button>
        </div>

        <!-- Semnas -->
        <div x-show="selected === 'rh-la1'" class="md:flex items-center justify-center flex-col h-auto py-20 gap-y-20"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            >
            <div>
                <h1 class="text-4xl font-bold text-center text-wrap">Exploring Career Path In Technology: Navigating
                    Challenges and Opportunities</h1>
            </div>

            <div>
                <x-countdown>2024-09-14</x-countdown>
            </div>

            <div>
                <p class="text-lg text-center">National seminar is an event that invites speakers who have insights into
                    informatics careers. We aim to provide a platform for sharing information, experiences, and ideas
                    for
                    those already involved in or interested in pursuing a career in the field of informatics.</p>
            </div>

            <div class="flex items-start w-full flex-col gap-y-5">
                <p class="text-xl text-left">Is pursuing a career in IT still worth it?</p>
                <p class="text-lg text-left">With the end of the pandemic, the startup trend that had been growing has
                    seen
                    a decline over the past two years. Additionally, issues like Artificial Intelligence potentially
                    replacing programmer jobs have emerged. So, as job opportunities in the IT field decrease, is
                    pursuing a
                    career in this field still worth it?</p>
            </div>

            <div>
                <a href="https://www.gatau.com" class="w-full">
                    <div
                        class="bg-transparent rounded-xl w-full max-w-lg flex flex-row items-center justify-center gap-x-3 outline outline-4 outline-offset-2 outline-navy-bg">
                        <img src="/image/Zoom.png" alt="" class="w-auto h-10">
                        <p class="text-center text-navy-bg text-xl font-medium text-nowrap">Click here to Join!</p>
                    </div>
                </a>
            </div>

            <div class="flex flex-col items-center justify-start w-auto rounded-md p-5 gap-y-5" style="background-color: rgb(244 230 230);">
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
                <h1 class="text-6xl font-semibold">FaQ</h1>
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
        <div x-show="selected === 'rh-la2'" class="hidden md:flex items-center justify-center flex-col h-auto py-20 gap-y-20"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
        >
            <h1>ini adalah comp expo</h1>
        </div>

        <!-- Awarding -->
        <div x-show="selected === 'rh-la3'" class="hidden md:flex items-center justify-center flex-col h-auto py-20 gap-y-20"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
        >
        <h1>ini adalah awarding</h1>
        </div>
    </div>
    </div>
</x-layout>
