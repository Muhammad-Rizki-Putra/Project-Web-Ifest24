<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="hidden w-full md:flex flex-col bg-home-bg bg-cover bg-no-repeat bg-center ">
        <div class="py-[125px] px-[184px] bg-home-launch bg-center bg-cover bg-no-repeat flex items-center justify-center h-[calc(100vh-189px)]">
            <img src="/image/logo_ifest3.png" alt="" class="h-auto w-auto">
        </div>

        <div class="items-center justify-center">
            <div class="h-min-[88px] relative overflow-hidden bg-navy-bg text-white h-auto">
                <x-home-countdown class="">2024-09-17</x-home-countdown>
            </div>
        </div>

        <div class="flex flex-col px-[125px] pt-[25vh] justify-center">

            <div class="flex flex-col lg:flex-row justify-center">
                <div class="bg-home-doc bg-contain bg-center bg-no-repeat h-[512px] w-[512px] p-1.5 flex items-center justify-center">
                    <img class="w-full h-[492px]" src="/image/doc.png" alt="">
                </div>
                <div class="flex flex-col text-balance ml-10 mt-10 lg:mt-0">
                    <h1 class="text-7xl">Premiere Launch</h1>
                    <p class="text-3xl max-w-[578px]">A platform that enables Founders or Strategic Partners from multiple companies involved in the Artificial Intelligence and Financial Technology sectors, alongside experts and specialists in these domains.</p>
                </div>
            </div>

            <div class="flex justify-center pt-[116px]">
                <iframe class=" h-[512px] w-[1191]"
                    src="">
                </iframe>
            </div>
        
            <div class="flex flex-col items-center pt-[116px]">
                <h1 class="text-7xl text-center pb-[22px] font-semibold">What is IFEST?</h1>
                <p class="text-3xl text-center max-w-[1191px]">
                    IFest is an annual event presented by Himatif FMIPA Unpad, which carries the essence of IT and aims to serve as a platform for the development of participants' potential. IFest 2024 consists of several series, namely Talkshow, Technopreneur, National Seminar, IT Competition, Awarding Night, and Company Expo.
                </p>
            </div>

            <div class="flex flex-col justify-center pt-[116px]">
                <h1 class="text-7xl text-center font-semibold">Explore Our Event!</h1>
                <div class="flex flex-row items-center justify-center ">
                    <div class="control-buttons">
                        <button id="carousel-0-previousButton"><img src="/image/prev.png" alt=""></button>
                    </div>

                    <div class="gallery">
                        <div class="gallery-container">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-1" data-index = "1">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-2" data-index = "2">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-3" data-index = "3">
                        </div>
                    </div>

                    <div class="control-buttons">
                        <button id="carousel-0-nextButton"><img src="/image/next.png" alt=""></button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center pt-[116px]">
                <h1 class="text-7xl text-center font-semibold">Explore Our Competition!</h1>
                <div class="flex flex-row items-center justify-center ">
                    <div class="control-buttons">
                        <button id="carousel-1-previousButton"><img src="/image/prev.png" alt=""></button>
                    </div>

                    <div class="gallery">
                        <div class="gallery-container">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-1" data-index = "1">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-2" data-index = "2">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-3" data-index = "3">
                        </div>
                    </div>

                    <div class="control-buttons">
                        <button id="carousel-1-nextButton"><img src="/image/next.png" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile ver. -->
    <div class="md:hidden w-full flex flex-col bg-home-bg bg-cover bg-no-repeat bg-center">
        

        <div class="h-min-screen">
            <div class="bg-home-launch-mob bg-center bg-cover bg-no-repeat flex items-center justify-center px-5 h-[calc(90vh-76px)]">
                <img src="/image/logo_ifest.png" alt="" class="h-auto w-[200px]">
            </div>
            <div class=" relative overflow-hidden bg-navy-bg text-white">
                <x-home-countdown class="min-w-screen">2024-09-25</x-home-countdown>
            </div>
        </div>

        <div class="flex flex-col px-[5vh] pt-[5vh] justify-center">

            <div class="flex flex-col lg:flex-row justify-center items-center">
                <div class="bg-home-doc bg-contain bg-center bg-no-repeat h-[256px] w-[256px] p-0.5 flex items-center justify-center">
                    <img class="w-full h-[246px]" src="/image/doc.png" alt="">
                </div>
                <div class="flex flex-col text-balance text-center mt-10 lg:mt-0">
                    <h1 class="text-3xl font-bold">Premiere Launch</h1>
                    <p class="text-xl max-w-[578px]">A platform that enables Founders or Strategic Partners from multiple companies involved in the Artificial Intelligence and Financial Technology sectors, alongside experts and specialists in these domains.</p>
                </div>
            </div>

            <div class="flex justify-center pt-[116px]">
                <iframe class=" h-auto w-screen"
                    src="">
                </iframe>
            </div>
        
            <div class="flex flex-col items-center pt-[116px]">
                <h1 class="text-3xl text-center pb-[22px] font-bold">What is IFEST?</h1>
                <p class="text-xl text-center max-w-[1191px]">
                    IFest is an annual event presented by Himatif FMIPA Unpad, which carries the essence of IT and aims to serve as a platform for the development of participants' potential. IFest 2023 consists of several series, namely Talkshow, Technopreneur, National Seminar, IT Competition, Awarding Night, and Company Expo.
                </p>
            </div>

            <div class="flex flex-col justify-center pt-[116px]">
                <h1 class="text-3xl text-center font-bold">Explore Our Event!</h1>
                <div class="flex flex-row items-center justify-center gap-10">
                    <div class="control-buttons">
                        <button id="carousel-2-previousButton"><img src="/image/prev.png" alt=""></button>
                    </div>

                    <div class="gallery">
                        <div class="gallery-container">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-1" data-index = "1">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-2" data-index = "2">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-3" data-index = "3">
                        </div>
                    </div>

                    <div class="control-buttons">
                        <button id="carousel-2-nextButton"><img src="/image/next.png" alt=""></button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center pt-[116px]">
                <h1 class="text-3xl text-center font-bold">Explore Our Competition!</h1>
                <div class="flex flex-row items-center justify-center gap-10">
                    <div class="control-buttons">
                        <button id="carousel-3-previousButton"><img src="/image/prev.png" alt=""></button>
                    </div>

                    <div class="gallery">
                        <div class="gallery-container">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-1" data-index = "1">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-2" data-index = "2">
                            <img src="/image/box.png" alt="box" class="gallery-item gallery-item-3" data-index = "3">
                        </div>
                    </div>

                    <div class="control-buttons">
                        <button id="carousel-3-nextButton"><img src="/image/next.png" alt="" class="h-auto w-auto"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
