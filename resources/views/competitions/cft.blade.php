<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="hidden md:flex items-center justify-center flex-col h-auto  bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">
        
        <div class="space-y-20 w-[50%]">
            <h1 class="text-center text-5xl font-bold">Capture the Flag</h1>
            <p class="text-center text-xl text-balance font-semibold">Capture The Flag is a competition held to enhance problem-solving skills in the field of cybersecurity. This competition uses a jeopardy format that will test participants' abilities in Web Hacking, Binary Exploitation, Reverse Engineering, Digital Forensics, Cryptography, and Miscellaneous challenges. Each team, consisting of 1-3 members, competes in these areas in a single round.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><x-button>Booklet</x-button></a>
            <a href="http://bit.ly/IFEST_CTF"><x-button>Registration</x-button></a>
        </div>

        <x-countdown>2024-09-07</x-countdown>

        <h1 class="text-5xl p-20 font-bold">Timeline of Activity</h1>
        <div class="w-[45vh]">
            <img src="/image/tl/ctf.png" alt="" class="flex h-auto">
        </div>
    </div>

    <div class="md:hidden flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">
        
        <div class="space-y-10 mx-5">
            <h1 class="text-center text-3xl font-bold">Capture the Flag</h1>
            <p class="text-center text-md text-wrap font-semibold">Capture The Flag is a competition held to enhance problem-solving skills in the field of cybersecurity. This competition uses a jeopardy format that will test participants' abilities in Web Hacking, Binary Exploitation, Reverse Engineering, Digital Forensics, Cryptography, and Miscellaneous challenges. Each team, consisting of 1-3 members, competes in these areas in a single round.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href="https://bit.ly/GUIDEBOOK_IFEST2024"><x-button-mobver>Booklet</x-button-mobver></a>
            <a href="http://bit.ly/IFEST_CTF"><x-button-mobver>Registration</x-button-mobver></a>
        </div>

        <x-countdown-mobver>2024-09-15</x-countdown-mobver>

        <h1 class="text-3xl py-20 font-bold">Timeline of Activity</h1>
        <div class="px-5    ">
            <img src="/image/tl/ctf.png" alt="" class="flex h-auto">
        </div>
    </div>
</x-layout>
