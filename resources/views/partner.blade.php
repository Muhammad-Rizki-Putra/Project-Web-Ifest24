<x-layout>
    <x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="hidden md:flex w-full flex-col bg-home-bg bg-cover bg-no-repeat bg-center bg-fixed bg-right-bottom items-center">
        <h1 class="text-6xl font-bold text-sky-950 pt-24">Why Partner With Us?</h1>
        <div class="text-3xl font-bold text-sky-950 text-center pt-24">
            <h1>By becoming a partner,</h1>
            <h1>your company stands to gain numerous advantages</h1>
        </div>

        <div class="flex flex-row flex-wrap gap-12 pt-8 w-1/2 place-content-center">
            <div class="relative flex justify-center h-80 w-48 pt-4 rounded-xl text-center text-white">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-8 gap-12">
                    <img src="/image/pardner/exposure.png" alt="Icon" class="size-24">
                    <h1 class="relative text-2xl font-semibold">Exposure to Tech Enthusiasts</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-80 w-48 pt-4 rounded-xl text-center text-white">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-8 gap-12">
                    <img src="/image/pardner/network.png" alt="Icon" class="size-24">
                    <h1 class="relative text-2xl font-semibold">Networking Opportunities</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-80 w-48 pt-4 rounded-xl text-center text-white">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-8 gap-12">
                    <img src="/image/pardner/media.png" alt="Icon" class="size-24">
                    <h1 class="relative text-2xl font-semibold">Media Coverage</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-80 w-48 pt-4 rounded-xl text-center text-white">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-8 gap-12">
                    <img src="/image/pardner/innovation.png" alt="Icon" class="size-24">
                    <h1 class="relative text-2xl font-semibold">Innovation Recognition</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-80 w-48 pt-4 rounded-xl text-center text-white">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-8 gap-12">
                    <img src="/image/pardner/target.png" alt="Icon" class="size-24">
                    <h1 class="relative text-2xl font-semibold">Target Marketing</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-80 w-48 pt-4 rounded-xl text-center text-white">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-8 gap-12">
                    <img src="/image/pardner/community.png" alt="Icon" class="size-24">
                    <h1 class="relative text-2xl font-semibold">Community Engagement</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-80 w-48 pt-4 rounded-xl text-center text-white">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-8 gap-12">
                    <img src="/image/pardner/collab.png" alt="Icon" class="size-24">
                    <h1 class="relative text-2xl font-semibold">Collaboration Opportunities</h1>
                </div>
            </div>
        </div>

        <!-- check1 -->
        <form id='submit-form' action="/partner-with-us" method="POST" class="mt-32 mb-24 py-10 px-12 w-1/2 flex flex-col items-center bg-gradient-to-br from-sky-950 to-pink-900 rounded-3xl">
            @csrf

            <h2 class="text-4xl font-bold text-center mb-8 text-white">Interested? Don't hesitate! Fill the form, and get the benefit!</h2>

            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2" for="name">Name</label>
                <input class="w-full px-4 py-2 border rounded-lg text-gray-700 @error('name') border-red-500 @enderror" id="name" name="name" type="text" placeholder="Enter Your Name Here" value="{{ old('name') }}" required>
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2" for="email">Email</label>
                <input class="w-full px-4 py-2 border rounded-lg text-gray-700 @error('email') border-red-500 @enderror" id="email" name="email" type="email" placeholder="Enter Your Email Here" value="{{ old('email') }}" required>
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2" for="company">Company</label>
                <input class="w-full px-4 py-2 border rounded-lg text-gray-700 @error('company') border-red-500 @enderror" id="company" name="company" type="text" placeholder="Enter Your Company Here" value="{{ old('company') }}" required>
                @error('company')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2" for="job-title">Job Title</label>
                <input class="w-full px-4 py-2 border rounded-lg text-gray-700 @error('job_title') border-red-500 @enderror" id="job-title" name="job_title" type="text" placeholder="Enter Your Job Title Here" value="{{ old('job_title') }}" required>
                @error('job_title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2">Partnership Goal</label>
                <div class="flex gap-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="hidden peer" name="goal[]" value="sponsor" @if(is_array(old('goal')) && in_array('sponsor', old('goal'))) checked @endif />
                        <div class="w-5 h-5 rounded-md border-2 border-white peer-checked:bg-white flex items-center justify-center"></div>
                        <span class="ml-2 text-white">Sponsor</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" class="hidden peer" name="goal[]" value="media-partner" @if(is_array(old('goal')) && in_array('media-partner', old('goal'))) checked @endif />
                        <div class="w-5 h-5 rounded-md border-2 border-white peer-checked:bg-white flex items-center justify-center"></div>
                        <span class="ml-2 text-white">Media Partner</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" class="hidden peer" name="goal[]" value="others" @if(is_array(old('goal')) && in_array('others', old('goal'))) checked @endif />
                        <div class="w-5 h-5 rounded-md border-2 border-white peer-checked:bg-white flex items-center justify-center"></div>
                        <span class="ml-2 text-white">Others</span>
                    </label>
                </div>
                @error('goal')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-8 w-full">
                <label class="block text-white font-bold mb-2" for="description">Description</label>
                <textarea class="w-full px-4 py-2 border rounded-lg text-gray-700 @error('description') border-red-500 @enderror" id="description" name="description" rows="4" placeholder="Enter Your Description Here">{{ old('description') }}</textarea>
                @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif

            <div class="flex justify-center">
                <button class="bg-sky-900 text-white font-bold py-2 px-10 rounded-full hover:bg-sky-950" type="submit">Send</button>
            </div>
        </form>

        <!-- mobver -->
    </div>
    <div class="md:hidden flex w-full flex-col bg-home-bg bg-cover bg-no-repeat bg-center bg-fixed bg-right-bottom items-center">
        <h1 class="text-3xl font-bold text-sky-950 pt-20">Why Partner With Us?</h1>
        <div class="text-lg font-bold text-sky-950 text-center pt-6">
            <h1>By becoming a partner,</h1>
            <h1>your company stands to gain numerous advantages</h1>
        </div>

        <div class="flex flex-row flex-wrap gap-6 pt-4 w-4/5 place-content-center">
            <div class="relative flex justify-center h-40 w-24 pt-2 rounded-xl text-center text-white items-center">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-2 gap-3">
                    <img src="/image/pardner/exposure.png" alt="Icon" class="size-16">
                    <h1 class="relative text-[13px] font-semibold leading-relaxed ">Exposure to Tech Enthusiasts</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-40 w-24 pt-2 rounded-xl text-center text-white items-center">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-2 gap-3">
                    <img src="/image/pardner/network.png" alt="Icon" class="size-16">
                    <h1 class="relative text-[13px] font-semibold leading-relaxed ">Networking Opportunities</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-40 w-24 pt-2 rounded-xl text-center text-white items-center">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-2 gap-3">
                    <img src="/image/pardner/media.png" alt="Icon" class="size-16">
                    <h1 class="relative text-[13px] font-semibold leading-relaxed ">Media Coverage</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-40 w-24 pt-2 rounded-xl text-center text-white items-center">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-2 gap-3">
                    <img src="/image/pardner/innovation.png" alt="Icon" class="size-16">
                    <h1 class="relative text-[13px] font-semibold leading-relaxed ">Innovation Recognition</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-40 w-24 pt-2 rounded-xl text-center text-white items-center">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-2 gap-3">
                    <img src="/image/pardner/target.png" alt="Icon" class="size-16">
                    <h1 class="relative text-[13px] font-semibold leading-relaxed ">Target Marketing</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-40 w-24 pt-2 rounded-xl text-center text-white items-center">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-2 gap-3">
                    <img src="/image/pardner/community.png" alt="Icon" class="size-16">
                    <h1 class="relative text-[13px] font-semibold leading-relaxed ">Community Engagement</h1>
                </div>
            </div>

            <div class="relative flex justify-center h-40 w-24 pt-2 rounded-xl text-center text-white items-center">
                <img src="/image/pardner/gradient-box.png" alt="" class="absolute inset-0 rounded-xl object-cover">

                <div class="relative flex flex-col items-center m-2 gap-3">
                    <img src="/image/pardner/collab.png" alt="Icon" class="size-16">
                    <h1 class="relative text-[13px] font-semibold leading-relaxed ">Collaboration Opportunities</h1>
                </div>
            </div>
        </div>

        <form id='submit-form' action="partner-with-us" method="POST" class="mt-16 mb-12 py-5 px-6 w-4/5 flex flex-col items-center bg-gradient-to-br from-sky-950 to-pink-900 rounded-lg">
            @csrf
            <h2 class="text-xl font-bold text-center mb-8 text-white">Interested? Don't hesitate! Fill the form, and get the benefit!</h2>

            <div class="mb-3 w-full">
                <label class="block text-white font-bold mb-2" for="name">Name</label>
                <input class="w-full px-2 py-1 border rounded-lg text-gray-700" id="name" name="name" type="text" placeholder="Enter Your Name Here" value="{{ old('name') }}" required>
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 w-full">
                <label class="block text-white font-bold mb-2" for="email">Email</label>
                <input class="w-full px-2 py-1 border rounded-lg text-gray-700" id="email" name="email" type="email" placeholder="Enter Your Email Here" value="{{ old('email') }}" required>
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 w-full">
                <label class="block text-white font-bold mb-2" for="company">Company</label>
                <input class="w-full px-2 py-1 border rounded-lg text-gray-700" id="company" name="company" type="text" placeholder="Enter Your Company Here" value="{{ old('company') }}" required>
                @error('company')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 w-full">
                <label class="block text-white font-bold mb-2" for="job-title">Job Title</label>
                <input class="w-full px-2 py-1 border rounded-lg text-gray-700" id="job-title" name="job_title" type="text" placeholder="Enter Your Job Title Here" value="{{ old('job_title') }}" required>
                @error('job_title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 w-full">
                <label class="block text-white font-bold mb-2">Partnership Goal</label>

                <div class="flex gap-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="hidden peer" name="goal[]" value="sponsor" {{ is_array(old('goal')) && in_array('sponsor', old('goal')) ? 'checked' : '' }} />
                        <div class="w-3 h-3 rounded-sm border-2 border-white peer-checked:bg-white flex items-center justify-center"></div>
                        <span class="mx-1 text-white">Sponsor</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" class="hidden peer" name="goal[]" value="media-partner" {{ is_array(old('goal')) && in_array('media-partner', old('goal')) ? 'checked' : '' }} />
                        <div class="w-3 h-3 rounded-sm border-2 border-white peer-checked:bg-white flex items-center justify-center"></div>
                        <span class="mx-1 text-white">Media Partner</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" class="hidden peer" name="goal[]" value="others" {{ is_array(old('goal')) && in_array('others', old('goal')) ? 'checked' : '' }} />
                        <div class="w-3 h-3 rounded-sm border-2 border-white peer-checked:bg-white flex items-center justify-center"></div>
                        <span class="mx-1 text-white">Others</span>
                    </label>
                </div>
                @error('goal')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 w-full">
                <label class="block text-white font-bold mb-2" for="description">Description</label>
                <textarea class="w-full px-2 py-1 border rounded-lg text-gray-700" id="description" name="description" rows="4" placeholder="Enter Your Description Here">{{ old('description') }}</textarea>
                @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>


            @if (session()->has('success'))
            <div class="md:w-1/2 w-full bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif

            <div class="flex justify-center">
                <button class="bg-sky-900 text-white font-bold py-1 px-5 rounded-full hover:bg-sky-950" type="submit">Send</button>
            </div>
        </form>
    </div>
</x-layout>