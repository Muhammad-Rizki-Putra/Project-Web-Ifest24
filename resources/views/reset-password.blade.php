<x-layout2>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="w-full h-screen flex items-center justify-center bg-home-bg bg-cover bg-no-repeat bg-center">
        <div class="bg-cream-bg p-8 rounded-lg max-w-md w-full text-center forgot-pass">
            <div class="flex justify-start mb-4">
                <button class="text-slate-800 hover:text-slate-600">
                    <img src="/image/prev.png" alt="" class="mx-auto h-8 w-8">
                </button>
            </div>
            
            <div class="mb-6">
                <img src="/image/logo_ifest.png" alt="" class="mx-auto h-48 w-48">
            </div>

            <div class="text-lg font-medium text-slate-700 mb-6">Reset Your Password</div>
            
            <form action="/reset-password" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="mb-4">
                    <input type="email" name="email" value="{{ old('email', $email) }}" placeholder="Enter Your Email" class="w-full p-4 mb-4 rounded-lg bg-gray-100 text-slate-600 focus:outline-none focus:ring-2 focus:ring-slate-400" required readonly>
                    @error('email')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Enter Your Password" class="w-full p-4 mb-4 rounded-lg bg-gray-100 text-slate-600 focus:outline-none focus:ring-2 focus:ring-slate-400" required>
                    @error('password')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" name="password_confirmation" placeholder="Confirm Your Password" class="w-full p-4 rounded-lg bg-gray-100 text-slate-600 focus:outline-none focus:ring-2 focus:ring-slate-400" required>
                    @error('password_confirmation')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="bg-sky-900 text-white px-6 py-2 rounded-full hover:bg-sky-800">Reset Password</button>
            </form>
            @if (session('status'))
                <div class="text-green-500 text-sm mt-4">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</x-layout2>