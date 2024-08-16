<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-top bg-cover bg-no-repeat py-20">
        
        <div class="space-y-20 w-[50%]">
            <h1 class="text-center text-5xl font-bold">Capture the Flag</h1>
            <p class="text-center text-xl text-balance font-semibold">Capture The Flag is a competition held to enhance problem-solving skills in the field of cybersecurity. This competition uses a jeopardy format that will test participants' abilities in Web Hacking, Binary Exploitation, Reverse Engineering, Digital Forensics, Cryptography, and Miscellaneous challenges. Each team, consisting of 1-3 members, competes in these areas in a single round.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><x-button>Booklet</x-button></a>
            <a href=""><x-button>Registration</x-button></a>
        </div>

        <x-countdown>2024-08-15</x-countdown>

        <h1 class="text-5xl p-20 font-bold">Timeline of Activity</h1>
        <div class="">
            <img src="/image/tl-ctf.png" alt="" class="flex h-auto">
        </div>
    </div>
</x-layout>