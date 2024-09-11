<x-layout2>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="w-auto h-auto bg-cream-bg p-10 rounded-lg hidden md:block">
        <div class="flex justify-end">
            <a href="/" class="absolute"><img src="/image/cancel-logo.png" target="_blank" rel="noopener noreferrer"
                    alt="" class="mt-10 mr-10"></a>
        </div>
        <div class="flex flex-row items-center justify-center h-auto mx-auto">
            <img class="w-[350px] h-auto m-auto hidden self-center xl:block pl-16 pt-4" src="image/logo_ifest.png"
                alt="logo_ifest">
            <div class="mx-10 hidden xl:block h-[400px] w-[2px] bg-black"></div>
            <div class="flex flex-col items-center pt-[48px] my-auto h-auto max-h-[627px]">
                <h1 class="text-5xl pb-5 font-bold text-navy-bg">
                    Login
                </h1>

                @if (session()->has('success') || session()->has('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <span class="block sm:inline">{{ session('success') ?? session('status') }}</span>
                    </div>
                @endif

                @error('account')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                @enderror

                @error('password')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                @enderror

                <form class="h-auto w-[calc(75vh)]" action="/login" method="post">
                    @csrf
                    <div class="flex flex-wrap -mx-3 ">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-account">
                                Email
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-account" name="account" type="text" placeholder="Enter Your Email"
                                value="{{ old('account') }}" required>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Password
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password" name="password" type="password" placeholder="Enter Your Password"
                                required value="{{ old('password') }}">
                        </div>
                    </div>

                    <div class="w-full flex justify-end">
                        <a href="/forgot-password" target="_blank" rel="noopener noreferrer"
                            class="flex font-semibold w-full justify-end hover:underline hover:text-blue-500">Forgot
                            your password?</a>
                    </div>

                    <div class="flex justify-center mt-4">
                        <button type="submit"
                            class="p-5 bg-gradient-to-br from-sky-950 to-pink-900 transition duration-500 ease-in-out hover:from-pink-900 hover:to-sky-950 py-2 px-10 rounded-sm">
                            <h1 class="text-white">Login</h1>
                        </button>

                    </div>
                </form>

                <p>Don't have an account? <a href="/register" target="_blank" rel="noopener noreferrer"
                        class="hover:underline hover:text-blue-500 font-semibold">Register here!</a></p>


            </div>
        </div>
    </div>

    <div class="md:hidden flex flex-col items-center w-[75%] h-auto bg-cream-bg p-5 m-5 rounded-lg">
        <div class="flex justify-end w-full ">
            <a href="/" class="self-end "><img src="/image/cancel-logo.png" target="_blank" rel="noopener noreferrer" alt="" class=""></a>
        </div>
        <h1 class="font-bold text-3xl mb-2 text-navy-bg">Login</h1>
        <div class="text-center flex justify-center items-center w-full">
            <h1 class="text-sm pb-4 w-5/6">
                <span class="font-semibold">Selamat Datang</span>, 
                <span class="opacity-50">Isi form berikut untuk melanjutkan</span>
            </h1>
        </div>

        @if (session()->has('success') || session()->has('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') ?? session('status') }}</span>
            </div>
        @endif

        @error('account')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @enderror

        @error('password')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @enderror

        <form class="h-auto w-[100%]" action="/login" method="post">
            @csrf
            <div class="flex flex-col">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-account">
                        Email
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-account" name="account" type="text" placeholder="Enter Your Email"
                        value="{{ old('account') }}" required>

                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Password
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" name="password" type="password" placeholder="Enter Your Password" required
                        value="{{ old('password') }}">
                </div>
            </div>
            <div class="flex justify-center my-1 mb-3">
            <button type="submit"
                            class="p-5 bg-gradient-to-br from-sky-950 to-pink-900 transition duration-500 ease-in-out hover:from-pink-900 hover:to-sky-950 py-2 px-10 rounded-sm">
                            <h1 class="text-white">Login</h1>
                        </button>
            </div>

            <div class="flex flex-wrap text-center">
                <div class="w-full">
                    <p class="text-sm pb-1"><a href="/forgot-password" target="_blank" rel="noopener noreferrer" class="font-semibold hover:underline hover:text-blue-500">Forgot Password?</a></p>
                    <p class="text-sm">Don't have an account? <a href="/register" target="_blank" rel="noopener noreferrer" class="font-semibold hover:underline hover:text-blue-500">Register here!</a></p>
                </div>
            </div>
        </form>
    </div>
</x-layout2>