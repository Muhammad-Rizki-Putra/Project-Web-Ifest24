<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="flex items-center justify-center flex-col h-auto bg-home-bg bg-cover bg-no-repeat bg-center py-20">
        
        <div class="space-y-20 w-[50%]">
            <h1 class="text-center text-5xl">Web Development Competition</h1>
            <p class="text-center text-xl text-balance">Web Development Competition is a competition where participants design and build a web application that has a purpose and benefits, functions well, and whose uniqueness can address challenges or problems in life.The website created must contain at least one of the following themes:- Finance & Business- Education, Skill and Self Development- Entrepreneur- Work-life Balance- Startups</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><img src="/image/Booklet.png" alt="" class="flex h-[75%] w-auto"></a>
            <a href=""><img src="/image/Registrasi.png" alt="" class="flex h-[75%] w-auto"></a>
        </div>

        <x-countdown>2024-08-15</x-countdown>

        <h1 class="text-5xl p-20">Timeline of Activity</h1>
        <div class="">
            <img src="/image/tl-wdc.png" alt="" class="flex h-[50vh]">
        </div>
    </div>
</x-layout>