<x-layout>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="w-full flex flex-col bg-home-bg bg-cover bg-no-repeat bg-center place-content-center p-8">
        <div class="edit-profile p-8 ">
            <div class="text-2xl profile-section-name">Edit Profile</div>
            <form action="/profile-edit" method="POST">
                @csrf
                <div class="bg-cream-bg p-4 rounded-lg flex flex-col items-center justify-between gap-4">
                    <div class="self-start profile-edit-box">
                        <p class="font-bold">Full Name</p>
                        <input type="text" name="fullname" class="profile-edit-box profile-edit-box-section"
                            value="{{ $user->fullname }}" required>
                    </div>

                    {{-- <div class="self-start profile-edit-box">
                        <p class="font-bold">Name</p>
                        <input type="text" name="name" class="profile-edit-box profile-edit-box-section" value="{{ $user->name }}" required>
                </div> --}}

                <div class="self-start profile-edit-box">
                    <p class="font-bold">Email</p>
                    <input type="email" name="email" class="profile-edit-box profile-edit-box-section"
                        value="{{ $user->email }}" readonly style="color: #666;" required>
                </div>

                <div class="self-start profile-edit-box">
                    <p class="font-bold">Birthday</p>
                    <input type="date" name="birth_date" class="profile-edit-box profile-edit-box-section"
                        value="{{ $user->birth_date ? $user->birth_date->format('Y-m-d') : '' }}" required>
                </div>

                <div class="self-start profile-edit-box edu-lv">
                    <p class="font-bold">Education Level</p>
                    <select name="education_level" id="edu-lv" class="profile-edit-box profile-edit-box-section"
                        required>
                        <option value="SMP" {{ $user->education_level == 'SMP' ? 'selected' : '' }}>SMP</option>
                        <option value="SMA" {{ $user->education_level == 'SMA' ? 'selected' : '' }}>SMA</option>
                        <option value="UNIV." {{ $user->education_level == 'Univ.' ? 'selected' : '' }}>University
                        </option>
                    </select>
                </div>

                <div class="self-start profile-edit-box">
                    <p class="font-bold">Where do you know IFest?</p>
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

                <div>
                    <button type="submit"
                        class="bg-sky-900 text-white px-2 py-1 w-24 rounded-full profile-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

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