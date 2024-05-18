<!-- Navbar -->
<header class=" bg-gray-800  text-white w-full ">
    <div class="py-4">

        <div class="flex justify-between px-4 items-center ">
            <div class="">
                <input type="text" placeholder="search" class="input input-bordered input-sm w-full text-gray-500" />
            </div>

            <div class="flex items-center gap-x-8 ">
                <div class="flex items-center gap-x-6 ">
                    <div class="notification relative">
                        <span class="relative flex">
                            <div
                                class="absolute badge bg-red-500 border-none badge-sm -top-1 -right-2 text-white font-bold text-xs">
                                5</div>
                            <div class="text-xl">
                                <i class="fa-regular fa-message"></i>
                            </div>
                        </span>
                    </div>

                    <div class="notification relative">
                        <span class="relative flex ">
                            <span
                                class="animate-ping top-0 right-0 h-4 w-4 absolute rounded-full bg-green-400 opacity-75"></span>
                            <span class="absolute top-0 right-0 h-3 w-3 rounded-full bg-green-500"></span>
                            <div class="text-xl">
                                <i class="fa-regular fa-bell"></i>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="avatar dropdown dropdown-end">
                    <div class="w-10 rounded-full" tabindex="0" role="button">
                        @if (Auth::check() && Auth::user()->avatar)
                            <div class="header-avatar">
                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar">
                            </div>
                        @else
                            <div class="header-avatar">
                                <img src="{{ asset('default-avatar.jpg') }}" alt="Default Avatar">
                            </div>
                        @endif
                    </div>
                    <ul tabindex="0"
                        class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-48 ml-5 mt-6 text-black">
                        <li><a href="#"><i class="fa-solid fa-user"></i>Profile</a></li>
                        <li><a href="#"><i class="fa-solid fa-gear"></i>Settings</a></li>
                        <hr />
                        <li class="text-red-500"><a href="#"> <i
                                    class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</header>
