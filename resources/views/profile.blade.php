<x-layout>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="w-full flex flex-col bg-home-bg bg-cover bg-no-repeat bg-fixed bg-right-bottom place-content-center p-8 min-h-screen">
        <div class="account-info p-8">
            <div class="text-2xl profile-section-name">Profile</div>
            <div class="grid grid-cols-1 h-46 bg-cream-bg place-content-center p-4 rounded-lg">
                <div class="grid grid-cols-3 grid-rows-2 gap-4">
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Full Name</p>
                        <p>{{ $user->fullname }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Email</p>
                        <p>{{ $user->email }}</p>
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
                        <p>{{ \Carbon\Carbon::parse($user->birth_date)->format('F j, Y') }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Education Level</p>
                        <p>{{ $user->education_level }}</p>
                    </div>
                    <div class="text-left flex-col truncate">
                        <p class="font-bold">Institution Name</p>
                        <p>{{ $user->institution }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-location p-8">
            <div class="text-2xl profile-section-name">Registered At</div>
            <div class="bg-cream-bg p-4 rounded-lg flex items-center justify-between">
                <div>
                    <p class="font-bold text-xl mb-2">Name</p>
                    <div class="flex flex-col items-start gap-2">
                        <div class="flex items-center text-sm gap-2">
                            <img src="/image/register_date.png" alt="" class="profile-buttons">
                            <p>Day, dd - mm - yyyy</p>
                        </div>

                        <div class="flex items-center text-sm gap-2">
                            <img src="/image/register_location.png" alt="" class="profile-buttons">
                            <p>Location</p>
                        </div>
                    </div>
                </div>

                <div class="self-end text-xs">
                    <button class="bg-sky-900 text-white px-2 py-1 w-20 rounded-lg">Details</button>
                </div>
            </div>
        </div>
    </div>
</x-layout>