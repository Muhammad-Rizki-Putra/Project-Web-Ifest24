<x-layout2>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="hidden md:block w-auto h-auto bg-cream-bg p-5 rounded-lg">
        <div class="flex justify-end">
            <a href="/" class="absolute"><img src="/image/cancel-logo.png" alt="" class="mt-10 mr-10"></a>
        </div>
        <div class="flex flex-row items-center justify-center h-auto mx-auto">
            <img class="w-auto h-auto my-auto hidden lg:block pt-[116px]" src="image/logo_ifest.png" alt="logo_ifest">
            <img class="w-auto my-auto h-auto px-20 hidden lg:block " src="image/Line.png" alt="line">
            <div class="flex flex-col items-center pt-[48px] my-auto h-auto max-h-[627px]">
                <h1 class="text-5xl pb-5">
                    Register
                </h1>
                <form class="h-auto w-[calc(75vh)]" action="/register" method="post">
                    @csrf
                    <div class="flex flex-wrap -mx-3 ">
                        <div class="w-full px-3">
                            <div class="flex justify-between items-center">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold "
                                    for="grid-fullname">
                                    Full Name
                                </label>
                                @error('fullname')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-fullname" type="text" name="fullname" placeholder="Enter Your Full Name" required
                                value="{{ old('fullname') }}">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 ">
                        <div class="w-full px-3">
                            <div class="flex justify-between items-center">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-email">
                                    Email
                                </label>
                                @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-email" type="text" name="email" placeholder="Enter Your Email Here" required
                                value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 ">
                        <div class="w-full px-3">
                            <div class="flex justify-between items-center">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold "
                                    for="grid-password">
                                    Password
                                </label>
                                @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password" type="password" name="password" placeholder="Enter Your Password"
                                required>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 ">
                        <div class="w-full px-3">
                            <div class="flex justify-between items-center">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold "
                                    for="grid-password-confirmation">
                                    Confirm your Password
                                </label>
                                @error('password_confirmation')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-password-confirmation" type="password" name="password_confirmation"
                                placeholder="Enter Your Confirmation Password" required>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 ">
                        <div class="w-full md:w-1/2 px-3  md:mb-0">
                            <div class="flex justify-between items-center">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold "
                                    for="grid-birth-date">
                                    Date Birth
                                </label>
                                @error('birth_date')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-birth-date" type="date" name="birth_date" placeholder="Select Your Birth Date"
                                required value="{{ old('birth_date') }}">
                        </div>

                        <div class="w-full flex-wrap md:w-1/2 px-3  md:mb-0">
                            <div class="flex justify-between items-center">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold "
                                    for="grid-education-level">
                                    Current Level of Education
                                </label>
                                @error('education_level')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-education-level" name="education_level" placeholder="Select Your Level"
                                    required>
                                    <option value="">Select Your Level</option>
                                    <option value="SMP" {{ old('education_level') == 'SMP' ? 'selected' : '' }}>SMP
                                    </option>
                                    <option value="SMA" {{ old('education_level') == 'SMA' ? 'selected' : '' }}>SMA
                                    </option>
                                    <option value="Univ." {{ old('education_level') == 'Univ.' ? 'selected' : '' }}>Univ.
                                    </option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mt-3">
                        <div class="w-full px-3">
                            <div class="flex justify-between items-center">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="desktop-grid-ifest-info">
                                    Where do you know IFest?
                                </label>
                                @error('ifest_info')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="relative">
                                @php
                                $oldIfestInfo = old('ifest_info', []);
                                if (!is_array($oldIfestInfo)) {
                                $oldIfestInfo = [];
                                }
                                $ifestInfoValue = implode(', ', $oldIfestInfo);
                                @endphp
                                <input type="hidden" id="desktop-grid-ifest-info" name="ifest_info" value="{{ $ifestInfoValue }}">
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="desktop-grid-ifest-info-display" type="text" placeholder="Select Your Options" required readonly
                                    onclick="toggleDesktopCheckboxes()" value="{{ $ifestInfoValue }}">
                                <div id="desktop-checkboxes" class="absolute border border-gray-200 rounded shadow-lg hidden p-4" style="bottom: 100%; margin-bottom: 10px; background-color: rgba(255, 255, 255, 0.8);">
                                    <div class="grid grid-cols-2 gap-4">
                                        <label><input type="checkbox" name="ifest_info[]" value="Social Media" onclick="updateInputDesktop()" {{ in_array('Social Media', $oldIfestInfo) ? 'checked' : '' }}> Social Media</label>
                                        <label><input type="checkbox" name="ifest_info[]" value="Friend" onclick="updateInputDesktop()" {{ in_array('Friend', $oldIfestInfo) ? 'checked' : '' }}> Friend</label>
                                        <label><input type="checkbox" name="ifest_info[]" value="Roadshow" onclick="updateInputDesktop()" {{ in_array('Roadshow', $oldIfestInfo) ? 'checked' : '' }}> Roadshow</label>
                                        <label><input type="checkbox" name="ifest_info[]" value="Media Partner" onclick="updateInputDesktop()" {{ in_array('Media Partner', $oldIfestInfo) ? 'checked' : '' }}> Media Partner</label>
                                        <label><input type="checkbox" name="ifest_info[]" value="Ads" onclick="updateInputDesktop()" {{ in_array('Ads', $oldIfestInfo) ? 'checked' : '' }}> Ads</label>
                                        <label><input type="checkbox" name="ifest_info[]" value="Other" onclick="toggleOtherInput('desktop-other-input'); updateInputDesktop()" {{ in_array('Other', $oldIfestInfo) ? 'checked' : '' }}> Other</label>
                                    </div>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 {{ in_array('Other', $oldIfestInfo) ? '' : 'hidden' }}"
                                        id="desktop-other-input" type="text" name="ifest_info_other" placeholder="Please specify" oninput="updateInputDesktop()" value="{{ old('ifest_info_other') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="image-button">
                            <img src="image/tombol_regis.png" alt="button image">
                        </button>
                    </div>
                </form>

                <p>Already have an account? <a href="/login">Login here!</a></p>

            </div>
        </div>
    </div>

    <!-- mobver -->

    <div class="md:hidden flex flex-col items-center w-[75%] h-auto bg-cream-bg p-5 m-auto rounded-lg">
        <h1 class="font-bold text-3xl mb-5">Register</h1>
        <h1 class="font-bold text-lg">Registrasi Sekarang</h1>
        <h1 class="opacity-50 text-sm pb-10 text-center">Silahkan lengkapi form registrasi di bawah ini.</h1>

        <form class="h-auto w-[100%]" action="/register" method="post">
            @csrf
            <div class="flex flex-col">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-account">
                        Full Name
                    </label>
                    @error('fullname')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-fullname" type="text" name="fullname" placeholder="Enter Your Full Name" required
                        value="{{ old('fullname') }}">
                </div>
            </div>

            <div class="flex flex-col">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-account">
                        Email
                    </label>
                    @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-email" type="text" name="email" placeholder="Enter Your Email Here" required
                        value="{{ old('email') }}">
                </div>
            </div>

            <div class="flex flex-col">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Password
                    </label>
                    @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="password" name="password" placeholder="Enter Your Password"
                        required>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Confirm Password
                    </label>
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password-confirmation" type="password" name="password_confirmation"
                        placeholder="Enter Your Confirmation Password" required>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-account">
                        Date Birth
                    </label>
                    @error('birth_date')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-birth-date" type="date" name="birth_date" placeholder="Select Your Birth Date"
                        required value="{{ old('birth_date') }}">
                </div>
            </div>

            <div class="flex flex-col">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-account">
                        Current Level of Education
                    </label>
                    @error('education_level')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <div class="relative">
                        <select
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-education-level" name="education_level" placeholder="Select Your Level"
                            required>
                            <option value="">Select Your Level</option>
                            <option value="SMP" {{ old('education_level') == 'SMP' ? 'selected' : '' }}>SMP
                            </option>
                            <option value="SMA" {{ old('education_level') == 'SMA' ? 'selected' : '' }}>SMA
                            </option>
                            <option value="Univ." {{ old('education_level') == 'Univ.' ? 'selected' : '' }}>Univ.
                            </option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="flex flex-col">
                <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="mobile-grid-account">
                        Where Do You Know Ifest
                    </label>
                    @error('ifest_info')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <div class="relative">
                        @php
                        $oldIfestInfo = old('ifest_info', []);
                        if (!is_array($oldIfestInfo)) {
                        $oldIfestInfo = [];
                        }
                        $ifestInfoValue = implode(', ', $oldIfestInfo);
                        @endphp
                        <input type="hidden" id="mobile-grid-ifest-info" name="ifest_info" value="{{ $ifestInfoValue }}">
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="mobile-grid-ifest-info-display" type="text" placeholder="Select Your Options" required readonly
                            onclick="toggleMobileCheckboxes()" value="{{ $ifestInfoValue }}">
                        <div id="mobile-checkboxes" class="absolute border border-gray-200 rounded shadow-lg hidden p-4" style="bottom: 100%; margin-bottom: 10px; background-color: rgba(255, 255, 255, 0.8);">
                            <div class="grid grid-cols-2 gap-4">
                                <label><input type="checkbox" name="ifest_info[]" value="Social Media" onclick="updateInputMobile()" {{ in_array('Social Media', $oldIfestInfo) ? 'checked' : '' }}> Social Media</label>
                                <label><input type="checkbox" name="ifest_info[]" value="Friend" onclick="updateInputMobile()" {{ in_array('Friend', $oldIfestInfo) ? 'checked' : '' }}> Friend</label>
                                <label><input type="checkbox" name="ifest_info[]" value="Roadshow" onclick="updateInputMobile()" {{ in_array('Roadshow', $oldIfestInfo) ? 'checked' : '' }}> Roadshow</label>
                                <label><input type="checkbox" name="ifest_info[]" value="Media Partner" onclick="updateInputMobile()" {{ in_array('Media Partner', $oldIfestInfo) ? 'checked' : '' }}> Media Partner</label>
                                <label><input type="checkbox" name="ifest_info[]" value="Ads" onclick="updateInputMobile()" {{ in_array('Ads', $oldIfestInfo) ? 'checked' : '' }}> Ads</label>
                                <label><input type="checkbox" name="ifest_info[]" value="Other" onclick="toggleOtherInput('mobile-other-input'); updateInputMobile()" {{ in_array('Other', $oldIfestInfo) ? 'checked' : '' }}> Other</label>
                            </div>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 {{ in_array('Other', $oldIfestInfo) ? '' : 'hidden' }}"
                                id="mobile-other-input" type="text" name="ifest_info_other" placeholder="Please specify" oninput="updateInputMobile()" value="{{ old('ifest_info_other') }}">
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-sm">Already have an account? <a href="/login" class="text-navy-bg">Login here!</a></p>

            <div class="flex justify-center mt-7">
                <button type="submit" class="image-button">
                    <img src="image/tombol_regis.png" alt="button image">
                </button>
            </div>

        </form>
    </div>
</x-layout2>

<script>
    document.addEventListener('click', function(event) {
        if (!event.target.closest('#desktop-checkboxes') && !event.target.closest('#desktop-grid-ifest-info-display') &&
            !event.target.closest('#mobile-checkboxes') && !event.target.closest('#mobile-grid-ifest-info-display')) {
            document.getElementById("desktop-checkboxes").style.display = "none";
            document.getElementById("mobile-checkboxes").style.display = "none";
        }
    });

    function toggleDesktopCheckboxes() {
        var checkboxes = document.getElementById("desktop-checkboxes");
        checkboxes.style.display = (checkboxes.style.display === "none" || checkboxes.style.display === "") ? "block" : "none";
    }

    function toggleMobileCheckboxes() {
        var checkboxes = document.getElementById("mobile-checkboxes");
        checkboxes.style.display = (checkboxes.style.display === "none" || checkboxes.style.display === "") ? "block" : "none";
    }

    function toggleOtherInput(inputId) {
        var otherInput = document.getElementById(inputId);
        otherInput.style.display = (otherInput.style.display === "none" || otherInput.style.display === "") ? "block" : "none";
    }

    function updateInputDesktop() {
        var checkboxes = document.querySelectorAll('#desktop-checkboxes input[type="checkbox"]');
        var selected = [];

        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                if (checkbox.value === "Other") {
                    var otherInput = document.getElementById('desktop-other-input');
                    if (otherInput.value) {
                        selected.push(otherInput.value);
                    }
                } else {
                    selected.push(checkbox.value);
                }
            }
        });

        document.getElementById("desktop-grid-ifest-info").value = selected;
        document.getElementById("desktop-grid-ifest-info-display").value = selected.join(', ');
    }

    function updateInputMobile() {
        var checkboxes = document.querySelectorAll('#mobile-checkboxes input[type="checkbox"]');
        var selected = [];

        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                if (checkbox.value === "Other") {
                    var otherInput = document.getElementById('mobile-other-input');
                    if (otherInput.value) {
                        selected.push(otherInput.value);
                    }
                } else {
                    selected.push(checkbox.value);
                }
            }
        });

        document.getElementById("mobile-grid-ifest-info").value = selected;
        document.getElementById("mobile-grid-ifest-info-display").value = selected.join(', ');
    }

    document.addEventListener('DOMContentLoaded', function() {
        updateInputDesktop();
        updateInputMobile();
    });
</script>