<x-layout>
    <x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="hidden w-full md:flex flex-col bg-home-bg bg-cover bg-no-repeat bg-center ">
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
                                <a href="/last-act" class="w-full flex justify-center">
                                    <img src="/image/logo_ifest.png" alt="box"
                                        class="bg-cream-bg rounded-lg w-[80%] h-auto mb-5">
                                </a>
                                <h1
                                    class="absolute bottom-0 text-center py-2 mt-5 text-xl text-cream-bg group-hover:text-navy-bg group-hover:bg-cream-bg transition bg-navy-bg font-semibold w-full">
                                    <a href="/last-act">Last Act</a>
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
    slides: [                
        {
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                            stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <!-- next button -->
                    <button type="button"
                        class="absolute right-96 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                            stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
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
        </div>
    </div>

    <!-- Mobile ver. -->
    <div class="md:hidden w-full flex flex-col bg-home-bg bg-cover bg-no-repeat bg-center">


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
    slides: [                
        {
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
            ctaUrl: '/last-act',
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                            stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <!-- next button -->
                    <button type="button"
                        class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                            stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
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
    slides: [                
        {
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                            stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <!-- next button -->
                    <button type="button"
                        class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                            stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
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
            <h1 class="text-3xl text-center font-semibold mb-5" style="color: rgb(12 40 62);">Dicoding promotion</h1>
                <div x-data="{            
    slides: [                
        {
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                            stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <!-- next button -->
                    <button type="button"
                        class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 dark:bg-slate-900/40 dark:text-slate-300 dark:hover:bg-slate-900/60 dark:focus-visible:outline-blue-600"
                        aria-label="next slide" x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                            stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
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
        </div>
    </div>
</x-layout>