<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="hidden md:flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">
        
        <div class="space-y-20 w-[50%]">
            <h1 class="text-center text-5xl font-bold">Informatics Competition</h1>
            <p class="text-center text-xl text-balance font-semibold">The Informatics Competition is an informatics olympiad where participants are required to solve computational logic, algorithmic, and problem-solving questions. The preliminary round is held online, while the final will be conducted at the Unpad Jatinangor campus.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><x-button>Booklet</x-button></a>
            <a href="http://bit.ly/IFEST_INCOM2024"><x-button>Registration</x-button></a>
        </div>

        <x-countdown>2024-08-15</x-countdown>

        <h1 class="text-5xl p-20 font-bold">Timeline of Activity</h1>
        <div class="w-[45vh]">
            <img src="/image/tl/ic.png" alt="" class="flex h-auto">
        </div>
    </div>

    <div class="md:hidden flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">
        
        <div class="space-y-10 mx-5">
            <h1 class="text-center text-3xl font-bold">Informatics Competition</h1>
            <p class="text-center text-xl text-balance font-semibold">The Informatics Competition is an informatics olympiad where participants are required to solve computational logic, algorithmic, and problem-solving questions. The preliminary round is held online, while the final will be conducted at the Unpad Jatinangor campus.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href=""><x-button-mobver>Booklet</x-button-mobver></a>
            <a href="http://bit.ly/IFEST_INCOM2024"><x-button-mobver>Registration</x-button-mobver></a>
        </div>

        <x-countdown-mobver>2024-09-14</x-countdown-mobver>

        <h1 class="text-3xl py-20 font-bold">Timeline of Activity</h1>
        <div class="px-5 w-[30vh]">
            <img src="/image/tl/ic.png" alt="" class="flex h-auto">
        </div>
    </div>
</x-layout>