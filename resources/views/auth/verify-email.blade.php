<x-layout2>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>

    <div class="relative flex h-[400px] flex-col items-center justify-center overflow-hidden py-6 sm:py-12 bg-white">
        <div class="max-w-xl px-5 text-center">
            <h2 class="mb-2 text-[42px] font-bold text-zinc-800">Check your inbox</h2>
            <p class="mb-2 text-lg text-zinc-500">We are glad that you’re with us! We’ve sent you a verification link to the email address.</p>

            @if (session('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
            @endif

            <form action="{{ route('verification.send') }}" method="POST" class="inline-block">
                @csrf
                <button type="submit" class="mt-3 inline-block w-96 rounded bg-indigo-600 px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-indigo-700">
                    Resend Verification Email
                </button>
            </form>
        </div>
    </div>

</x-layout2>