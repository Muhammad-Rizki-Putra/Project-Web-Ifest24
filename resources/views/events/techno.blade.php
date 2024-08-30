<x-layout>
    <x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div x-data="{ selected: 'rh-tp1' }">
        <div
            class="hidden md:flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20 gap-y-10">
            <h1 class="text-6xl font-bold" style="color: rgb(12 40 62);">TECHNOPRENEUR</h1>
            <img src="image/logo 3.png" alt="" class="h-auto w-[12%]">
            <p class="text-5xl text-center font-bold" style="color: rgb(115 4 53);">Future Founders:<br>Embracing The
                Rise of Tech-Based Business</p>
            <div x-data="{ openA: true, openB: false }" class="flex flex-col items-center justify-center">
                <div class="flex flex-row items-center justify-center pb-20 gap-x-40">

                    <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-tp" value="rh-tp1" id="rh-tp-1"
                        x-model="selected">Seminar</x-radio-button>

                    <x-radio-button textSize="text-2xl" textPadding="p-1" name="rh-tp" value="rh-tp2" id="rh-tp-2"
                        x-model="selected">Workshop</x-radio-button>

                </div>
                <p class="w-3/5 text-center text-2xl" style="color: rgb(12 40 62);">Designed to turn tech skills into
                    successful businesses, Technopreneur is where technology meets entrepreneurship. Through engaging
                    seminars and hands-on workshops, knowledge and tools are provided by professional mentors, helping
                    you leverage digital technology to bring your business ideas to life.</p>
                <div class="flex flex-col items-center justify-center">
                    <div x-show="selected === 'rh-tp1'" x-transition class="flex flex-col items-center justify-center">
                        <p class="text-6xl font-bold pt-20 pb-10" style="color: rgb(12 40 62);">SEMINAR</p>
                        <p class="w-3/5 text-center text-2xl font-semibold" style="color: rgb(12 40 62);">The
                            material
                            and talk show presented by professional speakers who are experts in technology-based
                            business to develop the interest and talent for entrepreneurship within the community in the
                            field of IT.</p>
                        <ul class="list-disc" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-lg">Key of
                                Building a Business</li>
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-lg">Driving
                                Innovation and Success in Business with Technology</li>
                            <!-- ... -->
                        </ul>
                        <ul class="list-disc pb-10" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-lg">Empowering
                                Business Growth through Data Science</li>
                        </ul>
                        <p class="text-3xl font-bold mb-5">The Speakers</p>
                        <div class="grid grid-cols-3 grid-rows-1 gap-x-10 pb-20">
                            <div class="w-[252px] h-[320px] bg-speaker bg-cover bg-center bg-no-repeat p-[5px]">
                                <img src="/image/speaker_Sutansyah Marahakim.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-center">
                                    <h1 class="text-white font-semibold text-lg">Sutansyah Marahakim</h1>
                                    <h2 class="text-white text-base leading-tight text-center">Creative Director &
                                        Partner Kolaborasico</h2>
                                </div>
                            </div>
                            <div class="w-[252px] h-[320px] bg-speaker bg-cover bg-center bg-no-repeat p-[5px]">
                                <img src="/image/speaker_Sudar Yatno.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-center">
                                    <h1 class="text-white font-semibold text-lg">Sudar Yatno</h1>
                                    <h2 class="text-white text-base leading-tight text-center">Chief Technology Officer
                                        (CTO) Gits.id</h2>
                                </div>
                            </div>
                            <div class="w-[252px] h-[320px] bg-speaker bg-cover bg-center bg-no-repeat p-[5px]">
                                <img src="/image/speaker_Angel Metanosa Afinda.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-center">
                                    <h1 class="text-white font-semibold text-lg">Angel Metanosa Afinda</h1>
                                    <h2 class="text-white text-base leading-tight text-center">Curriculum Developer
                                        Dicoding</h2>
                                </div>
                            </div>
                        </div>
                        <x-countdown></x-countdown>
                        <div style="background-image:url('image/Rectangle_74.png');"
                            class="bg-cover w-full p-3.5 text-white mt-20">
                            <p class="text-center text-6xl font-bold p-3.5">Free Ticket</p>
                            <p class="text-center text-5xl font-bold p-3.5">E-Certificate</p>
                        </div>
                    </div>
                    <div x-show="selected === 'rh-tp2'" x-transition class="flex flex-col items-center justify-center">
                        <p class="text-6xl font-bold pt-20 pb-10" style="color: rgb(12 40 62);">WORKSHOP</p>
                        <p class="w-3/5 text-center text-2xl font-semibold" style="color: rgb(12 40 62);">An
                            online
                            workshop that provides training and development facilities by professionals with the aim of
                            providing participants with an understanding of the use of technological advances to
                            transform businesses into innovative startups.</p>
                        <ul class="list-disc" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-lg">Design
                                Thinking</li>
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-lg">Business
                                Strategy Foundation</li>
                            <!-- ... -->
                        </ul>
                        <ul class="list-disc pb-10" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-lg">Brand
                                Identity & Market Launch Strategy</li>
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-lg">Funding and
                                Pitching</li>
                        </ul>
                        <p class="text-3xl font-bold mb-5">The Mentors</p>
                        <div class="grid grid-cols-4 grid-rows-1 gap-x-10 pb-20">
                            <div class="w-[252px] h-[320px] bg-speaker bg-cover bg-center bg-no-repeat p-[5px]">
                                <img src="/image/mentor_Gilang Ramadhan.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-center">
                                    <h1 class="text-white font-semibold text-lg">Gilang Ramadhan</h1>
                                    <h2 class="text-white text-base leading-tight text-center">Curriculum Developer &
                                        Contributor Coordinator Dicoding</h2>
                                </div>
                            </div>
                            <div class="w-[252px] h-[320px] bg-speaker bg-cover bg-center bg-no-repeat p-[5px]">
                                <img src="/image/mentor_Farih Muwaffaq.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-center">
                                    <h1 class="text-white font-semibold text-lg">Farih Muwaffaq</h1>
                                    <h2 class="text-white text-base leading-tight text-center">CEO SelasarKampus</h2>
                                </div>
                            </div>
                            <div class="w-[252px] h-[320px] bg-speaker bg-cover bg-center bg-no-repeat p-[5px]">
                                <img src="/image/mentor_Yahya Apristianto.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-center">
                                    <h1 class="text-white font-semibold text-lg">Yahya Apristianto</h1>
                                    <h2 class="text-white text-base leading-tight text-center">Head of Marketing
                                        Expansion Marketing</h2>
                                </div>
                            </div>
                            <div class="w-[252px] h-[320px] bg-speaker bg-cover bg-center bg-no-repeat p-[5px]">
                                <img src="/image/mentor_Alvin Trianto Atmojo.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-center">
                                    <h1 class="text-white font-semibold text-lg">Alvin Trianto Atmojo</h1>
                                    <h2 class="text-white text-base leading-tight text-center">QA Engineer Evermos &
                                        Investment Commite Invst.id</h2>
                                </div>
                            </div>
                        </div>
                        <x-countdown></x-countdown>
                        <p class="text-center text-3xl font-bold mt-10">Limited to Only 15 Selected Teams<br>100k/ team
                        </p>
                        <div style="background-image:url('image/Rectangle_74.png');"
                            class="bg-cover w-full p-3.5 text-white mt-20">
                            <!-- <p class="text-center text-3xl font-bold p-3.5">Reward for Workshop's 3 winner team</p> -->
                            <p class="text-center text-7xl font-bold p-3.5 leading-normal">Fresh Money Up To<br>IDR 4
                                Million+</p>
                            <!-- <p class="text-center text-4xl font-bold p-3.5">and</p> -->
                            <p class="text-center text-6xl font-bold p-3.5">Winner and Participate E-Certificate</p>
                            <p class="text-center text-5xl font-bold p-3.5">10 Course Tickets of Mekari University</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row items-center justify-center space-x-10 w-auto">
                <a href="https://linktr.ee/Technopreneur2024" target="_blank" rel="noopener noreferrer">
                    <x-button textSize="text-2xl" textPadding="p-1">Register & Guidebook</x-button>
                </a>
            </div>

            <div class="flex flex-row items-center justify-center w-auto rounded-md p-5 gap-y-5"
                style="background-color: rgb(244 230 230);">
                <div class="mx-4">
                    <p class="font-bold my-1">Luthfi Hamam Arsyada</p>
                    <p class="flex flex-row font-semibold my-1"><img src="/image/Phone_Event.png"
                            class="h-5 w-auto mr-2 mt-1">
                        081223682256</p>
                    <p class="flex flex-row font-semibold my-1"><img src="/image/Email_Event.png"
                            class="h-5 w-auto mr-2 mt-1">
                        lutfiarsd@gmail.com</p>
                    <p class="flex flex-row font-semibold my-1"><img src="/image/Line_Event.png"
                            class="h-5 w-auto mr-2 mt-1">
                        gaktaulupa10988</p>
                </div>
                <div class="mx-4">
                    <p class="font-bold my-1">M. Zahran Muntazar</p>
                    <p class="flex flex-row font-semibold my-1"><img src="/image/Phone_Event.png"
                            class="h-5 w-auto mr-2 mt-1">
                        085174338747</p>
                    <p class="flex flex-row font-semibold my-1"><img src="/image/Email_Event.png"
                            class="h-5 w-auto mr-2 mt-1">
                        zahranmuntazar17@gmail.com</p>
                    <p class="flex flex-row font-semibold my-1"><img src="/image/Line_Event.png"
                            class="h-5 w-auto mr-2 mt-1">
                        zahranmuntazar</p>
                </div>
            </div>
            <img src="/image/POSTER TECHNO.png" class="h-auto w-[60%]" alt="">
            <div class="flex flex-col items-center justify-center w-full gap-y-10">
                <p class="text-center text-6xl font-semibold">Frequently Asked Questions</p>
                <div x-data="{ open: false }" class="w-1/2">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apakah rangkaian acara Technopreneur 2024 gratis?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Kamu dapat mengikuti Seminar Technopreneur 2024 secara GRATIS dan untuk
                            workshop akan dikenakan biaya seharga 100 ribu per tim BAGI YANG LOLOS!
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="w-1/2">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Bagaimana teknis pembayarannya? Bagaimana jika tim saya tidak lolos seleksi
                            Workshop Technopreneur?</x-slot:slottitle>
                        <x-slot:slotdrop>Uang dibayarkan saat mengisi form registrasi. Uang akan dikembalikan 100%
                            kepada setiap tim yang dinyatakan tidak lolos setelah pengumuman seleksi.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="w-1/2">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Berapa orang yang diperbolehkan untuk mengikuti workshop?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Untuk pendaftaran awal workshop diperbolehkan untuk diikuti sebanyak banyaknya
                            tim, tiap timnya beranggotakan 3 orang. Setelah itu akan dilakukan seleksi ide bisnis dan
                            akan didapatkan 15 tim yang sudah lolos tahap seleksi awal.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="w-1/2">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apakah ada batasan umur dalam membuat tim workshop?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Syaratnya hanya minimal SMA dan mempunyai ide bisnis, anggotanya pun bisa dari
                            institusi atau sekolah yang berbeda
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="w-1/2">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Bagaimana cara mengatahui bahwa tim saya itu termasuk dalam 15 tim yang lolos
                            seleksi awal?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Apabila lolos seleksi dengan aspek-aspek yang diberikan di guidebook, maka akan
                            diumumkan melalui email ketua Tim dan media sosial Ifest 2024
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="w-1/2">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Bagaimana cara mendaftar Technopreneur 2024?

                        </x-slot:slottitle>
                        <x-slot:slotdrop>Calon peserta dapat mendaftar pada website ifest 2024 ([web ifest]) dan memilih
                            rangkaian acara Technopreneur

                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
            </div>
        </div>
        <div
            class="md:hidden flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">
            <h1 class="text-3xl font-bold" style="color: rgb(12 40 62);">TECHNOPRENEUR</h1>
            <img src="image/logo 3.png" alt="" class="h-auto w-[20%] mt-4">
            <p class="text-2xl text-center font-bold mt-4" style="color: rgb(115 4 53);">Future Founders:<br>Embracing
                The
                Rise of<br>Tech-Based Business</p>
            <div x-data="{ openA: true, openB: false }"
                class="flex flex-col items-center justify-center space-y-4 mt-4">
                <div class="flex flex-row items-center justify-center pb-4 gap-x-10">

                    <x-radio-button textSize="text-lg" textPadding="p-1" name="rh-tp" value="rh-tp1" id="rh-tp-1"
                        x-model="selected">Seminar</x-radio-button>

                    <x-radio-button textSize="text-lg" textPadding="p-1" name="rh-tp" value="rh-tp2" id="rh-tp-2"
                        x-model="selected">Workshop</x-radio-button>

                </div>
                <p class="w-4/5 text-center text-md text-balance font-semibold" style="color: rgb(12 40 62);">Designed
                    to turn tech
                    skills into successful businesses, Technopreneur is where technology meets entrepreneurship. Through
                    engaging seminars and hands-on workshops, knowledge and tools are provided by professional mentors,
                    helping you leverage digital technology to bring your business ideas to life.</p>
                <div class="flex flex-col items-center justify-center">
                    <div x-show="selected === 'rh-tp1'" x-transition class="flex flex-col items-center justify-center">
                        <p class="text-4xl font-bold pt-4 pb-2" style="color: rgb(12 40 62);">SEMINAR</p>
                        <p class="w-4/5 text-center text-md font-bold" style="color: rgb(12 40 62);">The
                            material and talk show presented by professional speakers who are experts in
                            technology-based business to develop the interest and talent for entrepreneurship within the
                            community in the field of IT.</p>
                        <ul class="list-disc" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-sm">Key of
                                Building a Business</li>
                            <!-- ... -->
                        </ul>
                        <ul class="list-disc" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-sm">Driving
                                Innovation and Success in Business with Technology</li>
                        </ul>
                        <ul class="list-disc pb-6" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-sm">Empowering
                                Business Growth through Data Science</li>
                        </ul>
                        <p class="text-xl font-bold mb-5">The Speakers</p>
                        <div class="grid grid-cols-center-2 grid-rows-2 gap-x-2 gap-y-2 pb-10">
                            <div class="w-[157px] h-[200px] bg-speaker bg-cover bg-center bg-no-repeat p-[3px]">
                                <img src="/image/speaker_Sutansyah Marahakim.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-start">
                                    <h1 class="text-white font-semibold text-sm">Sutansyah Marahakim</h1>
                                    <h2 class="text-white text-xs leading-tight text-center">Creative Director &
                                        Partner Kolaborasico</h2>
                                </div>
                            </div>
                            <div class="w-[157px] h-[200px] bg-speaker bg-cover bg-center bg-no-repeat p-[3px]">
                                <img src="/image/speaker_Sudar Yatno.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-start">
                                    <h1 class="text-white font-semibold text-sm">Sudar Yatno</h1>
                                    <h2 class="text-white text-xs leading-tight text-center">Chief Technology Officer
                                        (CTO) Gits.id</h2>
                                </div>
                            </div>
                            <div class="w-[157px] h-[200px] bg-speaker bg-cover bg-center bg-no-repeat p-[3px]">
                                <img src="/image/speaker_Angel Metanosa Afinda.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-start">
                                    <h1 class="text-white font-semibold text-sm">Angel Metanosa Afinda</h1>
                                    <h2 class="text-white text-xs leading-tight text-center">Curriculum Developer
                                        Dicoding</h2>
                                </div>
                            </div>
                        </div>
                        <x-countdown-mobver></x-countdown-mobver>
                        <div style="background-image:url('image/Rectangle_74.png');"
                            class="bg-cover w-full p-1.5 text-white mt-10">
                            <p class="text-center text-3xl font-bold p-1.5">Free Ticket</p>
                            <p class="text-center text-2xl font-bold p-1.5">E-Certificate</p>

                        </div>
                    </div>
                    <div x-show="selected === 'rh-tp2'" x-transition class="flex flex-col items-center justify-center">
                        <p class="text-4xl font-bold pt-4 pb-2" style="color: rgb(12 40 62);">WORKSHOP</p>
                        <p class="w-4/5 text-center text-md font-bold" style="color: rgb(12 40 62);">An online
                            workshop that provides training and development facilities by professionals with the aim of
                            providing participants with an understanding of the use of technological advances to
                            transform businesses into innovative startups.</p>
                        <ul class="list-disc" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-sm">Design
                                Thinking</li>
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-sm">Business
                                Strategy Foundation</li>
                            <!-- ... -->
                        </ul>
                        <ul class="list-disc" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-sm">Funding and
                                Pitching</li>
                        </ul>
                        <ul class="list-disc pb-6" style="width: auto; float: left;">
                            <li style="width: auto; float: left; color: rgb(12 40 62);" class="mx-4 text-sm">Brand
                                Identity & Market Launch Strategy</li>
                        </ul>
                        <p class="text-xl font-bold mb-5">The Mentors</p>
                        <div class="grid grid-cols-2 grid-rows-2 gap-x-2 gap-y-2 pb-10">
                            <div class="w-[157px] h-[200px] bg-speaker bg-cover bg-center bg-no-repeat p-[3px]">
                                <img src="/image/mentor_Gilang Ramadhan.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-start">
                                    <h1 class="text-white font-semibold text-sm">Gilang Ramadhan</h1>
                                    <h2 class="text-white text-[10px] leading-tight text-center">Curriculum Developer &
                                        Contributor Coordinator Dicoding</h2>
                                </div>
                            </div>
                            <div class="w-[157px] h-[200px] bg-speaker bg-cover bg-center bg-no-repeat p-[3px]">
                                <img src="/image/mentor_Farih Muwaffaq.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-start">
                                    <h1 class="text-white font-semibold text-sm">Farih Muwaffaq</h1>
                                    <h2 class="text-white text-xs leading-tight text-center">CEO SelasarKampus</h2>
                                </div>
                            </div>
                            <div class="w-[157px] h-[200px] bg-speaker bg-cover bg-center bg-no-repeat p-[3px]">
                                <img src="/image/mentor_Yahya Apristianto.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-start">
                                    <h1 class="text-white font-semibold text-sm">Yahya Apristianto</h1>
                                    <h2 class="text-white text-xs leading-tight text-center">Head of Marketing
                                        Expansion Marketing</h2>
                                </div>
                            </div>
                            <div class="w-[157px] h-[200px] bg-speaker bg-cover bg-center bg-no-repeat p-[3px]">
                                <img src="/image/mentor_Alvin Trianto Atmojo.png" alt="" class="h-[75%] w-full">
                                <div class="flex flex-col w-full bg-navy-bg h-[25%] flex items-center justify-start">
                                    <h1 class="text-white font-semibold text-sm">Alvin Trianto Atmojo</h1>
                                    <h2 class="text-white text-xs leading-tight text-center">QA Engineer Evermos &
                                        Investment Commite Invst.id</h2>
                                </div>
                            </div>
                        </div>
                        <x-countdown-mobver></x-countdown-mobver>
                        <p class="text-center text-lg font-bold mt-4">Limited to Only 15 Selected Teams<br>100k/ team
                        </p>
                        <div style="background-image:url('image/Rectangle_74.png');"
                            class="bg-cover w-full p-1.5 text-white mt-10">
                            <!-- <p class="text-center text-lg font-bold p-1.5">Reward for Workshop's 3 winner team</p> -->
                            <p class="text-center text-4xl font-bold p-1.5">Fresh Money Up To<br>IDR 4 Million+</p>
                            <!-- <p class="text-center text-xl font-bold p-1.5">and</p> -->
                            <p class="text-center text-3xl font-bold p-1.5">Winner and Participate<br>E-Certificate</p>
                            <p class="text-center text-2xl font-bold p-1.5">10 Course Tickets of<br>Mekari University
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row items-center justify-center space-x-10 w-auto mt-4 mb-4">
                <a href="https://linktr.ee/Technopreneur2024"><x-button textSize="text-lg" textPadding="p-1">
                        Register & Guidebook
                    </x-button></a>

            </div>
            <div class="flex flex-row items-center justify-center w-[95%] rounded-xl p-3"
                style="background-color: rgb(244 230 230);">
                <div class="mx-1">
                    <p class="text-sm font-bold">Luthfi Hamam Arsyada</p>
                    <p class="text-sm flex flex-row font-semibold"><img src="/image/Phone_Event.png"
                            class="size-3 mr-1 mt-1.5">
                        081223682256</p>
                    <p class="text-sm flex flex-row font-semibold"><img src="/image/Email_Event.png"
                            class="size-3 mr-1 mt-1.5">
                        lutfiarsd@gmail.com</p>
                    <p class="text-sm flex flex-row font-semibold"><img src="/image/Line_Event.png"
                            class="size-3 mr-1 mt-1.5">
                        gaktaulupa10988</p>
                </div>
                <div class="mx-1 self-end">
                    <p class="text-sm font-bold">M. Zahran Muntazar</p>
                    <p class="text-sm flex flex-row font-semibold"><img src="/image/Phone_Event.png"
                            class="size-3 mr-1 mt-1.5">
                        085174338747</p>
                    <p class="text-sm flex flex-row font-semibold"><img src="/image/Email_Event.png"
                            class="size-3 mr-1 mt-1.5">
                        zahranmuntazar17@gmail.com</p>
                    <p class="text-sm flex flex-row font-semibold"><img src="/image/Line_Event.png"
                            class="size-3 mr-1 mt-1.5">
                        zahranmuntazar</p>
                </div>
            </div>
            <img src="/image/POSTER TECHNO.png" class="h-auto w-[90%] mt-4" alt="">
            <div class="flex flex-col items-center justify-center w-full mt-4">
                <p class="text-center text-2xl font-semibold">Frequently Asked Questions</p>
                <div x-data="{ open: false }" class="my-3 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apakah rangkaian acara Technopreneur 2024 gratis?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Kamu dapat mengikuti Seminar Technopreneur 2024 secara GRATIS dan untuk
                            workshop akan dikenakan biaya seharga 100 ribu per tim BAGI YANG LOLOS!
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="my-3 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Bagaimana teknis pembayarannya? Bagaimana jika tim saya tidak lolos seleksi
                            Workshop Technopreneur?</x-slot:slottitle>
                        <x-slot:slotdrop>Uang dibayarkan saat mengisi form registrasi. Uang akan dikembalikan 100%
                            kepada setiap tim yang dinyatakan tidak lolos setelah pengumuman seleksi.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="my-3 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Berapa orang yang diperbolehkan untuk mengikuti workshop?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Untuk pendaftaran awal workshop diperbolehkan untuk diikuti sebanyak banyaknya
                            tim, tiap timnya beranggotakan 3 orang. Setelah itu akan dilakukan seleksi ide bisnis dan
                            akan didapatkan 15 tim yang sudah lolos tahap seleksi awal.
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="my-3 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Apakah ada batasan umur dalam membuat tim workshop?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Syaratnya hanya minimal SMA dan mempunyai ide bisnis, anggotanya pun bisa dari
                            institusi atau sekolah yang berbeda
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="my-3 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Bagaimana cara mengatahui bahwa tim saya itu termasuk dalam 15 tim yang lolos
                            seleksi awal?
                        </x-slot:slottitle>
                        <x-slot:slotdrop>Apabila lolos seleksi dengan aspek-aspek yang diberikan di guidebook, maka akan
                            diumumkan melalui email ketua Tim dan media sosial Ifest 2024
                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
                <div x-data="{ open: false }" class="my-3 w-4/5">
                    <x-fa-q-button-mobver>
                        <x-slot:slottitle>Bagaimana cara mendaftar Technopreneur 2024?

                        </x-slot:slottitle>
                        <x-slot:slotdrop>Calon peserta dapat mendaftar pada website ifest 2024 ([web ifest]) dan memilih
                            rangkaian acara Technopreneur

                        </x-slot:slotdrop>
                    </x-fa-q-button-mobver>
                </div>
            </div>
        </div>
    </div>
</x-layout>