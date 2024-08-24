<x-layout>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="w-full flex flex-col bg-home-bg bg-cover bg-no-repeat bg-center place-content-center p-8">
        <div class="edit-profile p-8 ">
            <div class="text-2xl profile-section-name">Edit Profile</div>
            <form action="/profile-edit" method="POST">
                @csrf
                <div class="bg-cream-bg p-4 rounded-lg flex flex-col items-center justify-between gap-4 lg:w-160 ">
                    <div class="self-start profile-edit-box">
                        <p class="font-bold">Full Name</p>
                        <input type="text" name="fullname" class="profile-edit-box profile-edit-box-section" value="{{ $user->fullname }}" required>
                    </div>

                    {{-- <div class="self-start profile-edit-box">
                        <p class="font-bold">Name</p>
                        <input type="text" name="name" class="profile-edit-box profile-edit-box-section" value="{{ $user->name }}" required>
                    </div> --}}

                    <div class="self-start profile-edit-box">
                        <p class="font-bold">Email</p>
                        <input type="email" name="email" class="profile-edit-box profile-edit-box-section" value="{{ $user->email }}" readonly style="color: #666;" required>
                    </div>

                    <div class="self-start profile-edit-box">
                        <p class="font-bold">Birthday</p>
                         <input type="date" name="birth_date" class="profile-edit-box profile-edit-box-section" value="{{ $user->birth_date ? $user->birth_date->format('Y-m-d') : '' }}" required>
                    </div>

                    <div class="self-start profile-edit-box edu-lv">
                        <p class="font-bold">Education Level</p>
                        <select name="education_level" id="edu-lv" class="profile-edit-box profile-edit-box-section" required>
                            <option value="SMP" {{ $user->education_level == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ $user->education_level == 'SMA' ? 'selected' : '' }}>SMA</option>
                            <option value="UNIV." {{ $user->education_level == 'Univ.' ? 'selected' : '' }}>University</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="bg-sky-900 text-white px-2 py-1 w-24 rounded-full profile-save">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>