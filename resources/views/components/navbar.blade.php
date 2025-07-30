<nav class="bg-neutral-100 text-neutral-900 shadow-md sticky top-0 z-20">
    <div class="w-fill h-auto flex justify-center items-center bg-neutral-950 text-white font-light">
        Text here if needed
    </div>
    <div class=" mx-[72px] flex items-center justify-between ">
        <!-- Logo -->
        <div class="flex items-center space-x-4">
            <img src="{{ asset('img/image.png') }}" alt="Newah_kalah_logo" class="h-[114px] w-auto" />
        </div>

        <!-- Nav Links -->
        <div class="flex space-x-10 text-lg font-regular">
            <a href="#" class="hover:text-primary-500">Events</a>

            <div class="relative group">
                <button class="hover:text-primary-500 flex items-center">
                    About us
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <!-- Dropdown -->
                <div class="absolute hidden group-hover:block bg-white mt-2 shadow-lg rounded-md z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Mission</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Team</a>
                </div>
            </div>

            <a href="#" class="hover:text-primary-500">Gallery</a>
            <a href="#" class="hover:text-primary-500">Donate</a>
            <a href="#" class="hover:text-primary-500">Get Involved</a>
            <a href="#" class="hover:text-primary-500">Contact Us</a>
        </div>

        <!-- Auth Buttons -->
        <div class="flex space-x-2">
            <x-secondarybutton href="#" text="Login" />
            <x-button href="#" text="Signup" />
            {{-- <a href="#" class="h-[48px] flex items-center font-regular justify-center  text-red-800 hover:text-primary-400 border border-primary-500 hover:border-primary-400 px-5 py-2 rounded-md bg-primary-500/20 hover:bg-primary-400/20 transition">Login</a>
            <a href="#" class="h-[48px] flex items-center font-regular justify-center  bg-primary-500 text-white px-5 py-2 rounded-md hover:bg-primary-600 transition">Signup</a> --}}
        </div>
    </div>
</nav>
