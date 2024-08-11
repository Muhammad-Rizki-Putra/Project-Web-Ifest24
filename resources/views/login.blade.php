<x-layout>
    <div class="flex flex-row mx-auto my-auto">
        <img class="h-463 w-auto my-auto" src="image/logo_ifest.png" alt="logo_ifest" >
        <img class="w-auto px-20" src="image/Line.png" alt="line" >
        <div class="flex flex-col items-center">
            <h1 class="text-5xl pb-5">
                Login
            </h1>
            <form class="w-463 max-w-lg mt-10">
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Username/Email
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="text" placeholder="Enter Your Email Here">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Password
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="Enter Your Password">
                        <a href="to do: add forgot password link">Forgot your password?</a>
                    </div>
                </div>

            </form>

            <a href="to do: button" class="image-button">
                <img src="image/Login_button.png" alt="button image">
            </a>
            <p>Don't have an account? <a href="/register">Register here!</a></p>
            <h5 class="text-lg">or</h5>

            <button class="bg-white border border-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center mt-4">
                <img src="image/google.png" alt="Google logo" class="w-6 h-6 mr-2">
                <span>Login with Google</span>
            </button>
        </div>
    </div>
</x-layout>