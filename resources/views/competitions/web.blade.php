<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="hidden md:flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-top bg-cover bg-no-repeat py-20">
        
        <div class="space-y-20 w-[50%]">
            <h1 class="text-center text-5xl font-bold">Web Development Competition</h1>
            <p class="text-center text-xl text-balance font-semibold">Web Development Competition is a competition where participants design and build a web application that has a purpose and benefits, functions well, and whose uniqueness can address challenges or problems in life.The website created must contain at least one of the following themes:- Finance & Business- Education, Skill and Self Development- Entrepreneur- Work-life Balance- Startups</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><x-button>Booklet</x-button></a>
            <a href="http://bit.ly/IFEST_WEBDEV2024"><x-button>Registration</x-button></a>
        </div>

        <x-countdown>2024-08-15</x-countdown>

        <h1 class="text-5xl p-20 font-bold">Timeline of Activity</h1>
        <div class="w-[45vh]">
            <img src="/image/tl-wdc.png" alt="" class="flex h-auto">
        </div>
    </div>

    <div class="md:hidden flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-top bg-cover bg-no-repeat py-20">
        
        <div class="space-y-10 mx-5">
            <h1 class="text-center text-3xl font-bold">Web Development Competition</h1>
            <p class="text-center text-xl text-balance font-semibold">Web Development Competition is a competition where participants design and build a web application that has a purpose and benefits, functions well, and whose uniqueness can address challenges or problems in life.The website created must contain at least one of the following themes:- Finance & Business- Education, Skill and Self Development- Entrepreneur- Work-life Balance- Startups</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><x-button-mobver>Booklet</x-button-mobver></a>
            <a href="http://bit.ly/IFEST_WEBDEV2024"><x-button-mobver>Registration</x-button-mobver></a>
        </div>

        <x-countdown-mobver>2024-09-14</x-countdown-mobver>

        <h1 class="text-3xl py-20 font-bold">Timeline of Activity</h1>
        <div class="px-5 w-[30vh]">
            <img src="/image/tl-wdc.png" alt="" class="flex h-auto">
        </div>
    </div>
</x-layout>