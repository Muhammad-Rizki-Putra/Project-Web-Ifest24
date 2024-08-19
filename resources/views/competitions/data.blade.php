<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
<div class="hidden md:flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-top bg-cover bg-no-repeat py-20">
        
        <div class="space-y-20 w-[50%]">
            <h1 class="text-center text-5xl font-bold">Data Analyst</h1>
            <p class="text-center text-xl text-balance font-semibold">The Data Analysis Competition is a contest where participants are required to analyze a dataset to obtain useful information and support decision-making processes. In the preliminary round, participants are given a dataset to analyze and must write a paper on their findings. In the final round, participants are given a dataset to analyze within a limited time and then present their analysis to a panel of judges.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><x-button>Booklet</x-button></a>
            <a href=""><x-button>Registration</x-button></a>
        </div>

        <x-countdown>2024-08-15</x-countdown>

        <h1 class="text-5xl p-20 font-bold">Timeline of Activity</h1>
        <div class="">
            <img src="/image/tl-dt.png" alt="" class="flex h-auto">
        </div>
    </div>

    <div class="md:hidden flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-top bg-cover bg-no-repeat py-20">
        
        <div class="space-y-10 mx-5">
            <h1 class="text-center text-3xl font-bold">Data Analyst</h1>
            <p class="text-center text-xl text-balance font-semibold">The Data Analysis Competition is a contest where participants are required to analyze a dataset to obtain useful information and support decision-making processes. In the preliminary round, participants are given a dataset to analyze and must write a paper on their findings. In the final round, participants are given a dataset to analyze within a limited time and then present their analysis to a panel of judges.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><x-button-mobver>Booklet</x-button-mobver></a>
            <a href=""><x-button-mobver>Registration</x-button-mobver></a>
        </div>

        <x-countdown-mobver>2024-09-01</x-countdown-mobver>

        <h1 class="text-3xl py-20 font-bold">Timeline of Activity</h1>
        <div class="px-5">
            <img src="/image/tl-dt.png" alt="" class="flex h-auto">
        </div>
    </div>
</x-layout>