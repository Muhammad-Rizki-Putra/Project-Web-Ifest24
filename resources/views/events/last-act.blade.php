<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="hidden md:flex items-center justify-center flex-col h-auto w-screen bg-itcomp-bg bg-top bg-cover bg-no-repeat py-20 gap-y-10 px-[25%]">
        <div>
            <h1 class="text-6xl font-bold">LAST ACT</h1>
        </div>

        <div class="flex flex-row gap-10">
            <x-button textSize="text-sm" textPadding="p-1">Semnas</x-button>
            <x-button textSize="text-sm" textPadding="p-1">Company Expo</x-button>
            <x-button textSize="text-sm" textPadding="p-1">Awarding</x-button>
        </div>

        <div>
            <h1 class="text-4xl font-bold text-center text-wrap">Exploring Career Path In Technology: Navigating Challenges and Opportunities</h1>
        </div>

        <div>
            <x-countdown>2024-09-14</x-countdown>
        </div>

        <div>
            <p class="text-lg text-center">National seminar is an event that invites speakers who have insights into informatics careers. We aim to provide a platform for sharing information, experiences, and ideas for those already involved in or interested in pursuing a career in the field of informatics.</p>
        </div>

        <div class="flex items-start w-full flex-col gap-y-5">
            <p class="text-xl text-left">Is pursuing a career in IT still worth it?</p>
            <p class="text-lg text-left">With the end of the pandemic, the startup trend that had been growing has seen a decline over the past two years. Additionally, issues like Artificial Intelligence potentially replacing programmer jobs have emerged. So, as job opportunities in the IT field decrease, is pursuing a career in this field still worth it?</p>
        </div>

        <div>
            <a href="https://www.gatau.com" class="w-full">
                <div class="bg-transparent rounded-xl w-full max-w-lg flex flex-row items-center justify-center gap-x-3 outline outline-4 outline-offset-2 outline-navy-bg">
                    <img src="/image/Zoom.png" alt="" class="w-auto h-10">
                    <p class="text-center text-navy-bg text-xl font-medium text-nowrap">Click here to Join!</p>
                </div>
            </a>
        </div>

        <div class="flex flex-col items-center justify-start w-auto rounded-md bg-cream-bg p-5 gap-y-5">
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <p class="font-bold">Alif Al Husaini</p>
                    <p>081237449945</p>
                </div>
                <div class="flex flex-col">
                    <p class="font-bold">Panji Iman Sujatmiko</p>
                    <p>089647824647</p>
                    <p>panjiimans</p>
                </div>
            </div>
            <p>Or</p>
            <div>
                <h1>keilmuan.himatif@gmail.com</h1>
            </div>
        </div>

        <div>
            <h1 class="text-6xl font-semibold">FaQ</h1>
        </div>

        <div class="w-full">
            <div>
                <x-fa-q-button></x-fa-q-button>
            </div>
        </div>
    </div>
</x-layout>