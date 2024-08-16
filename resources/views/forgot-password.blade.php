<x-layout2>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="w-full h-screen flex items-center justify-center bg-home-bg bg-cover bg-no-repeat bg-center">
        <div class="bg-cream-bg p-8 rounded-lg shadow-lg max-w-md w-full text-center forgot-pass">
            <div class="flex justify-start mb-4">
                <button class="text-slate-800 hover:text-slate-600">
                    <img src="/image/prev.png" alt="" class="mx-auto h-8 w-8">
                </button>
            </div>
            
            <div class="mb-6">
                <img src="/image/logo_ifest.png" alt="" class="mx-auto h-48 w-48">
            </div>

            <div class="text-lg font-medium text-slate-700 mb-6">Forgot Your Password?</div>
            
            <div class="mb-4">
                <input type="text" placeholder="Enter Your Email/Username Here!" class="w-full p-4 rounded-lg bg-slate-100 text-slate-600 focus:outline-none focus:ring-2 focus:ring-slate-400">
            </div>
            
            <button class="bg-sky-900 text-white px-6 py-2 rounded-full hover:bg-sky-800">Submit</button>
        </div>
    </div>
</x-layout2>
