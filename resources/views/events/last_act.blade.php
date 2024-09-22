<x-layout>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div x-data="{ selected: 'rh-la1' }">
        <div
            class="hidden md:flex items-center justify-center flex-col min-h-screen h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-10 gap-y-10 px-[25%]">

            <div class="flex items-center justify-center flex-col h-auto top-0 gap-10">
                <div>
                    <h1 class="text-6xl font-bold" style="color: rgb(12 40 62);">LAST ACT</h1>
                </div>

                <div>
                    <img src="/image/logo_ifest.png" class="h-auto w-[300px]" alt="">
                </div>



                <h1 class="text-3xl font-bold text-center text-wrap" style="color: rgb(115 4 53);">Get ready for a
                    spectacular finale at IFEST 2024 with the electrifying Last Act! 🎉</h1>
                <p class="text-xl text-center text-wrap">Experience the dazzling Company Expo, where leading companies
                    showcase groundbreaking innovations that will leave you in awe. Don’t miss the National Seminar,
                    where industry experts will present brilliant ideas sure to inspire you. Get valuable insights and
                    professional tips at our CV Clinic, designed to help you enhance your resume and stand out in the
                    job market.</p>
                <p class="text-xl text-center text-wrap">The climax awaits at the Awarding Night, where the spotlight
                    will shine on the prestigious winners and their remarkable achievements. Enjoy an array of Special
                    Performances that will captivate and entertain you. Participate in Fun Games and activities that
                    will add excitement to the event. Capture your memorable moments at the Photobooth, perfect for
                    snapping photos with friends.</p>
                <p class="text-xl text-center text-wrap">And that's not all—discover even more surprises and delights
                    throughout the event! Join us for an unforgettable experience filled with innovation, inspiration,
                    and celebration! 🌟</p>

                <div class="w-[300px] items-center justify-center">
                    <x-countdown>2024-10-05</x-countdown>
                </div>

                <div class="w-[600px] h-[120px] flex flex-col items-center justify-center">
                    <div class="w-full h-full flex flex-row items-center justify-evenly gap-5">
                        <div
                            class="flex h-full flex-row gap-1 items-center justify-center p-2 backdrop-blur-sm bg-white/30 rounded-md">
                            <img src="/image/calendar-symbol.svg" class="h-auto w-[50px]" alt="">
                            <p class="text-xl">5th October 2024</p>
                        </div>
                        <div
                            class="flex h-full flex-row gap-1 items-center justify-center p-2 backdrop-blur-sm bg-white/30 rounded-md">
                            <img src="/image/time1.svg" class="h-auto w-[50px]" alt="">
                            <p class="text-xl">08.30 - 16.00</p>
                        </div>
                        <div
                            class="flex h-full flex-row gap-1 items-center justify-center p-2 backdrop-blur-sm bg-white/30 rounded-md">
                            <img src="/image/location1.svg" class="h-auto w-[50px]" alt="">
                            <p class="text-xl">Graha Sanusi, UNPAD Dipatiukur</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row gap-20 pt-5">

                    <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-la" value="rh-la1" id="rh-la-1"
                        x-model="selected">Semnas</x-radio-button>

                    <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-la" value="rh-la2" id="rh-la-2"
                        x-model="selected">Company Expo</x-radio-button>

                    <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-la" value="rh-la3" id="rh-la-3"
                        x-model="selected">Awarding</x-radio-button>
                </div>
            </div>

            <!-- Semnas -->
            <div x-show="selected === 'rh-la1'"
                class="md:flex items-center justify-center flex-col h-auto py-10 gap-y-5"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div>
                    <h1 class="text-5xl font-semibold text-center text-wrap pb-[22px]">SEMINAR NASIONAL</h1>
                    <h1 class="text-2xl text-center text-wrap">Exploring Career Path In Technology: Navigating
                        Challenges and Opportunities</h1>
                </div>

                <div class="pb-10">
                    <p class="text-lg text-center">National seminar is an event that invites speakers who have insights
                        into
                        informatics careers. We aim to provide a platform for sharing information, experiences, and
                        ideas
                        for
                        those already involved in or interested in pursuing a career in the field of informatics.</p>
                </div>

                <div class="grid grid-cols-2 grid-rows-1 gap-x-10 pt-10">
                    <div
                        class="w-[257px] min-h-[350px] bg-gradient-to-r from-sky-950 to-pink-900 p-1 rounded-sm flex flex-col">
                        <img src="/image/Budi.jpg" alt="" class="h-[250px] w-full">
                        <div class="flex-grow flex flex-col w-full bg-white items-center justify-center gap-y-2 p-2">
                            <h1 class="text-black font-semibold text-md text-center">Ir. Budi Rahardjo MSc., PhD
                            </h1>
                            <h2 class="text-black text-xs3 leading-tight text-center">BOD Journal ICT Research and
                                Applications, ITB</h2>
                            <img src="/image/LogoITB.png" alt="" class="h-auto w-[45px]">
                        </div>
                    </div>

                    <div
                        class="w-[257px] min-h-[350px] bg-gradient-to-r from-sky-950 to-pink-900 p-1 rounded-sm flex flex-col">
                        <img src="/image/Faishal.jpeg.jpg" alt="" class="h-[250px] w-full">
                        <div class="flex-grow flex flex-col w-full bg-white items-center justify-center gap-y-2 p-2">
                            <div class="flex flex-row items-center justify-center">
                                <h1 class="text-black font-semibold text-sm text-center">Faishal Wahiduddin, S. Kom.,
                                    M.S
                                </h1>

                            </div>
                            <h2 class="text-black text-xs2 leading-tight text-center">Chief Technology Officer WOOL
                                ID</h2>
                            <img src="/image/LogoWoolID.png" class="h-auto w-[120px]" alt="">
                        </div>
                    </div>
                </div>



                <div class="flex items-center w-full flex-col gap-y-5 pt-10">
                    <p class="text-2xl text-center">Is pursuing a career in IT still worth it?</p>
                    <p class="text-lg text-center">With the end of the pandemic, the startup trend that had been growing
                        has
                        seen
                        a decline over the past two years. Additionally, issues like Artificial Intelligence potentially
                        replacing programmer jobs have emerged. So, as job opportunities in the IT field decrease, is
                        pursuing a
                        career in this field still worth it?</p>
                </div>

                <div>
                    @if (isset($isRegistered) && $isRegistered)
                        <p class="text-4xl text-center font-bold">Thank You for Participating</p>
                    @else
                        <button id="claimButtonDesktop" onclick="handleClick(event, 'claimButtonDesktop')">
                            <x-button textSize="text-4xl" textPadding="p-1">Claim Your Ticket!</x-button>
                        </button>

                    @endif
                </div>

                <div class="w-full flex justify-center items-center py-5 pb-3">
                    <a class="w-full max-w-md">
                        <div
                            class="bg-transparent rounded-xl p-3 w-full flex flex-row items-center justify-center gap-x-3 outline outline-2 outline-offset-2 outline-navy-bg opacity-50 cursor-not-allowed">
                            <img src="/image/Zoom2.png" alt="" class="w-16 h-auto">
                            <p class="text-center text-navy-bg text-xl font-medium">Click here to Join!</p>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col items-center justify-center pb-12">
                    <div class="flex flex-col items-center justify-start w-auto rounded-xl p-5 gap-y-5"
                        style="background-color: rgb(244 230 230);">
                        <div class="grid grid-cols-2 gap-4">
                            <p class="font-bold">Alif Al Husaini</p>
                            <p class="font-bold">Panji Iman Sujatmiko</p>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/Phone.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">081237449945</p>
                            </div>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/Phone.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">089647824647</p>
                            </div>
                            <div>

                            </div>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/lineapp.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">panjiimans</p>
                            </div>
                        </div>
                        <p class="font-semibold">Or</p>
                        <div>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/Email1.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">keilmuan.himatif@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="/image/PosterSemnasR.png" class="h-auto w-[90%] mt-8" alt="">
            </div>

            <!-- Company Expo -->
            <div x-show="selected === 'rh-la2'"
                class="hidden md:flex items-center justify-center flex-col h-auto py-20 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <!-- <div class="flex flex-row items-center gap-x-5">
                    <img src="/image/ComingSoon.png" alt="" class="h-auto w-[200px]">
                    <h1 class="text-5xl font-semibold text-center text-wrap pb-[22px] text-navy-bg">Coming Soon!
                    </h1>
                </div> -->
                <div class="gap-y-5">
                    <h1 class="text-5xl font-semibold text-center text-wrap pb-3">COMPANY EXPO</h1>
                    <p class="text-lg text-center">Company Expo :
                        The Company Expo is one of the key events at IFEST 2024, partnering with various IT companies to
                        provide a platform for showcasing their profiles, products, and career development opportunities
                        to the participants.
                        Tambahin gambar gambar expo gitu biar menarik.
                    </p>
                </div>
            </div>

            <!-- Awarding -->
            <div x-show="selected === 'rh-la3'"
                class="hidden md:flex items-center justify-center flex-col h-auto py-20 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div class="flex flex-row items-center gap-x-5">
                    <!-- <img src="/image/ComingSoon.png" alt="" class="h-auto w-[200px]">
                    <h1 class="text-5xl font-semibold text-center text-wrap pb-[22px] text-navy-bg">Coming Soon!
                    </h1> -->
                    <div class="gap-y-5">
                        <h1 class="text-5xl font-semibold text-center text-wrap pb-3">AWARDING NIGHT</h1>
                        <p class="text-lg text-center">Awarding Night is the closing event of IFEST 2024. It will serve
                            as an award ceremony attended by all finalists of IT Competition, Technopreneur, as well as
                            partners who participated in IFEST 2024.
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <h1 class="text-6xl text-center font-semibold py-10">Frequently Asked Questions</h1>
            </div>

            <div class="flex flex-col items-center justify-center w-full">
                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Kapan dan dimana acara Last Act IFEST 2024 akan
                            diadakan?</x-slot:slottitle>
                        <x-slot:slotdrop>Acara Last Act IFEST 2024 akan diadakan secara offline pada tanggal 5
                            Oktober 2024 di Graha Sanusi, Universitas Padjadjaran, Kampus Dipati Ukur.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apa saja rangkaian acara yang ada di Last Act IFEST 2024?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Rangkaian acara Last Act IFEST 2024 mencakup Seminar Nasional dengan
                            pembicara yang memiliki wawasan terkait karir di informatika, Company Expo yang diikuti
                            oleh berbagai perusahaan di sektor informatika, serta Awarding Night yang merupakan
                            acara penutup IFEST 2024. Awarding Night akan memberikan penghargaan kepada semua
                            finalis Kompetisi IT dan Technopreneur, serta mitra yang berpartisipasi dalam IFEST
                            2024.</x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-3 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apakah acara ini terbuka untuk umum?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Ya, Last Act IFEST 2024 terbuka untuk umum. Namun, peserta diharapkan
                            melakukan pendaftaran sebelumnya karena kapasitas tempat yang terbatas.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Bagaimana cara mendaftar untuk mengikuti acara ini?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Untuk mendaftar, peserta dapat mengisi formulir pendaftaran Last Act
                            yang
                            tersedia di web IFest 2024.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apakah ada biaya untuk mengikuti acara Last Act IFEST 2024?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Untuk acara ini terdapat dua gelombang pendaftaran. Gelombang pertama
                            adalah pendaftaran gratis, sementara gelombang berikutnya memerlukan biaya
                            pendaftaran. Pastikan untuk mendaftar pada gelombang pertama untuk mendapatkan tiket
                            gratis.

                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apa saja rangkaian acara yang ada di Last Act IFEST 2024?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Rangkaian acara Last Act IFEST 2024 mencakup Seminar Nasional dengan
                            pembicara yang memiliki wawasan terkait karir di informatika, Company Expo yang
                            diikuti
                            oleh berbagai perusahaan di sektor informatika, serta Awarding Night yang merupakan
                            acara penutup IFEST 2024. Awarding Night akan memberikan penghargaan kepada semua
                            finalis Kompetisi IT dan Technopreneur, serta mitra yang berpartisipasi dalam IFEST
                            2024.</x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-3 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apa saja yang ditampilkan di company expo?

                        </x-slot:slottitle>
                        <x-slot:slotdrop>Company Expo akan menampilkan booth dari berbagai perusahaan di sektor
                            informatika. Peserta dapat memperoleh informasi mengenai program magang yang
                            ditawarkan perusahaan-perusahaan tersebut, melihat proyek VR karya mahasiswa TI
                            Unpad, serta menggunakan layanan CV review dan simulasi wawancara kerja.

                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apakah ada persyaratan khusus untuk menghadiri acara ini?

                        </x-slot:slottitle>
                        <x-slot:slotdrop>Persyaratan khusus hanya meliputi pendaftaran melalui formulir
                            pendaftaran Seminar Nasional.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Siapa yang dapat dihubungi untuk informasi lebih lanjut?

                        </x-slot:slottitle>
                        <x-slot:slotdrop>Untuk informasi lebih lanjut, silakan hubungi melalui direct message di
                            Instagram @ifestunpad.

                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
            </div>
        </div>

        <!-- Mobver -->
        <div
            class="md:hidden flex items-center justify-center gap-y-10 flex-col h-auto bg-itcomp-bg min-h-screen bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20 px-5">
            <div>
                <h1 class="text-5xl font-bold" style="color: rgb(12 40 62);">LAST ACT</h1>
            </div>

            <div class="flex justify-center w-full">
                <img src="/image/logo_ifest.png" alt="" class="h-auto w-[40%] mt-4">
            </div>



            <div
                class=" mt-10 backdrop-blur-md bg-white/30 flex flex-col gap-y-5 items-center justify-center p-8 rounded-sm">

                <h1 class="text-xl font-bold text-center text-wrap " style="color: rgb(115 4 53);">Get ready for a
                    spectacular finale at IFEST 2024 with the electrifying Last Act! 🎉</h1>
                <p class="text-md text-center text-wrap">Experience the dazzling Company Expo, where leading companies
                    showcase groundbreaking innovations that will leave you in awe. Don’t miss the National Seminar,
                    where industry experts will present brilliant ideas sure to inspire you. Get valuable insights and
                    professional tips at our CV Clinic, designed to help you enhance your resume and stand out in the
                    job market.</p>

                <p class="text-md text-center text-wrap">The climax awaits at the Awarding Night, where the spotlight
                    will shine on the prestigious winners and their remarkable achievements. Enjoy an array of Special
                    Performances that will captivate and entertain you. Participate in Fun Games and activities that
                    will add excitement to the event. Capture your memorable moments at the Photobooth, perfect for
                    snapping photos with friends.</p>

                <p class="text-md text-center text-wrap">And that's not all—discover even more surprises and delights
                    throughout the event! Join us for an unforgettable experience filled with innovation, inspiration,
                    and celebration! 🌟</p>
            </div>

            <div class="w-4/5">
                <x-countdown-mobver>2024-10-05</x-countdown-mobver>
            </div>

            <div
                class="w-full h-auto flex flex-row items-center justify-center gap-x-3 backdrop-blur-md bg-white/30 rounded-md p-3">
                <div class="grid grid-cols-1 gap-4">
                    <img src="/image/calendar-symbol.svg" class="h-auto w-[40px] justify-self-start" alt="">


                    <img src="/image/time1.svg" class="h-auto w-[40px] justify-self-start" alt="">


                    <img src="/image/location1.svg" class="h-auto w-[40px] justify-self-start" alt="">

                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="h-[40px] w-auto flex items-center">
                        <p class="text-md">5th October 2024</p>
                    </div>
                    <div class="h-[40px] w-auto flex items-center">
                        <p class="text-md">08.30 - 16.00</p>
                    </div>
                    <div class="h-[40px] w-auto flex items-center">
                        <p class="text-md">Graha Sanusi, UNPAD Dipatiukur</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center w-full">
                <div class="flex flex-row gap-x-10 gap-y-3 flex-wrap overflow-x-auto max-w-[75%] mt-4 justify-center">

                    <x-radio-button textSize="text-lg" textPadding="p-1" name="rh-la" value="rh-la1" id="rh-la-1"
                        x-model="selected">Semnas</x-radio-button>

                    <x-radio-button textSize="text-lg" textPadding="p-1" name="rh-la" value="rh-la3" id="rh-la-3"
                        x-model="selected">Awarding</x-radio-button>

                    <x-radio-button textSize="text-lg" textPadding="p-1" name="rh-la" value="rh-la2" id="rh-la-2"
                        x-model="selected">Company Expo</x-radio-button>
                </div>
            </div>



            <!-- Semnas -->
            <div x-show="selected === 'rh-la1'"
                class="md:flex items-center justify-center flex-col h-auto py-10 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-4xl font-semibold text-center text-wrap pb-4" style="color: rgb(12 40 62);">
                        SEMINAR
                        NASIONAL</h1>
                    <h1 class="text-lg text-center text-wrap pb-4 w-4/5 font-semibold" style="color: rgb(12 40 62);">
                        Exploring Career Path In Technology: Navigating
                        Challenges and Opportunities</h1>
                </div>

                <div class="flex flex-col items-center justify-center">
                    <p class="text-md text-center w-4/5 font-semibold" style="color: rgb(12 40 62);">National
                        seminar
                        is
                        an event that invites speakers who have insights
                        into
                        informatics careers. We aim to provide a platform for sharing information, experiences, and
                        ideas
                        for
                        those already involved in or interested in pursuing a career in the field of informatics.
                    </p>
                </div>

                <div class="flex flex-col items-center justify-center py-8">

                </div>

                <div class="flex flex-col items-center justify-center">
                    <div class="grid grid-cols-2 grid-rows-1 gap-x-2 gap-y-2 pb-10">

                        <div
                            class="w-[157px] min-h-[250px] bg-gradient-to-r from-sky-950 to-pink-900 p-1 rounded-sm flex flex-col">
                            <img src="/image/Budi.jpg" alt="" class="h-[150px] w-full">
                            <div class="flex-grow flex flex-col w-full bg-white items-center justify-center gap-y-1">
                                <h1 class="text-black font-semibold text-xs2 text-center">Ir. Budi Rahardjo MSc., PhD
                                </h1>
                                <h2 class="text-black text-xs3 leading-tight text-center">BOD Journal ICT Research
                                    and
                                    Applications, ITB</h2>
                                <img src="/image/LogoITB.png" alt="" class="h-auto w-[35px]">
                            </div>
                        </div>

                        <div
                            class="w-[157px] min-h-[250px] bg-gradient-to-r from-sky-950 to-pink-900 p-1 rounded-sm flex flex-col">
                            <img src="/image/Faishal.jpeg.jpg" alt="" class="h-[150px] w-full">
                            <div class="flex-grow flex flex-col w-full bg-white items-center justify-center gap-y-1">
                                <h1 class="text-black font-semibold text-xs3 text-center">Faishal Wahiduddin, S.
                                    Kom.,
                                    M.S</h1>
                                <h2 class="text-black text-xs3 leading-tight text-center">Chief Technology Officer
                                    WOOL
                                    ID</h2>
                                <img src="/image/LogoWoolID.png" class="h-auto w-[90px]" alt="">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex items-center w-full flex-col gap-y-2 py-4">
                    <p class="text-xl text-center text-wrap pb-2 w-5/6 font-semibold" style="color: rgb(12 40 62);">
                        Is
                        pursuing a career in IT still worth it?</p>
                    <p class="text-md text-center text-wrap pb-2 w-4/5 font-semibold" style="color: rgb(12 40 62);">
                        With
                        the end of the pandemic, the startup trend that had been growing
                        has
                        seen
                        a decline over the past two years. Additionally, issues like Artificial Intelligence
                        potentially
                        replacing programmer jobs have emerged. So, as job opportunities in the IT field decrease,
                        is
                        pursuing a
                        career in this field still worth it?</p>
                </div>

                <div class="flex flex-col items-center justify-center w-full px-8 pb-12">
                    <div>
                        @if (isset($isRegistered) && $isRegistered)
                            <p class="text-4xl text-center font-bold">Thank You for Participating</p>
                        @else
                            <button id="claimButtonMobile" onclick="handleClick(event, 'claimButtonMobile')">
                                <x-button textSize="text-2xl" textPadding="p-1">Claim Your Ticket!</x-button>
                            </button>

                        @endif
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center w-full px-8 pb-12">
                    <a class="w-full max-w-md">
                        <div
                            class="bg-transparent rounded-xl p-3 w-full flex flex-row items-center justify-center gap-x-3 outline outline-2 outline-offset-2 outline-navy-bg opacity-50 cursor-not-allowed">
                            <img src="/image/Zoom2.png" alt="" class="w-16 h-auto">
                            <p class="text-center text-navy-bg text-xl font-medium">Click here to Join!</p>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col items-center justify-center pb-12">
                    <div class="flex flex-col items-center justify-start w-[85%] rounded-xl p-5 gap-y-5"
                        style="background-color: rgb(244 230 230);">
                        <div class="grid grid-cols-2 gap-4">
                            <p class="font-bold">Alif Al Husaini</p>
                            <p class="font-bold">Panji Iman Sujatmiko</p>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/Phone.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">081237449945</p>
                            </div>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/Phone.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">089647824647</p>
                            </div>
                            <div>

                            </div>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/lineapp.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">panjiimans</p>
                            </div>
                        </div>
                        <p class="font-semibold">Or</p>
                        <div>
                            <div class="flex flex-row items-center gap-x-2">
                                <img src="/image/Email1.png" alt="" class="h-5 w-auto">
                                <p class="font-semibold">keilmuan.himatif@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <img src="/image/PosterSemnasR.png" class="h-auto w-[90%] mt-8" alt="">
                </div>
            </div>
            <!-- Company Expo -->
            <div x-show="selected === 'rh-la2'"
                class="md:flex items-center justify-center flex-col h-auto py-10 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <!-- <div class="flex items-center justify-center flex-col h-auto">
                    <img src="/image/ComingSoon.png" alt="" class="w-auto h-[200px]">
                    <h1 class="text-2xl font-semibold">Coming Soon!</h1>
                </div> -->
                <div class="flex flex-col items-center justify-center gap-y-3">
                    <h1 class="text-4xl font-semibold text-center text-wrap pb-4" style="color: rgb(12 40 62);">
                        COMPANY EXPO</h1>
                    <p class="text-md text-center w-4/5 font-semibold" style="color: rgb(12 40 62);">National
                        Company Expo :
                        The Company Expo is one of the key events at IFEST 2024, partnering with various IT companies to
                        provide a platform for showcasing their profiles, products, and career development opportunities
                        to the participants.
                        Tambahin gambar gambar expo gitu biar menarik.
                    </p>
                </div>
            </div>

            <!-- Awarding -->
            <div x-show="selected === 'rh-la3'"
                class="md:flex items-center justify-center flex-col h-auto py-10 gap-y-20"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <!-- <div class="flex items-center justify-center flex-col h-auto">
                    <img src="/image/ComingSoon.png" alt="" class="w-auto h-[200px]">
                    <h1 class="text-2xl font-semibold">Coming Soon!</h1>
                </div> -->
                <div class="flex flex-col items-center justify-center gap-y-3">
                    <h1 class="text-4xl font-semibold text-center text-wrap pb-4" style="color: rgb(12 40 62);">
                        AWARDING NIGHT</h1>
                    <p class="text-md text-center w-4/5 font-semibold" style="color: rgb(12 40 62);">National
                        Awarding Night is the closing event of IFEST 2024. It will serve as an award ceremony attended
                        by all finalists of IT Competition, Technopreneur, as well as partners who participated in IFEST
                        2024.
                    </p>
                </div>
            </div>

            <div>
                <h1 class="text-center text-2xl font-semibold pb-4">Frequently Asked Questions</h1>
            </div>

            <div class="flex flex-col items-center justify-center w-full">
                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Kapan dan dimana acara Last Act IFEST 2024 akan
                            diadakan?</x-slot:slottitle>
                        <x-slot:slotdrop>Acara Last Act IFEST 2024 akan diadakan secara offline pada tanggal 5
                            Oktober 2024 di Graha Sanusi, Universitas Padjadjaran, Kampus Dipati Ukur.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apa saja rangkaian acara yang ada di Last Act IFEST 2024?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Rangkaian acara Last Act IFEST 2024 mencakup Seminar Nasional dengan
                            pembicara yang memiliki wawasan terkait karir di informatika, Company Expo yang diikuti
                            oleh berbagai perusahaan di sektor informatika, serta Awarding Night yang merupakan
                            acara penutup IFEST 2024. Awarding Night akan memberikan penghargaan kepada semua
                            finalis Kompetisi IT dan Technopreneur, serta mitra yang berpartisipasi dalam IFEST
                            2024.</x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-3 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apakah acara ini terbuka untuk umum?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Ya, Last Act IFEST 2024 terbuka untuk umum. Namun, peserta diharapkan
                            melakukan pendaftaran sebelumnya karena kapasitas tempat yang terbatas.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div x-data="{ open: false }" class="mb-6 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Bagaimana cara mendaftar untuk mengikuti acara ini?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Untuk mendaftar, peserta dapat mengisi formulir pendaftaran Last Act
                            yang
                            tersedia di web IFest 2024.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>

                <div class="flex flex-col items-center justify-center w-full">
                    <div x-data="{ open: false }" class="mb-6 w-4/5">
                        <x-fa-q-button-mobver>
                            <x-slot:slottitle>Apakah ada biaya untuk mengikuti acara Last Act IFEST 2024?
                            </x-slot:slottitle>
                            <x-slot:slotdrop>Untuk acara ini terdapat dua gelombang pendaftaran. Gelombang
                                pertama
                                adalah pendaftaran gratis, sementara gelombang berikutnya memerlukan biaya
                                pendaftaran. Pastikan untuk mendaftar pada gelombang pertama untuk mendapatkan tiket
                                gratis.

                            </x-slot:slotdrop>
                        </x-fa-q-button-mobver>
                    </div>

                    <div x-data="{ open: false }" class="mb-6 w-4/5">
                        <x-fa-q-button-mobver>
                            <x-slot:slottitle>Apa saja rangkaian acara yang ada di Last Act IFEST 2024?
                            </x-slot:slottitle>
                            <x-slot:slotdrop>Rangkaian acara Last Act IFEST 2024 mencakup Seminar Nasional
                                dengan
                                pembicara yang memiliki wawasan terkait karir di informatika, Company Expo yang
                                diikuti
                                oleh berbagai perusahaan di sektor informatika, serta Awarding Night yang merupakan
                                acara penutup IFEST 2024. Awarding Night akan memberikan penghargaan kepada semua
                                finalis Kompetisi IT dan Technopreneur, serta mitra yang berpartisipasi dalam IFEST
                                2024.</x-slot:slotdrop>
                        </x-fa-q-button-mobver>
                    </div>

                    <div x-data="{ open: false }" class="mb-3 w-4/5">
                        <x-fa-q-button-mobver>
                            <x-slot:slottitle>Apa saja yang ditampilkan di company expo?

                            </x-slot:slottitle>
                            <x-slot:slotdrop>Company Expo akan menampilkan booth dari berbagai perusahaan di
                                sektor
                                informatika. Peserta dapat memperoleh informasi mengenai program magang yang
                                ditawarkan perusahaan-perusahaan tersebut, melihat proyek VR karya mahasiswa TI
                                Unpad, serta menggunakan layanan CV review dan simulasi wawancara kerja.

                            </x-slot:slotdrop>
                        </x-fa-q-button-mobver>
                    </div>

                    <div x-data="{ open: false }" class="mb-6 w-4/5">
                        <x-fa-q-button-mobver>
                            <x-slot:slottitle>Apakah ada persyaratan khusus untuk menghadiri acara ini?

                            </x-slot:slottitle>
                            <x-slot:slotdrop>Persyaratan khusus hanya meliputi pendaftaran melalui formulir
                                pendaftaran Seminar Nasional.
                            </x-slot:slotdrop>
                        </x-fa-q-button-mobver>
                    </div>

                    <div x-data="{ open: false }" class="mb-6 w-4/5">
                        <x-fa-q-button-mobver>
                            <x-slot:slottitle>Siapa yang dapat dihubungi untuk informasi lebih lanjut?

                            </x-slot:slottitle>
                            <x-slot:slotdrop>Untuk informasi lebih lanjut, silakan hubungi melalui direct
                                message di
                                Instagram @ifestunpad.

                            </x-slot:slotdrop>
                        </x-fa-q-button-mobver>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="confirmationPopup"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.7); z-index: 1000;">
        <div
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; padding: 30px; border-radius: 15px; width: 350px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); text-align: center;">
            <h2 id="popupTitle" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 15px;">Confirm Your Action
            </h2>
            <p id="popupMessage" style="margin-bottom: 20px; font-size: 1rem; color: #555;">We will send your ticket
                confirmation through email. Please make sure your profile name is correct.</p>
            <div id="popupButtons" style="display: flex; justify-content: space-around;">
                <button onclick="cancelPopup()"
                    style="background-color: #f44336; color: white; border: none; padding: 10px 20px; font-size: 1rem; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">Cancel</button>
                <button id="submitButton" onclick=""
                    style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; font-size: 1rem; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">Submit</button>
            </div>
        </div>
    </div>
</x-layout>

<script>
    function handleClick(event, claimButton) {
        var isLoggedIn = {!! json_encode($isLoggedIn) !!};
        var isVerified = {!! json_encode($isVerified) !!};
        event.preventDefault();

        const popupTitle = document.getElementById('popupTitle');
        const popupMessage = document.getElementById('popupMessage');
        const submitButton = document.getElementById('submitButton');

        // belum login
        if (!isLoggedIn) {
            popupTitle.textContent = 'Login Required';
            popupMessage.textContent = 'Please login first to claim your ticket.';
            submitButton.textContent = 'Login';
            submitButton.onclick = () => window.location.href = '/login';
        }
        // belum verifikasi email
        else if (!isVerified) {
            popupTitle.textContent = 'Email Verification Required';
            popupMessage.textContent = 'Please verify your email to continue.';
            submitButton.textContent = 'Verify';
            submitButton.onclick = () => window.location.href = '/profile-edit';
        } else {
            popupTitle.textContent = 'Confirm Your Action';
            popupMessage.textContent =
                'We will send your ticket confirmation through email. Please make sure your profile name is correct.';
            submitButton.textContent = 'Submit';
            submitButton.onclick = () => submitPopup(claimButton);
        }

        document.getElementById('confirmationPopup').style.display = 'block';
    }

    function cancelPopup() {
        document.getElementById('confirmationPopup').style.display = 'none';
    }

    function submitPopup(claimButton) {
        const button = document.getElementById(claimButton);
        button.disabled = true;
        button.textContent = 'Loading...';
        document.getElementById('confirmationPopup').style.display = 'none';
        window.location.href = '/claim-ticket';
    }
</script>