<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
<div class="flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-top bg-cover bg-no-repeat py-20">
        
        <div class="space-y-20 w-[50%]">
            <h1 class="text-center text-5xl font-bold">Competitive Programming</h1>
            <p class="text-center text-xl text-balance font-semibold">Competitive Programming Competition is a contest where participants are required to solve complex algorithmic problems within a specified time frame. Competitors write code to solve these problems, focusing on correctness, efficiency, and speed. All competitions are conducted online.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><x-button>Booklet</x-button></a>
            <a href=""><x-button>Registration</x-button></a>
        </div>

        <x-countdown>2024-08-15</x-countdown>

        <h1 class="text-5xl p-20 font-bold">Timeline of Activity</h1>
        <div class="">
            <img src="/image/tl-cp.png" alt="" class="flex h-auto">
        </div>
    </div>
</x-layout>