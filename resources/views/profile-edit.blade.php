<x-layout>
    <x-slot:pagename>{{ $pagename }}</x-slot:pagename>
    <div class="w-full flex flex-col bg-home-bg bg-cover bg-no-repeat bg-center place-content-center p-8">
        <div class="edit-profile p-8 ">
            <div class="text-2xl profile-section-name">Edit Profile</div>
            <div class="bg-cream-bg p-4 rounded-lg flex flex-col items-center justify-between gap-4">   
                <div class="self-start profile-edit-box">
                    <p class="font-bold">Full Name</p>
                    <input type="text" class="profile-edit-box profile-edit-box-section" value="Saya Sendiri">
                </div>

                <div class="self-start profile-edit-box">
                    <p class="font-bold">Name</p>
                    <input type="text" class="profile-edit-box profile-edit-box-section" value="Saya">
                </div>

                <div class="self-start profile-edit-box">
                    <p class="font-bold">Email</p>
                    <input type="text" class="profile-edit-box profile-edit-box-section" value="Gmail@gmail.com">
                </div>

                <div class="self-start profile-edit-box">
                    <p class="font-bold">Birthday</p>
                    <input type="date" class="profile-edit-box profile-edit-box-section">
                </div>

                <div class="self-start profile-edit-box edu-lv">
                    <p class="font-bold">Education Level</p>
                    <select name="edu" id="edu-lv" class="profile-edit-box profile-edit-box-section">
                        <option value="paud">PAUD</option>
                        <option value="tk">TK</option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="sma">SMA</option>
                        <option value="smk">SMK</option>
                        <option value="kuliah">Kuliah</option>
                    </select>
                </div>

                <div>
                    <button class="bg-sky-900 text-white px-2 py-1 w-24 rounded-full profile-save">Save</button>
                </div>
            </div>
        </div>
    </div>
</x-layout>
