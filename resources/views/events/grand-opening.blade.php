<x-layout>
    <x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div
        class="hidden md:flex items-center justify-center flex-col h-auto bg-home-bg bg-cover bg-no-repeat bg-fixed bg-left py-20 gap-y-16">
        <h1 class="text-7xl font-bold">PREMIERE LAUNCH</h1>

        <x-countdown>2024-08-25</x-countdown>

        <div class="bg-white bg-opacity-60 rounded-xl shadow-lg p-6 w-full max-w-2xl">
            <p class="text-center text-gray-800 text-lg font-medium">The IFest 2024 Premiere Launch is a series of
                opening events featuring an online talk show concept. This activity aims to serve as a platform that
                enables Founders or Strategic Partners from several companies operating in the Artificial Intelligence
                and Financial Technology sectors, as well as experts and specialists in those fields, to meet with
                participants and share experiences and knowledge related to the industry.</p>
        </div>

        <div class="bg-navy-bg rounded-xl shadow-lg p-4 w-full max-w-md">
            <p class="text-center text-white text-xl font-medium">Sunday, August 25th 2024!</p>
        </div>

        <div class="flex flex-col items-center w-full">
            <div class="bg-transparent p-6 w-full max-w-lg">
                <p class="text-center text-black text-xl font-medium">To receive more details, please keep an eye on our
                    Instagram!</p>
            </div>

            <a href="https://www.instagram.com/ifestunpad/" target="_blank" rel="noopener noreferrer"
                class="w-full max-w-md">
                <div
                    class="bg-transparent rounded-xl p-3 w-full flex flex-row items-center justify-center gap-x-3 outline outline-2 outline-offset-2 outline-navy-bg">
                    <img src="/image/Instagram.png" alt="" class="w-7 h-auto">
                    <p class="text-center text-navy-bg text-xl font-medium">@ifest.unpad</p>
                </div>
            </a>
        </div>

        <div class="flex flex-col items-center w-full">
            <div class="bg-transparent p-6 w-full max-w-lg">
                <p class="text-center text-black text-xl font-medium">Will be held via Online Meeting</p>
            </div>

            <div class="relative w-full max-w-md">
                <div
                    class="bg-transparent rounded-xl p-3 w-full flex flex-row items-center justify-center gap-x-3 outline outline-2 outline-offset-2 outline-gray-400 opacity-50 cursor-not-allowed">
                    <img src="/image/Zoom2.png" alt="" class="w-16 h-auto">
                    <p class="text-center text-gray-400 text-xl font-medium">Click here to Join!</p>
                </div>
            </div>
        </div>
    </div>

    <div
        class="md:hidden flex items-center justify-center flex-col h-auto bg-home-bg bg-cover bg-no-repeat bg-fixed bg-right-bottom py-20 gap-y-16">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-6xl font-bold">PREMIERE</h1>
            <h1 class="text-6xl font-bold">LAUNCH</h1>
        </div>

        <x-countdown-mobver>2024-08-25</x-countdown-mobver>

        <div class="bg-white bg-opacity-60 rounded-xl shadow-lg p-6 w-auto max-w-lg mx-7">
            <p class="text-center text-gray-800 text-md font-medium">The IFest 2024 Premiere Launch is a series of
                opening events featuring an online talk show concept. This activity aims to serve as a platform that
                enables Founders or Strategic Partners from several companies operating in the Artificial Intelligence
                and Financial Technology sectors, as well as experts and specialists in those fields, to meet with
                participants and share experiences and knowledge related to the industry.</p>
        </div>

        <div class="bg-navy-bg rounded-xl shadow-lg p-6 px-16 w-auto max-w-lg mx-2">
            <p class="text-center text-white text-md font-medium">Sunday, August 25th 2024!</p>
        </div>

        <div class="mx-5 flex flex-col justify-center items-center w-full">
            <div class="bg-transparent p-6 w-auto max-w-lg mx-2">
                <p class="text-center text-black text-md font-medium">To receive more details, please keep an eye on our
                    Instagram!</p>
            </div>

            <a href="https://www.instagram.com/ifestunpad/" target="_blank" rel="noopener noreferrer"
                class="w-auto max-w-sm">
                <div
                    class="bg-transparent rounded-xl p-3 w-80 max-w-lg flex flex-row items-center justify-center gap-x-3 outline outline-2 outline-offset-2 outline-navy-bg">
                    <img src="/image/Instagram.png" alt="">
                    <p class="text-center text-navy-bg text-xl font-medium">@ifest.unpad</p>
                </div>
            </a>
        </div>

        <div class="mx-5">
            <div class="bg-transparent p-6 w-auto max-w-lg mx-2">
                <p class="text-center text-black text-md font-medium">Will be held via Online Meeting</p>
            </div>

            
                <div
                    class="bg-transparent rounded-xl w-80 max-w-lg flex flex-row items-center justify-center gap-x-3 outline outline-2 outline-offset-2 outline-navy-bg opacity-50 cursor-not-allowed">
                    <img src="/image/Zoom.png" alt="" class="w-16">
                    <p class="text-center text-navy-bg text-xl font-medium text-nowrap">Click here to Join!</p>
                </div>
            
        </div>

    </div>
</x-layout>