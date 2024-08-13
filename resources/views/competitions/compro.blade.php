<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="flex items-center justify-center flex-col h-auto bg-home-bg bg-cover bg-no-repeat bg-center py-20">
        
        <div class="space-y-20 w-[50%]">
            <h1 class="text-center text-5xl">Competitive Programming</h1>
            <p class="text-center text-xl text-balance">Competitive Programming Competition is a contest where participants are required to solve complex algorithmic problems within a specified time frame. Competitors write code to solve these problems, focusing on correctness, efficiency, and speed. All competitions are conducted online.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><img src="/image/Booklet.png" alt="" class="flex h-[75%] w-auto"></a>
            <a href=""><img src="/image/Registrasi.png" alt="" class="flex h-[75%] w-auto"></a>
        </div>

        <x-countdown>2024-08-15</x-countdown>

        <h1 class="text-5xl p-20">Timeline of Activity</h1>
        <div class="">
            <img src="/image/tl-cp.png" alt="" class="flex h-[50vh]">
        </div>
    </div>
</x-layout>