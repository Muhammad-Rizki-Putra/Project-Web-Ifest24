<x-layout>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="hidden w-full md:flex flex-col bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat ">
        <div
            class="py-[125px] px-[184px] bg-home-launch bg-center bg-cover bg-no-repeat flex items-center justify-center h-[calc(100vh-189px)]">
            <img src="/image/logo_ifest3.png" alt="" class="h-auto w-auto">
        </div>

        <div class="items-center justify-center">
            <div class="h-min-[88px] relative overflow-hidden bg-navy-bg text-white h-auto">
                <x-home-countdown class="">2024-09-17</x-home-countdown>
            </div>
        </div>

        <div class="flex flex-col px-[125px] pt-[15vh] justify-center">
            <div class="flex flex-col lg:flex-row justify-center pt-20">
                <div
                    class="bg-home-doc bg-contain bg-center bg-no-repeat h-[512px] w-[512px] p-1.5 flex items-center justify-center">
                    <img class="w-full h-[492px]" src="/image/doc.png" alt="">
                </div>
                <div class="flex flex-col text-balance ml-10 mt-10 lg:mt-0">
                    <h1 class="text-7xl pb-[22px] font-bold">Premiere Launch</h1>
                    <p class="text-2xl max-w-[578px] font-semibold">A platform that enables Founders or Strategic
                        Partners from
                        multiple companies involved in the Artificial Intelligence and Financial Technology sectors,
                        alongside experts and specialists in these domains.</p>
                </div>
            </div>

            <div class="flex justify-center pt-[116px] pb-24">
                <iframe class=" h-[512px] w-[1191]" src="https://www.youtube.com/embed/2NDpLzhb_o0">
                </iframe>
            </div>



            <div class="flex flex-col items-center pt-[116px]">
                <h1 class="text-6xl text-center pb-[22px] font-semibold">What is IFEST?</h1>
                <p class="text-2xl text-center max-w-[1191px]">
                    IFest is an annual event presented by Himatif FMIPA Unpad, which carries the essence of IT and aims
                    to serve as a platform for the development of participants' potential. IFest 2024 consists of
                    several series, namely Talkshow, Technopreneur, National Seminar, IT Competition, Awarding Night,
                    and Company Expo.
                </p>
            </div>

            <div class="flex flex-col justify-center pt-[116px]">
                <h1 class="text-7xl text-center font-semibold">Explore Our Event!</h1>

                <div class="flex flex-row items-center justify-center gap-x-20">
                    <div class="control-buttons">
                        <button id="carousel-0-previousButton"><img src="/image/prev.png" alt=""></button>
                    </div>

                    <div class="gallery">
                        <div class="gallery-container gallery-3">
                            <div class="gallery-item group gallery-item-1 flex flex-col items-center justify-center"
                                data-index="1">
                                <a href="/technopreneur" class="w-full flex justify-center">
                                    <img src="/image/logo 3.png" alt="box"
                                        class="bg-cream-bg rounded-lg w-[90%] h-auto mb-5">
                                </a>
                                <h1
                                    class="absolute bottom-0 text-center py-2 mt-5 text-xl text-cream-bg group-hover:text-navy-bg group-hover:bg-cream-bg transition bg-navy-bg font-semibold w-full">
                                    <a href="/technopreneur">TechnoPreneur</a>
                                </h1>
                            </div>

                            <div class="gallery-item group gallery-item-2 flex flex-col items-center justify-center"
                                data-index="2">
                                <a href="/grand-opening" class="w-full flex justify-center">
                                    <img src="/image/logo_ifest.png" alt="box"
                                        class="bg-cream-bg rounded-lg w-[80%] h-auto mb-5">
                                </a>
                                <h1
                                    class="absolute bottom-0 text-center py-2 mt-5 text-xl text-cream-bg group-hover:text-navy-bg group-hover:bg-cream-bg transition bg-navy-bg font-semibold w-full">
                                    <a href="/grand-opening">Grand Opening</a>
                                </h1>
                            </div>

                            <div class="gallery-item group gallery-item-3 flex flex-col items-center justify-center"
                                data-index="3">
                                <a href="/last_act" class="w-full flex justify-center">
                                    <img src="/image/logo_ifest.png" alt="box"
                                        class="bg-cream-bg rounded-lg w-[80%] h-auto mb-5">
                                </a>
                                <h1
                                    class="absolute bottom-0 text-center py-2 mt-5 text-xl text-cream-bg group-hover:text-navy-bg group-hover:bg-cream-bg transition bg-navy-bg font-semibold w-full">
                                    <a href="/last_act">Last Act</a>
                                </h1>
                            </div>

                        </div>
                    </div>

                    <div class="control-buttons">
                        <button id="carousel-0-nextButton"><img src="/image/next.png" alt=""></button>
                    </div>
                </div>

            </div>

            <div class="flex flex-col justify-center pt-[116px]">
                <h1 class="text-7xl text-center font-semibold">Explore Our Competition!</h1>

                <div class="flex flex-row items-center justify-center gap-x-20">
                    <div class="control-buttons">
                        <button id="carousel-1-previousButton"><img src="/image/prev.png" alt=""></button>
                    </div>

                    <div class="gallery relative items-center justify-center">
                        <div class="gallery-container gallery-5 items-center">

                            <div class="gallery-item group gallery-item-1 flex flex-col items-center justify-center"
                                data-index="1">
                                <a href="/capture-the-flag">
                                    <img src="/image/Lomba/CTF.png" alt="box"
                                        class="bg-cream-bg rounded-lg w-auto h-auto mb-5">

                                </a>
                                <h1
                                    class="absolute bottom-0 text-center py-2 mt-5 text-xl text-cream-bg group-hover:text-navy-bg group-hover:bg-cream-bg transition bg-navy-bg font-semibold w-full">
                                    <a href="/capture-the-flag">Capture The Flag</a>
                                </h1>
                            </div>
                            <div class="gallery-item group gallery-item-2 flex flex-col items-center justify-center"
                                data-index="2">
                                <a href="/competitive-programming">
                                    <img src="/image/Lomba/Comprog.png" alt="box"
                                        class="bg-cream-bg rounded-lg w-auto h-auto mb-5">
                                </a>
                                <h1
                                    class="absolute bottom-0 text-center py-2 mt-5 text-xl text-cream-bg group-hover:text-navy-bg group-hover:bg-cream-bg transition bg-navy-bg font-semibold w-full">
                                    <a href="/competitive-programming">Competitive Programming</a>
                                </h1>
                            </div>
                            <div class="gallery-item group gallery-item-3 flex flex-col items-center justify-center"
                                data-index="3">
                                <a href="/data-analysis-competition">
                                    <img src="/image/Lomba/DAC.png" alt="box"
                                        class="bg-cream-bg rounded-lg w-auto h-auto mb-5">
                                </a>
                                <h1
                                    class="absolute bottom-0 text-center py-2 mt-5 text-xl text-cream-bg group-hover:text-navy-bg group-hover:bg-cream-bg transition bg-navy-bg font-semibold w-full">
                                    <a href="/data-analysis-competition">Data Analyst Competition</a>
                                </h1>
                            </div>
                            <div class="gallery-item group gallery-item-4 flex flex-col items-center justify-center"
                                data-index="4">
                                <a href="/informatics-competition">
                                    <img src="/image/Lomba/Incomp.png" alt="box"
                                        class="bg-cream-bg rounded-lg w-auto h-[200px] mb-5">
                                </a>
                                <h1
                                    class="absolute bottom-0 text-center py-2 mt-5 text-lg text-cream-bg group-hover:text-navy-bg group-hover:bg-cream-bg transition bg-navy-bg font-semibold w-full text-nowrap">
                                    <a href="/informatics-competition">Informatics Competition</a>
                                </h1>
                            </div>
                            <div class="gallery-item group gallery-item-5 flex flex-col items-center justify-center"
                                data-index="5">
                                <a href="/web-development-competition">
                                    <img src="/image/Lomba/Webdev.png" alt="box"
                                        class="bg-cream-bg rounded-lg w-auto h-auto mb-5">
                                </a>
                                <h1
                                    class="absolute bottom-0 text-center py-2 mt-5 text-lg text-cream-bg group-hover:text-navy-bg group-hover:bg-cream-bg transition bg-navy-bg font-semibold w-full text-nowrap">
                                    <a href="/web-development-competition">Web Development Competition</a>
                                </h1>
                            </div>

                        </div>
                    </div>

                    <div class="control-buttons">
                        <button id="carousel-1-nextButton"><img src="/image/next.png" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="py-10">
                <h1 class="text-7xl text-center font-semibold">Dicoding promotion</h1>
                <div x-data="{
                    slides: [{
                            imgSrc: '/image/PosterDicoding/1.png',
                            imgAlt: '',
                            title: '',
                            description: '',
                            ctaUrl: 'https://dicoding.id/DBN',
                            ctaText: 'Click for more information',
                        },
                        {
                            imgSrc: '/image/PosterDicoding/2.png',
                            imgAlt: '',
                            title: '',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click for more information',
                        },
                        {
                            imgSrc: '/image/PosterDicoding/3.png',
                            imgAlt: '',
                            title: '',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click for more information',
                        },
                        {
                            imgSrc: '/image/PosterDicoding/4.png',
                            imgAlt: '',
                            title: '',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click for more information',
                        },
                    ],
                    currentSlideIndex: 1,
                    previous() {
                        if (this.currentSlideIndex > 1) {
                            this.currentSlideIndex = this.currentSlideIndex - 1
                        } else {
                            this.currentSlideIndex = this.slides.length
                        }
                    },
                    next() {
                        if (this.currentSlideIndex < this.slides.length) {
                            this.currentSlideIndex = this.currentSlideIndex + 1
                        } else {
                            this.currentSlideIndex = 1
                        }
                    },
                }" class="relative w-full overflow-hidden">

                    <!-- previous button -->
                    <button type="button"
                        class="absolute left-96 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="previous slide" x-on:click="previous()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                            fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <!-- next button -->
                    <button type="button"
                        class="absolute right-96 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                            fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>

                    <div class="w-full flex items-center justify-center">
                        <div class="relative min-h-[690px] w-[540px]">
                            <template x-for="(slide, index) in slides">
                                <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                                    x-transition.opacity.duration.1000ms>
                                    <div
                                        class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-slate-900/0 to-transparent px-16 py-12 text-center">
                                        <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white"
                                            x-text="slide.title"
                                            x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                                        <p class="lg:w-1/2 w-full text-pretty text-sm text-slate-300"
                                            x-text="slide.description"
                                            x-bind:id="'slide' + (index + 1) + 'Description'">
                                        </p>
                                        <button type="button" x-cloak x-show="slide.ctaUrl !== null"
                                            class="mt-2 cursor-pointer whitespace-nowrap rounded-xl border border-white bg-transparent px-4 py-2 text-center text-xs font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-onSurfaceDarkStrong active:opacity-100 active:outline-offset-0 md:text-sm"
                                            x-text="slide.ctaText" @click="window.location.href = slide.ctaUrl">
                                        </button>
                                    </div>

                                    <img class="absolute w-full h-full inset-0 object-cover text-slate-700 dark:text-slate-300"
                                        x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                                </div>
                            </template>
                        </div>
                    </div>

                    <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2"
                        role="group" aria-label="slides">
                        <template x-for="(slide, index) in slides">
                            <button class="size-2 cursor-pointer rounded-full transition"
                                x-on:click="currentSlideIndex = index + 1"
                                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']"
                                x-bind:aria-label="'slide ' + (index + 1)"></button>
                        </template>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center flex-col">
                <p class="text-center text-4xl font-semibold pt-10 pb-7 w-fit">Our Sponsor</p>
                <div
                    class=" py-8 w-full h-auto outline-1 flex flex-col items-center justify-center gap-y-6 bg-opacity-50 rounded-md backdrop-blur-md bg-white/30 p-5">
                    <div class="grid grid-cols-4 grid-flow-row gap-4 justify-center items-center">
                        <a target="_blank" rel="noopener noreferrer"
                            href="https://www.instagram.com/opsfood.co?igsh=ZXdyN3k5dGdodDI2"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/2.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://gits.id/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/5.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://mekari.com/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/3.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://kolaborasi.co/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/4.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://selasarkampus.com/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/1.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.dicoding.com/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/6.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer"
                            href="https://www.linkedin.com/company/petircysec/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/ITComp/2.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://devcode.ai/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/ITComp/3.svg"
                                alt="">
                        </a>
                    </div>
                    <div class="grid grid-cols-3 grid-flow-row gap-4 justify-center items-center">
                        <a target="_blank" rel="noopener noreferrer"
                            href="https://www.instagram.com/aida_unpad?igsh=eDNhajJmbWx3N2o="
                            class="p-5 flex items-center justify-center"><img src="/image/SponsorPage/ITComp/1.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.mceasy.com/en/"
                            class="flex items-center justify-center p-5"><img src="/image/sponsor/gambar1.png"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://skillpedia.id/"
                            class="p-5 flex items-center justify-center"><img src="/image/sponsor/gambar2.png" alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://tujuhsembilan.com/"
                            class="p-5 flex items-center justify-center"><img class="w-[300px]" src="/image/sponsor/imgTujuhSembilan.png"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://kinobi.tech/"
                            class="p-5 flex items-center justify-center"><img class="w-[300px]" src="/image/sponsor/imgKinobi.png" alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://karier.unpad.ac.id/"
                            class="p-5 flex items-center justify-center"><img class="w-auto h-[150px]"
                                src="/image/sponsor/imgKarirUnpad.jpg" alt="">
                        </a>
                    </div>

                </div>
            </div>

            <div class="flex items-center justify-center flex-col pb-20">
                <p class="text-center text-4xl font-semibold pt-10 pb-7 w-fit">Our Media Partner</p>
                <div
                    class=" py-8 w-full h-auto outline-1  flex flex-col items-center justify-center gap-y-6 bg-opacity-50 rounded-md backdrop-blur-md bg-white/30 p-5">
                    <div class="grid grid-cols-4 grid-flow-row gap-4 justify-center items-center">
                        <div class="flex items-center justify-center"><img src="/image/MedPart/Techno/2.svg"
                                alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/Techno/3.svg"
                                alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/Techno/4.svg"
                                alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/Techno/1.svg"
                                alt="">
                        </div>
                    </div>
                    <div class="grid grid-cols-3 grid-flow-row gap-4 justify-center items-center">
                        <div class="flex items-center justify-center"><img src="/image/MedPart/ITComp/2.svg"
                                alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/ITComp/3.svg"
                                alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/ITComp/4.svg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- dday Modal PC -->
        <!-- @if (isset($isRegistered) && $isRegistered) -->
        <div id="dday"
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50 hidden">
            <div class="relative bg-white p-8 rounded-lg shadow-lg text-center">
                <button id="close-dday"
                    class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-2xl font-bold">&times;</button>
                <h2 class="text-3xl font-bold mb-4">D-Day!</h2>
                <p class="text-lg mb-4">Thank you for joining us! For those attending online, you can join from
                    this
                    link: <a href="https://zoom.us/j/96902496904?pwd=o2jHctOaZQt7DpwwTo6sidFWiBKGNa.1"
                        class="text-blue-500">Join Here</a>.</p>
                <p class="text-lg">For those attending offline, enjoy additional benefits like a CV Clinic, company
                    expo, games, and much more. See you there!</p>
            </div>
        </div>
        <!-- @endif -->
    </div>

    <!-- Mobile ver. -->
    <div class="md:hidden w-full flex flex-col bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat">


        <div class="h-min-screen">
            <div
                class="bg-home-launch-mob bg-center bg-cover bg-no-repeat flex items-center justify-center px-5 h-[calc(90vh-76px)]">
                <img src="/image/logo_ifest.png" alt="" class="h-auto w-[200px]">
            </div>
            <div class=" relative overflow-hidden bg-navy-bg text-white">
                <x-home-countdown class="min-w-screen">2024-09-16</x-home-countdown>
            </div>
        </div>

        <div class="flex flex-col px-[5vh] pt-[5vh] justify-center">

            <div class="flex flex-col lg:flex-row justify-center items-center">
                <div
                    class="bg-home-doc bg-contain bg-center bg-no-repeat h-[256px] w-[256px] p-0.5 flex items-center justify-center">
                    <img class="w-full h-[246px]" src="/image/doc.png" alt="">
                </div>
                <div class="flex flex-col text-balance text-center mt-10 lg:mt-0">
                    <h1 class="text-3xl font-bold">Premiere Launch</h1>
                    <p class="text-xl pt-4 max-w-[578px]">A platform that enables Founders or Strategic Partners from
                        multiple companies involved in the Artificial Intelligence and Financial Technology sectors,
                        alongside experts and specialists in these domains.</p>
                </div>
            </div>

            <div class="flex justify-center pt-8">
                <iframe class=" h-auto w-screen" src="https://www.youtube.com/embed/2NDpLzhb_o0">
                </iframe>
            </div>



            <div class="flex flex-col items-center py-16">
                <h1 class="text-3xl text-center pb-[22px] font-bold">What is IFEST?</h1>
                <p class="text-xl text-center max-w-[1191px]">
                    IFest is an annual event presented by Himatif FMIPA Unpad, which carries the essence of IT and aims
                    to serve as a platform for the development of participants' potential. IFest 2024 consists of
                    several series, namely Talkshow, Technopreneur, National Seminar, IT Competition, Awarding Night,
                    and Company Expo.
                </p>
            </div>

            <div class="flex flex-col justify-center">
                <h1 class="text-3xl text-center font-semibold mb-5" style="color: rgb(12 40 62);">Explore Our Event!
                </h1>
                <div x-data="{
                    slides: [{
                            imgSrc: '/image/tp-hm.png',
                            imgAlt: '',
                            title: 'Technopreneur',
                            description: '',
                            ctaUrl: '/technopreneur',
                            ctaText: 'Click here for more details',
                        },
                        {
                            imgSrc: '/image/if-hm.png',
                            imgAlt: '',
                            title: 'Grand Opening',
                            description: '',
                            ctaUrl: '/grand-opening',
                            ctaText: 'Click here for more details',
                        },
                        {
                            imgSrc: '/image/if-hm.png',
                            imgAlt: '',
                            title: 'Last Act',
                            description: '',
                            ctaUrl: '/last_act',
                            ctaText: 'Click here for more details',
                        },
                    ],
                    currentSlideIndex: 1,
                    previous() {
                        if (this.currentSlideIndex > 1) {
                            this.currentSlideIndex = this.currentSlideIndex - 1
                        } else {
                            // If it's the first slide, go to the last slide           
                            this.currentSlideIndex = this.slides.length
                        }
                    },
                    next() {
                        if (this.currentSlideIndex < this.slides.length) {
                            this.currentSlideIndex = this.currentSlideIndex + 1
                        } else {
                            // If it's the last slide, go to the first slide    
                            this.currentSlideIndex = 1
                        }
                    },
                }" class="relative w-full overflow-hidden">

                    <!-- previous button -->
                    <button type="button"
                        class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="previous slide" x-on:click="previous()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                            fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <!-- next button -->
                    <button type="button"
                        class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                            fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>

                    <!-- slides -->
                    <!-- Change min-h-[50svh] to your preferred height size -->
                    <div class="relative min-h-[50svh] w-full">
                        <template x-for="(slide, index) in slides">
                            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                                x-transition.opacity.duration.1000ms>

                                <!-- Title and description -->
                                <div
                                    class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-slate-900/85 to-transparent px-16 py-12 text-center">
                                    <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white"
                                        x-text="slide.title"
                                        x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                                    <p class="lg:w-1/2 w-full text-pretty text-sm text-slate-300"
                                        x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'">
                                    </p>
                                    <button type="button" x-cloak x-show="slide.ctaUrl !== null"
                                        class="mt-2 cursor-pointer whitespace-nowrap rounded-xl border border-white bg-transparent px-4 py-2 text-center text-xs font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-onSurfaceDarkStrong active:opacity-100 active:outline-offset-0 md:text-sm"
                                        x-text="slide.ctaText" @click="window.location.href = slide.ctaUrl">
                                    </button>
                                </div>

                                <img class="absolute w-full h-full inset-0 object-cover text-slate-700 dark:text-slate-300"
                                    x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                            </div>
                        </template>
                    </div>

                    <!-- indicators -->
                    <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2"
                        role="group" aria-label="slides">
                        <template x-for="(slide, index) in slides">
                            <button class="size-2 cursor-pointer rounded-full transition"
                                x-on:click="currentSlideIndex = index + 1"
                                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']"
                                x-bind:aria-label="'slide ' + (index + 1)"></button>
                        </template>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center py-16">
                <h1 class="text-3xl text-center font-semibold mb-5" style="color: rgb(12 40 62);">Explore Our
                    Competition!</h1>
                <div x-data="{
                    slides: [{
                            imgSrc: '/image/Lomba-cm/Comprog.png',
                            imgAlt: '',
                            title: 'Competitive Programming',
                            description: '',
                            ctaUrl: '/competitive-programming',
                            ctaText: 'Click here to participate',
                        },
                        {
                            imgSrc: '/image/Lomba-cm/CTF.png',
                            imgAlt: '',
                            title: 'Capture The Flag',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click here to participate',
                        },
                        {
                            imgSrc: '/image/Lomba-cm/DAC.png',
                            imgAlt: '',
                            title: 'Data Analyst Competition',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click here to participate',
                        },
                        {
                            imgSrc: '/image/Lomba-cm/Incomp.png',
                            imgAlt: '',
                            title: 'Informatics Competition',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click here to participate',
                        },
                        {
                            imgSrc: '/image/Lomba-cm/Webdev.png',
                            imgAlt: '',
                            title: 'Web Development',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click here to participate',
                        },
                    ],
                    currentSlideIndex: 1,
                    previous() {
                        if (this.currentSlideIndex > 1) {
                            this.currentSlideIndex = this.currentSlideIndex - 1
                        } else {
                            // If it's the first slide, go to the last slide           
                            this.currentSlideIndex = this.slides.length
                        }
                    },
                    next() {
                        if (this.currentSlideIndex < this.slides.length) {
                            this.currentSlideIndex = this.currentSlideIndex + 1
                        } else {
                            // If it's the last slide, go to the first slide    
                            this.currentSlideIndex = 1
                        }
                    },
                }" class="relative w-full overflow-hidden">

                    <!-- previous button -->
                    <button type="button"
                        class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="previous slide" x-on:click="previous()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                            fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <!-- next button -->
                    <button type="button"
                        class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                            fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>

                    <div class="relative min-h-[50svh] w-full">
                        <template x-for="(slide, index) in slides">
                            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                                x-transition.opacity.duration.1000ms>

                                <div
                                    class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-slate-900/85 to-transparent px-16 py-12 text-center">
                                    <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white"
                                        x-text="slide.title"
                                        x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                                    <p class="lg:w-1/2 w-full text-pretty text-sm text-slate-300"
                                        x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'">
                                    </p>
                                    <button type="button" x-cloak x-show="slide.ctaUrl !== null"
                                        class="mt-2 cursor-pointer whitespace-nowrap rounded-xl border border-white bg-transparent px-4 py-2 text-center text-xs font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-onSurfaceDarkStrong active:opacity-100 active:outline-offset-0 md:text-sm"
                                        x-text="slide.ctaText" @click="window.location.href = slide.ctaUrl">
                                    </button>
                                </div>

                                <img class="absolute w-full h-full inset-0 object-cover text-slate-700 dark:text-slate-300"
                                    x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                            </div>
                        </template>
                    </div>

                    <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2"
                        role="group" aria-label="slides">
                        <template x-for="(slide, index) in slides">
                            <button class="size-2 cursor-pointer rounded-full transition"
                                x-on:click="currentSlideIndex = index + 1"
                                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']"
                                x-bind:aria-label="'slide ' + (index + 1)"></button>
                        </template>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center py-16">
                <h1 class="text-3xl text-center font-semibold mb-5" style="color: rgb(12 40 62);">Dicoding promotion
                </h1>
                <div x-data="{
                    slides: [{
                            imgSrc: '/image/PosterDicoding/1.png',
                            imgAlt: '',
                            title: '',
                            description: '',
                            ctaUrl: 'https://dicoding.id/DBN',
                            ctaText: 'Click for more information',
                        },
                        {
                            imgSrc: '/image/PosterDicoding/2.png',
                            imgAlt: '',
                            title: '',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click for more information',
                        },
                        {
                            imgSrc: '/image/PosterDicoding/3.png',
                            imgAlt: '',
                            title: '',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click for more information',
                        },
                        {
                            imgSrc: '/image/PosterDicoding/4.png',
                            imgAlt: '',
                            title: '',
                            description: '',
                            ctaUrl: '/capture-the-flag',
                            ctaText: 'Click for more information',
                        },
                    ],
                    currentSlideIndex: 1,
                    previous() {
                        if (this.currentSlideIndex > 1) {
                            this.currentSlideIndex = this.currentSlideIndex - 1
                        } else {
                            // If it's the first slide, go to the last slide           
                            this.currentSlideIndex = this.slides.length
                        }
                    },
                    next() {
                        if (this.currentSlideIndex < this.slides.length) {
                            this.currentSlideIndex = this.currentSlideIndex + 1
                        } else {
                            // If it's the last slide, go to the first slide    
                            this.currentSlideIndex = 1
                        }
                    },
                }" class="relative w-full overflow-hidden">

                    <!-- previous button -->
                    <button type="button"
                        class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="previous slide" x-on:click="previous()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                            fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <!-- next button -->
                    <button type="button"
                        class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                            fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>

                    <div class="relative min-h-[50svh] w-full">
                        <template x-for="(slide, index) in slides">
                            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                                x-transition.opacity.duration.1000ms>

                                <div
                                    class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-slate-900/0 to-transparent px-16 py-12 text-center">
                                    <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white"
                                        x-text="slide.title"
                                        x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                                    <p class="lg:w-1/2 w-full text-pretty text-sm text-slate-300"
                                        x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'">
                                    </p>
                                    <button type="button" x-cloak x-show="slide.ctaUrl !== null"
                                        class="mt-2 cursor-pointer whitespace-nowrap rounded-xl border border-white bg-transparent px-4 py-2 text-center text-xs font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-onSurfaceDarkStrong active:opacity-100 active:outline-offset-0 md:text-sm"
                                        x-text="slide.ctaText" @click="window.location.href = slide.ctaUrl">
                                    </button>
                                </div>

                                <img class="absolute w-full h-full inset-0 object-cover text-slate-700 dark:text-slate-300"
                                    x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                            </div>
                        </template>
                    </div>

                    <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2"
                        role="group" aria-label="slides">
                        <template x-for="(slide, index) in slides">
                            <button class="size-2 cursor-pointer rounded-full transition"
                                x-on:click="currentSlideIndex = index + 1"
                                x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']"
                                x-bind:aria-label="'slide ' + (index + 1)"></button>
                        </template>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center flex-col">
                <p class="text-center text-4xl font-semibold pt-10 pb-7 w-fit">Our Sponsor</p>
                <div
                    class=" py-8 w-full h-auto bg-white flex flex-col items-center justify-center gap-y-6 backdrop-blur-md bg-white/30 rounded-md p-3">
                    <div class="grid grid-cols-3 grid-flow-row gap-4 justify-center items-center">
                        <a target="_blank" rel="noopener noreferrer"
                            href="https://www.instagram.com/opsfood.co?igsh=ZXdyN3k5dGdodDI2"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/2.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://gits.id/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/5.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://mekari.com/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/3.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://kolaborasi.co/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/4.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://selasarkampus.com/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/1.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.dicoding.com/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/Techno/6.svg"
                                alt="">
                        </a>
                    </div>
                    <div class="grid grid-cols-2 grid-flow-row gap-4 justify-center items-center">
                        <a target="_blank" rel="noopener noreferrer"
                            href="https://www.linkedin.com/company/petircysec/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/ITComp/2.svg"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://devcode.ai/"
                            class="flex items-center justify-center"><img src="/image/SponsorPage/ITComp/3.svg" alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://tujuhsembilan.com/"
                            class="p-5 flex items-center justify-center"><img src="/image/sponsor/imgTujuhSembilan.png"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://kinobi.tech/"
                            class="p-5 flex items-center justify-center"><img src="/image/sponsor/imgKinobi.png" alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://karier.unpad.ac.id/"
                            class="p-5 flex items-center justify-center "><img class=""
                                src="/image/sponsor/imgKarirUnpad.jpg" alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer"
                            href="https://www.instagram.com/aida_unpad?igsh=eDNhajJmbWx3N2o="
                            class="p-5 flex items-center justify-center"><img src="/image/SponsorPage/ITComp/1.svg"
                                alt="">
                        </a>
                    </div>
                    <div class="grid grid-cols-2 grid-flow-row gap-4 justify-center items-center">

                        <a target="_blank" rel="noopener noreferrer" href="https://www.mceasy.com/en/"
                            class="flex items-center justify-center p-5"><img src="/image/sponsor/gambar1.png"
                                alt="">
                        </a>
                        <a target="_blank" rel="noopener noreferrer" href="https://skillpedia.id/"
                            class="p-5 flex items-center justify-center"><img src="/image/sponsor/gambar2.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center flex-col pb-5">
                <p class="text-center text-4xl font-semibold pt-10 pb-7 w-fit">Our Media Partner</p>
                <div
                    class=" py-8 w-full h-auto flex flex-col items-center justify-center gap-y-6 backdrop-blur-md bg-white/30 rounded-md p-3">
                    <div class="grid grid-cols-3 grid-flow-row gap-4 justify-center items-center">
                        <div class="flex items-center justify-center"><img src="/image/MedPart/Techno/2.svg"
                                alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/Techno/3.svg"
                                alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/Techno/4.svg"
                                alt="">
                        </div>
                    </div>
                    <div class="grid grid-cols-3 grid-flow-row gap-4 justify-center items-center">
                        <div class="flex items-center justify-center"><img src="/image/MedPart/ITComp/2.svg"
                                alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/ITComp/3.svg"
                                alt="">
                        </div>
                        <div class="flex items-center justify-center"><img src="/image/MedPart/ITComp/4.svg"
                                alt="">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 grid-flow-row gap-4 justify-center items-center">
                        <div class="flex items-center justify-center"><img src="/image/MedPart/Techno/1.svg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- @if (isset($isRegistered) && $isRegistered) -->
        <div id="dday-mobile"
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50 hidden">
            <div class="relative bg-white p-6 rounded-lg shadow-lg text-center max-w-sm mx-auto">
                <button id="close-dday-mobile"
                    class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-2xl font-bold">&times;</button>
                <h2 class="text-3xl font-bold mb-4">D-Day!</h2>
                <p class="text-lg mb-4">Thank you for joining us! For those attending online, you can join from
                    this link:
                    <a href="https://zoom.us/j/96902496904?pwd=o2jHctOaZQt7DpwwTo6sidFWiBKGNa.1"
                        class="text-blue-500">Join Here</a>.
                </p>
                <p class="text-lg">For those attending offline, enjoy additional benefits like a CV Clinic, company
                    expo, games, and much more. See you there!</p>
            </div>
        </div>
        <!-- @endif -->
    </div>
</x-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dday = document.getElementById('dday');
        var ddayMobile = document.getElementById('dday-mobile');

        if (dday) {
            dday.classList.remove('hidden');
        }

        if (ddayMobile) {
            ddayMobile.classList.remove('hidden');
        }

        var closedday = document.getElementById('close-dday');
        var closeddayMobile = document.getElementById('close-dday-mobile');

        if (closedday) {
            closedday.onclick = function() {
                if (dday) {
                    dday.classList.add('hidden');
                }
            };
        }

        if (closeddayMobile) {
            closeddayMobile.onclick = function() {
                if (ddayMobile) {
                    ddayMobile.classList.add('hidden');
                }
            };
        }
    });
</script>