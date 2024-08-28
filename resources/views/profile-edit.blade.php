<x-layout>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="w-full flex flex-col bg-home-bg bg-cover bg-no-repeat bg-fixed bg-right-bottom place-content-center p-8">
        <div class="edit-profile p-8 ">
            <div class="text-2xl profile-section-name">Edit Profile</div>
            <form action="/profile-edit" method="POST">
                @csrf
                <div class="bg-cream-bg p-4 rounded-lg flex flex-col items-center justify-between gap-4">
                    <div class="self-start profile-edit-box">
                        <p class="font-bold">Full Name</p>
                        <input type="text" name="fullname" class="profile-edit-box profile-edit-box-section"
                            placeholder="Enter Your Full Name"
                            value="{{ old('fullname', $user->fullname) }}" required>
                        @error('fullname')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="self-start profile-edit-box">
                        <p class="font-bold">Email</p>
                        @if($emailVerified)
                        <input type="email" name="email" class="profile-edit-box profile-edit-box-section"
                            placeholder="Enter Your Email"
                            value="{{ old('email', $user->email) }}" readonly style="color: #666;" required>
                        <p class="text-sm text-gray-500 mt-1">Your email is already verified.</p>
                        @else
                        <input type="email" name="email" class="profile-edit-box profile-edit-box-section"
                            placeholder="Enter Your Email"
                            value="{{ old('email', $user->email) }}" required>
                        <p class="text-sm text-gray-500 mt-1">Your email is not verified. <a href="{{ route('verification.notice') }}" class="text-indigo-600 hover:underline">Verify your email</a></p>
                        @endif
                        @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="self-start profile-edit-box">
                        <p class="font-bold">Birthday</p>
                        <input type="date" name="birth_date" class="profile-edit-box profile-edit-box-section"
                            placeholder="Enter Your Birthday"
                            value="{{ old('birth_date', $user->birth_date ? $user->birth_date->format('Y-m-d') : '') }}" required>
                        @error('birth_date')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="self-start profile-edit-box edu-lv">
                        <p class="font-bold">Education Level</p>
                        <select name="education_level" id="edu-lv" class="profile-edit-box profile-edit-box-section" required>
                            <option value="" disabled selected hidden>Choose Education Level</option>
                            <option value="SMP" {{ old('education_level', $user->education_level) == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ old('education_level', $user->education_level) == 'SMA' ? 'selected' : '' }}>SMA</option>
                            <option value="SMK" {{ old('education_level', $user->education_level) == 'SMK' ? 'selected' : '' }}>SMK</option>
                            <option value="UNIV." {{ old('education_level', $user->education_level) == 'Univ.' ? 'selected' : '' }}>University</option>
                        </select>
                        @error('education_level')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="self-start profile-edit-box">
                        <p class="font-bold">Institution Name</p>
                        <input type="text" name="institution" class="profile-edit-box profile-edit-box-section"
                            placeholder="Enter Your Institution Name"
                            value="{{ old('institution', $user->institution) }}" required>
                        @error('institution')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="bg-sky-900 text-white px-2 py-1 w-24 rounded-full profile-save">Save</button>
                </div>
        </div>
        </form>
    </div>
    </div>
</x-layout>

