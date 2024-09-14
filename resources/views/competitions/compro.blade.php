<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
<div class="hidden md:flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">

        <div class="space-y-8 w-[50%] flex flex-col items-center justify-center">
            <h1 class="text-center text-5xl font-bold text-navy-bg">Competitive Programming</h1>
            <img src="/image/Lomba/Comprog.png" alt="" class="h-auto w-[32%]">
            <p class="text-center text-xl text-balance font-semibold">Competitive Programming Competition is a contest where participants are required to solve complex algorithmic problems within a specified time frame. Competitors write code to solve these problems, focusing on correctness, efficiency, and speed. All competitions are conducted online.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href="https://drive.google.com/file/d/1d2Y6ryvdkKka1MtdKjUf6j-fMJ1mGZZ4/view?usp=sharing" target="_blank" rel="noopener noreferrer"><x-button textSize="text-2xl" textPadding="p-1">Booklet</x-button></a>
            <a href="" target="_blank" rel="noopener noreferrer"><x-button textSize="text-2xl" textPadding="p-1">Registration</x-button></a>
        </div>

        <x-countdown>2024-08-15</x-countdown>

        <h1 class="text-5xl p-20 font-bold">Timeline of Activity</h1>
        <div class="w-[45vh]">
            <img src="/image/tl/cp.png" alt="" class="flex h-auto">
        </div>
    </div>

    <div class="md:hidden flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">

        <div class="space-y-4 mx-5 flex flex-col items-center justify-center">  
            <h1 class="text-center text-3xl font-bold" style="color: rgb(12 40 62);">Competitive Programming</h1>
            <img src="/image/Lomba/Comprog.png" alt="" class="h-auto w-[35%]">
            <p class="text-center text-md text-wrap font-semibold" style="color: rgb(12 40 62);">Competitive Programming Competition is a contest where participants are required to solve complex algorithmic problems within a specified time frame. Competitors write code to solve these problems, focusing on correctness, efficiency, and speed. All competitions are conducted online.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href="https://drive.google.com/file/d/1d2Y6ryvdkKka1MtdKjUf6j-fMJ1mGZZ4/view?usp=sharing" target="_blank" rel="noopener noreferrer"><x-button-mobver>Booklet</x-button-mobver></a>
            <a href="" target="_blank" rel="noopener noreferrer"><x-button-mobver>Registration</x-button-mobver></a>
        </div>

        <x-countdown-mobver>2024-09-01</x-countdown-mobver>

        <h1 class="text-3xl py-20 font-bold" style="color: rgb(12 40 62);">Timeline of Activity</h1>
        <div class="px-5 w-[30vh]">
            <img src="/image/tl/cp.png" alt="" class="flex h-auto">
        </div>
    </div>
</x-layout>