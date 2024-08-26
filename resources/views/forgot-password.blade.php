<x-layout2>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="w-full h-screen flex items-center justify-center bg-home-bg bg-cover bg-no-repeat bg-center p-5">
        <div class="bg-cream-bg p-8 rounded-lg shadow-lg max-w-md w-full text-center forgot-pass mx-8">
            <div class="flex justify-start mb-4">
                <a href="/login" class="text-slate-800 hover:text-slate-600">
                    <img src="/image/prev.png" alt="" class="mx-auto h-8 w-8">
                </a>
            </div>
            
            <div class="mb-6">
                <img src="/image/logo_ifest.png" alt="" class="mx-auto h-48 w-48">
            </div>

            <div class="text-lg font-medium text-slate-700 mb-6">Forgot Your Password?</div>
            
            <form method="POST" action="/forgot-password">
                @csrf
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Enter Your Email Here!" class="w-full p-4 rounded-lg bg-slate-100 text-slate-600 focus:outline-none focus:ring-2 focus:ring-slate-400">
                    @error('email')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="bg-sky-900 text-white px-6 py-2 rounded-full hover:bg-sky-800">Submit</button>
            </form>
            @if (session('status'))
                <div class="text-green-500 text-sm mt-4">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</x-layout2>