<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="hidden md:flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">

        <div class="space-y-8 w-[50%] flex flex-col items-center justify-center">
            <h1 class="text-center text-5xl font-bold text-navy-bg">Informatics Competition</h1>
            <img src="/image/Lomba/Incomp.png" alt="" class="h-auto w-[22%]">
            <p class="text-center text-xl text-balance font-semibold">The Informatics Competition is an informatics olympiad where participants are required to solve computational logic, algorithmic, and problem-solving questions. The preliminary round is held online, while the final will be conducted at the Unpad Jatinangor campus.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href="https://drive.google.com/file/d/1PUrcBSVbdaNC7KTzxGUNyBeLL1O7KoYz/view?usp=drive_link" target="_blank" rel="noopener noreferrer"><x-button textSize="text-2xl" textPadding="p-1">Booklet</x-button></a>
            <a href="http://bit.ly/IFEST_INCOM2024" target="_blank" rel="noopener noreferrer"><x-button textSize="text-2xl" textPadding="p-1">Registration</x-button></a>
        </div>

        <x-countdown>2024-08-15</x-countdown>

        <h1 class="text-5xl p-20 font-bold" >Timeline of Activity</h1>
        <div class="w-[45vh]">
            <img src="/image/tl/ic.png" alt="" class="flex h-auto">
        </div>

        <div class="flex flex-col w-auto">
            <div class="flex items-center justify-center flex-col">
                <p class="text-center text-4xl font-semibold pt-10 pb-7 w-fit">Our Sponsor</p>
                <div
                    class="w-full py-8 h-auto bg-white flex flex-col items-center justify-center gap-y-6 bg-opacity-50 rounded-md">
                    <div class="grid grid-cols-3 grid-rows-1 gap-4 gap-x-1 justify-center items-center">
                        <div class="p-3 flex items-center justify-center"><img src="/image/SponsorPage/ITComp/1.svg" alt="">
                        </div>
                        <div class="p-3 flex items-center justify-center"><img src="/image/SponsorPage/ITComp/2.svg" alt="">
                        </div>
                        <div class="p-3 mr-5 flex items-center justify-center"><img src="/image/SponsorPage/ITComp/3.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center flex-col">
                <p class="text-center text-4xl font-semibold pt-10 pb-7 w-fit">Our Media Partner</p>
                <div
                    class="w-full py-8 h-auto bg-white flex flex-col items-center justify-center gap-y-6 bg-opacity-50 rounded-md">
                    <div class="grid grid-cols-4 grid-rows-1 gap-4 gap-x-5 justify-center items-center">
                        <div class="flex items-center justify-center"><img src="/image/MedPart/ITComp/2.svg" alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/ITComp/3.svg" alt="">
                        </div>
                        <div class="flex items-center justify-center p-5"><img src="/image/MedPart/ITComp/4.svg" alt="">
                        </div>
                        <div class="p-5 flex items-center justify-center"><img src="/image/MedPart/ITComp/1.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="md:hidden flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">

        <div class="space-y-4 mx-5 flex flex-col items-center justify-center">  
            <h1 class="text-center text-3xl font-bold" style="color: rgb(12 40 62);">Informatics Competition</h1>
            <img src="/image/Lomba/Incomp.png" alt="" class="h-auto w-[35%]">
            <p class="text-center text-md text-wrap font-semibold" style="color: rgb(12 40 62);">The Informatics Competition is an informatics olympiad where participants are required to solve computational logic, algorithmic, and problem-solving questions. The preliminary round is held online, while the final will be conducted at the Unpad Jatinangor campus.</p>
        </div>

        <div class="flex flex-row items-center justify-center space-x-10 w-auto py-10">
            <a href="https://drive.google.com/file/d/1PUrcBSVbdaNC7KTzxGUNyBeLL1O7KoYz/view?usp=drive_link" target="_blank" rel="noopener noreferrer"><x-button-mobver>Booklet</x-button-mobver></a>
            <a href="http://bit.ly/IFEST_INCOM2024" target="_blank" rel="noopener noreferrer"><x-button-mobver>Registration</x-button-mobver></a>
        </div>

        <x-countdown-mobver>2024-09-14</x-countdown-mobver>

        <h1 class="text-3xl py-20 font-bold" style="color: rgb(12 40 62);">Timeline of Activity</h1>
        <div class="px-5 w-[30vh]">
            <img src="/image/tl/ic.png" alt="" class="flex h-auto">
        </div>
    </div>
</x-layout>