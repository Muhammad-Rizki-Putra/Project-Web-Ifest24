<x-layout>
    <x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div
        class="hidden md:flex items-center justify-center flex-col h-auto bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20 gap-y-10 px-[25%]">
        <div
            class="bg-cream-bg h-auto w-auto p-5 flex items-center justify-center flex-col gap-y-5 rounded-md bg-opacity-45 shadow-lg my-10">
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
                <label for="file-upload" class="custom-file-upload">
                    <x-button textSize="text-2xl" textPadding="p-1" bgColor="bg-pink-900">Upload Payment
                        Proof</x-button>
                </label>
                <input id="file-upload" type="file" style="display: none;" onchange="loadFile(event)"
                    accept="image/*" />
            </div>

            <img class="h-auto w-[200px]" id="output" />
            <script>
                var loadFile = function (event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function () {
                        URL.revokeObjectURL(output.src)
                    }
                };
            </script>

            <div class="flex flex-row items-center w-full justify-evenly">
                <a href="/last-act"><x-button textSize="text-2xl" textPadding="p-1">Back</x-button></a>
                <!-- to do change -->
                <a href="/"><x-button textSize="text-2xl" textPadding="p-1">Submit</x-button></a>
            </div>
        </div>
    </div>

    <div
        class="md:hidden flex items-center justify-center flex-col h-screen bg-itcomp-bg bg-fixed bg-right-bottom bg-cover bg-no-repeat py-20">
        <div
            class="bg-cream-bg h-auto w-auto p-5 flex items-center justify-center flex-col gap-y-5 rounded-md bg-opacity-45 shadow-lg my-10">
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
                <label for="file-upload" class="custom-file-upload">
                    <x-button textSize="text-2xl" textPadding="p-1" bgColor="bg-pink-900">Upload Payment
                        Proof</x-button>
                </label>
                <input id="file-upload" type="file" id="fileInput" style="display: none;" onchange="loadFile(event)"
                    accept="image/*" />
            </div>

            <script>
                var loadFile = function (event) {
                    var file = event.target.files[0]; 
                    var fileName = file.name;
                    document.getElementById('output').textContent = fileName;
                };
            </script>

            <p id="output"></p>

            <div class="flex flex-row items-center w-full justify-evenly">
                <a href="/last-act"><x-button textSize="text-2xl" textPadding="p-1">Back</x-button></a>
                <!-- to do change -->
                <a href="/"><x-button textSize="text-2xl" textPadding="p-1">Submit</x-button></a>
            </div>
        </div>
    </div>
</x-layout>