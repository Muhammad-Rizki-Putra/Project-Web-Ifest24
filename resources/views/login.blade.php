<x-layout2>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="flex justify-end">
        <a href="/" class="absolute"><img src="/image/cancel-logo.png" alt="" class="mt-10 mr-10"></a>
    </div>
    <div class="flex flex-row items-center justify-center h-screen mx-auto">
        <img class="w-auto h-auto my-auto hidden lg:block pt-[116px]" src="image/logo_ifest.png" alt="logo_ifest">
        <img class="w-auto my-auto h-auto px-20 hidden lg:block " src="image/Line.png" alt="line">
        <div class="flex flex-col items-center pt-[48px] my-auto h-auto max-h-[627px]">
            <h1 class="text-5xl pb-5">
                Login
            </h1>

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                    role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
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

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Password
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password" name="password" type="password" placeholder="Enter Your Password"
                            required value="{{ old('password') }}">
                        <a href="to do: add forgot password link">Forgot your password?</a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="image-button">
                        <img src="image/Login_button.png" alt="button image">
                    </button>
                </div>
            </form>

            <p>Don't have an account? <a href="/register">Register here!</a></p>
            <h5 class="text-lg">or</h5>

            <button
                class="bg-white border border-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center mt-4">
                <img src="image/google.png" alt="Google logo" class="w-6 h-6 mr-2">
                <span>Login with Google</span>
            </button>
        </div>
    </div>
</x-layout2>
