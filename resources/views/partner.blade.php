<x-layout>
<x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div class="flex w-full flex-col bg-home-bg bg-cover bg-no-repeat bg-center items-center">
        <h1 class="text-7xl font-bold text-sky-950 pt-24">Why Partner With Us?</h1>
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

        <div class="mt-32 mb-24 py-10 px-12 w-1/2 flex flex-col items-center bg-gradient-to-br from-sky-950 to-pink-900 rounded-3xl">
            <h2 class="text-4xl font-bold text-center mb-8 text-white">Interested? Don't hesitate! Fill the form, and get the benefit!</h2>
            
            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2" for="name">Name</label> 
                <input class="w-full px-4 py-2 border rounded-lg text-gray-700" id="name" type="text" placeholder="Enter Your Name Here" required>
            </div>

            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2" for="email">Email</label>
                <input class="w-full px-4 py-2 border rounded-lg text-gray-700" id="email" type="email" placeholder="Enter Your Email Here" required>
            </div>

            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2" for="company">Company</label>
                <input class="w-full px-4 py-2 border rounded-lg text-gray-700" id="company" type="text" placeholder="Enter Your Company Here" required>
            </div>
            
            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2" for="job-title">Job Title</label>
                <input class="w-full px-4 py-2 border rounded-lg text-gray-700" id="job-title" type="text" placeholder="Enter Your Job Title Here" required>
            </div>

            <div class="mb-6 w-full">
                <label class="block text-white font-bold mb-2">Partnership Goal</label>

                <div class="flex gap-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="hidden peer" name="goal" value="sponsor"/>
                        <div class="w-5 h-5 rounded-md border-2 border-white peer-checked:bg-white flex items-center justify-center"></div>
                        <span class="ml-2 text-white">Sponsor</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" class="hidden peer" name="goal" value="media-partner"/>
                        <div class="w-5 h-5 rounded-md border-2 border-white peer-checked:bg-white flex items-center justify-center"></div>
                        <span class="ml-2 text-white">Media Partner</span>
                    </label>

                    <label class="flex items-center">
                        <input type="checkbox" class="hidden peer" name="goal" value="others"/>
                        <div class="w-5 h-5 rounded-md border-2 border-white peer-checked:bg-white flex items-center justify-center"></div>
                        <span class="ml-2 text-white">Others</span>
                    </label>
                </div>
            </div>

            <div class="mb-8 w-full">
                <label class="block text-white font-bold mb-2" for="description">Description</label>
                <textarea class="w-full px-4 py-2 border rounded-lg text-gray-700" id="description" rows="4" placeholder="Enter Your Description Here"></textarea>
            </div>

            <div class="flex justify-center">
                <button class="bg-sky-900 text-white font-bold py-2 px-10 rounded-full hover:bg-sky-950" type="submit">Send</button>
            </div>
        </div>
    </div>
</x-layout>