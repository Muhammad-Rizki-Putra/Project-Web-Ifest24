<x-layout>
    <x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div
        class="hidden md:flex items-center justify-center flex-col h-screen bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20 gap-y-10 px-[25%]">
        <div class="bg-cream-bg h-auto w-auto p-5 flex items-center justify-center flex-col gap-y-5 rounded-sm">
            <h1 class="font-bold text-5xl">Payment Form</h1>
            <p class="text-2xl">Acara apa - Bagian apa</p>
            <p class="font-semibold text-lg">Payment</p>
            <div class="w-full">
                <p class="font-semibold text-xl self-start">Amount to Pay</p>
                <p class="text-xl">Student : Rp.</p>
                <p class="text-xl">Public : Rp.</p>
                <p class="text-xl">Payment Methods</p>
                <p class="text-xl">Bank : </p>
            </div>


            <div>

                <label class="block mb-2 text-xl font-medium text-black" for="file_input">Upload Payment proof</label>
                <input
                    class="h-auto block w-full text-2xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-pink-90 dark:text-white focus:outline-none dark:bg-pink-800 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file">

            </div>
           
            <div class="flex flex-row items-center w-full justify-evenly">
                <a href="/last-act"><x-button textSize="text-2xl" textPadding="p-1">Back</x-button></a>
                <!-- to do change -->
                <a href="/"><x-button textSize="text-2xl" textPadding="p-1">Submit</x-button></a>
            </div>
        </div>
    </div>
</x-layout>