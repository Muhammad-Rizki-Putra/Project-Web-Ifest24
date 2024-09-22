<x-layout>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div
        class="hidden w-full md:flex flex-col bg-home-bg bg-cover bg-no-repeat bg-fixed bg-right-bottom self-center p-8 min-h-screen">
        <div class="account-info p-8 ">
            @if (session()->has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                    role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <div class="text-2xl profile-section-name font-semibold">Profile</div>
            <div class="grid grid-cols-1 h-46 bg-cream-bg place-content-center p-4 rounded-lg">
                <div class="grid grid-cols-3 grid-rows-2 gap-4">
                    <div class="text-left flex-col truncate w-[160px]">
                        <p class="font-bold">Full Name</p>
                        <p class="truncate">{{ $user->fullname }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Email</p>
                        <p class="truncate">{{ $user->email }}</p>
                    </div>
                    <div class="text-left flex flex-col truncate">
                        <div class="flex flex-row items-center gap-2">
                            <a href="/profile-edit" class="flex items-center gap-2">
                                <img src="/image/profile_edit.png" alt="" class="profile-buttons">
                                Edit
                            </a>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <a href="/logout" class="flex items-center gap-2">
                                <img src="/image/profile_logout.png" alt="" class="profile-buttons">
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Birthday</p>
                        <p class="truncate">{{ \Carbon\Carbon::parse($user->birth_date)->format('F j, Y') }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Education Level</p>
                        <p class="truncate">{{ $user->education_level }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Institution Name</p>
                        <p class="truncate">{{ $user->institution }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-location p-8">
            @if ($isRegistered)
                <div class="text-2xl profile-section-name mb-2 font-semibold">Registered At</div>
                <div
                    class="bg-gradient-to-r from-sky-200 via-cream-bg to-sky-100 p-4 rounded-lg shadow-lg border border-sky-300 flex items-center justify-between min-w-[350px]">
                    <div>
                        <p class="font-bold text-xl mb-2">Seminar Nasional</p>
                        <ul class="list-none space-y-2">
                            <li class="flex items-center text-sm gap-2">
                                <img src="/image/register_date.png" alt="" class="profile-buttons">
                                <p>Saturday, October 5th, 2024</p>
                            </li>
                            <li class="flex items-center text-sm gap-2">
                                <img src="/image/register_location.png" alt="" class="profile-buttons">
                                <p>Graha Sanusi</p>
                            </li>
                        </ul>
                    </div>

                    {{-- <div class="self-end text-xs">
                        <button class="bg-sky-900 text-white px-4 py-2 w-24 rounded-lg hover:bg-sky-700 transition-all">
                            Details
                        </button>
                    </div> --}}
                </div>
            @else
                <div
                    class="bg-gradient-to-r from-sky-100 via-cream-bg to-sky-50 p-4 rounded-lg text-center shadow-md border border-sky-200">
                    <p>Don't miss our Seminar Nasional event. <a href="{{ url('/last_act') }}"
                            class="text-sky-800 underline hover:text-sky-600">Click here</a> to claim your ticket.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Mobile Version -->
    <div
        class="md:hidden w-full flex flex-col bg-home-bg bg-cover bg-no-repeat bg-fixed bg-right-bottom place-content-center p-8 min-h-screen">
        <div class="account-info p-8 w-full">
            <div class="text-2xl profile-section-name font-semibold">Profile</div>
            <div class="grid grid-cols-1 h-46 bg-cream-bg place-content-center p-4 rounded-lg">
                <div class="flex flex-col gap-4">
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Full Name</p>
                        <p class="truncate">{{ $user->fullname }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Email</p>
                        <p class="truncate">{{ $user->email }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Birthday</p>
                        <p class="truncate">{{ \Carbon\Carbon::parse($user->birth_date)->format('F j, Y') }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Education Level</p>
                        <p class="truncate">{{ $user->education_level }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Institution Name</p>
                        <p class="truncate">{{ $user->institution }}</p>
                    </div>
                    <div class="flex flex-row gap-8 self-center">
                        <div class="flex flex-row items-center gap-2">
                            <a href="/profile-edit" class="flex items-center gap-2">
                                <img src="/image/profile_edit.png" alt="" class="profile-buttons">
                                Edit
                            </a>
                        </div>
                        <div class="flex flex-row items-center gap-2">
                            <a href="/logout" class="flex items-center gap-2">
                                <img src="/image/profile_logout.png" alt="" class="profile-buttons">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-location p-8">
            @if ($isRegistered)
                <div class="text-2xl profile-section-name mb-2 font-semibold">Registered At</div>
                <div
                    class="bg-gradient-to-r from-sky-200 via-cream-bg to-sky-100 p-4 rounded-lg shadow-lg border border-sky-300 flex items-center justify-between">
                    <div>
                        <p class="font-bold text-xl mb-2">Seminar Nasional</p>
                        <ul class="list-none space-y-2">
                            <li class="flex items-center text-sm gap-2">
                                <img src="/image/register_date.png" alt="" class="profile-buttons">
                                <p>Saturday, October 5th, 2024</p>
                            </li>
                            <li class="flex items-center text-sm gap-2">
                                <img src="/image/register_location.png" alt="" class="profile-buttons">
                                <p>Graha Sanusi</p>
                            </li>
                        </ul>
                    </div>

                    {{-- <div class="self-end text-xs">
                        <button class="bg-sky-900 text-white px-4 py-2 w-24 rounded-lg hover:bg-sky-700 transition-all">
                            Details
                        </button>
                    </div> --}}
                </div>
            @else
                <div
                    class="bg-gradient-to-r from-sky-100 via-cream-bg to-sky-50 p-4 rounded-lg text-center text-sm shadow-md border border-sky-200">
                    <p>Don't miss our Seminar Nasional event. <a href="{{ url('/last_act') }}"
                            class="text-sky-800 underline hover:text-sky-600">Click here</a> to claim your ticket.</p>
                </div>
            @endif
        </div>
    </div>
</x-layout>
