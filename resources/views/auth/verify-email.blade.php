<x-layout2>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>

    <!-- Desktop Version -->
    <div class="relative flex flex-col items-center justify-center overflow-hidden py-6 sm:py-12 bg-white h-[60vh] mx-auto md:block hidden">
        <a href="javascript:history.back()" class="hidden md:block absolute top-4 left-4 text-indigo-600 font-medium hover:underline">
            &larr; Back
        </a>

        <div class="max-w-xl px-5 text-center mt-5">
            <h2 class="mb-2 text-[42px] font-bold text-zinc-800">Check your inbox</h2>
            <p class="mb-2 text-lg text-zinc-500">We are glad that you’re with us! We’ve sent you a verification link to the email address.</p>

            @if (session('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
            @endif

            <div class="mt-10 mx-10">
                <form action="{{ route('verification.send') }}" method="POST">
                    @csrf
                    <button type="submit" class="inline-block w-full rounded bg-indigo-600 px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-indigo-700">
                        Resend Verification Email
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Mobile Version -->
    <div class="md:hidden relative w-[90vw] flex flex-col bg-white py-6 mx-auto h-[60vh]">
        <a href="javascript:history.back()" class="absolute top-4 left-4 text-indigo-600 font-medium hover:underline">
            &larr; Back
        </a>

        <div class="text-center mt-12 px-4 flex flex-col justify-center items-center h-full">
            <h2 class="text-2xl font-bold text-zinc-800">Check your inbox</h2>
            <p class="text-base text-zinc-500 mt-2">We are glad that you’re with us! We’ve sent you a verification link to the email address.</p>

            @if (session('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4">
                <span class="block sm:inline">{{ session('message') }}</span>
            </div>
            @endif

            <form action="{{ route('verification.send') }}" method="POST" class="inline-block mt-4">
                @csrf
                <button type="submit" class="w-full rounded bg-indigo-600 px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-indigo-700">
                    Resend Verification Email
                </button>
            </form>
        </div>
    </div>

</x-layout2>
