@vite('resources/css/app.css')
<script src="//unpkg.com/alpinejs" defer></script>

<x-navbar />
<div style="background-image: url('img/nyatapole-images.png');" class="h-[634px] bg-cover bg-center flex flex-col items-center justify-center">
    <p class="text-lg font-regular text-white mb-4"> Connecting Newars Across the USA</p>
    <h1 class="text-5xl text-white font-bold mb-6">"Welcome to Newah Khalah"</h1>
    <p class="text-2xl font-medium text-white mb-4">Preserving our heritage , Strengthening our community and  Celebrating together</p>
    <div class="flex space-x-2">
        <x-secondarybutton href="#" text="View Upcoming Events"/>
        <x-button href="#" text="Support Us"/>
        </div>
        <!-- Add more cards as needed -->
</div>
<div class="lg:mx-[120px] md:mx-[80px] mx-[60px] my-20">
    <div class="grid lg:grid-cols-2  md:grid-cols-2 xs:grid-cols-1 gap-8">
        <img src="img/women.png" alt="newar_women" class="w-full rounded-sm h-auto">
        <div class="mt-4 space-y-8 flex justify-center items-center flex-col">
            <h2 class="text-2xl text-red-900 font-semibold mb-4 md:text-black">About Newah Khalah</h2>
            <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <x-button href="#" text="Learn More" />
            
        </div>
    </div>
</div>
<div class="mx-[40px] my-20">
    <div class="my-8 flex flex-col justify-center items-center">
        <h2 class="text-2xl text-red-900 font-semibold mb-[4px]">Upcoming Events</h2>
        <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
              Let’s Celebrate Together
            </p>

    </div>
    {{-- <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
    <x-eventscard />
    <x-eventscard />
    </div> --}}

<div x-data="{ activeIndex: 0, cards: [0, 1, 2] }" class="relative w-full overflow-hidden grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
    <!-- Wrapper -->
    <div class="flex transition-transform duration-500 ease-in-out"
         :style="'transform: translateX(-' + (activeIndex * 100) + '%)'"
         style="width: 300%">
        <!-- Card 1 -->
        <div class="w-full md:w-1/2 flex-shrink-0 px-4">
            <x-eventscard />
        </div>

        <!-- Card 2 -->
        <div class="w-full md:w-1/2 flex-shrink-0 px-4">
            <x-eventscard />
        </div>

        <!-- Card 3 (optional) -->
        <div class="w-full md:w-1/2 flex-shrink-0 px-4">
            <x-eventscard />
        </div>
    </div>

    <!-- Left Button -->
    <button
        @click="activeIndex = Math.max(activeIndex - 1, 0)"
        class="absolute top-1/2 left-2 -translate-y-1/2 z-10 bg-white text-black w-10 h-10 rounded-full shadow-lg flex items-center justify-center hover:bg-red-700 hover:text-white transition"
    >
        ‹
    </button>

    <!-- Right Button -->
    <button
        @click="activeIndex = Math.min(activeIndex + 1, cards.length - 1)"
        class="absolute top-1/2 right-2 -translate-y-1/2 z-10 bg-white text-black w-10 h-10 rounded-full shadow-lg flex items-center justify-center hover:bg-red-700 hover:text-white transition"
    >
        ›
    </button>
</div>

</div>
<div class="lg:mx-[120px] md:mx-[80px] mx-[60px]my-20 flex flex-col justify-center items-center gap-8">
    <div class="mt-8 flex flex-col justify-center items-center">
        <h2 class="text-2xl text-red-900 font-semibold mb-[4px]">Moments That Matter</h2>
        <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
              Experience the joy, unity, and tradition of our past events through these powerful snapshots.
            </p>

    </div>
    <div class="w-full flex flex-wrap items-center gap-x-4 gap-y-4">
        <div class="h-60 flex-1/4 rounded-2xl bg-blue-400 flex justify-center items-center text-amber-50">06</div>
        <div class="h-60 flex-1/4 rounded-2xl bg-blue-400 flex justify-center items-center text-amber-50">07</div>
        <div class="h-60 flex-1/4 rounded-2xl bg-blue-400 flex justify-center items-center text-amber-50">08</div>
        <div class="h-60 flex-1/4 rounded-2xl bg-blue-400 flex justify-center items-center text-amber-50">09</div>
        <div class="h-60 flex-1/4 rounded-2xl bg-blue-400 flex justify-center items-center text-amber-50">10</div>
    </div>

    <x-secondarybutton href="#" text="View More" class="w-[388px]"/>
</div>
<div style="background-image:linear-gradient(to left, rgba(255, 255, 255, 0), rgba(0, 0, 0, 0.9)), url('img/lakhe.png');" class="mt-12 px-36 py-40 h-[518px] w-full bg-cover bg-center flex flex-col text-left">
    <h2 class="text-3xl text-left text-white font-bold mb-6">Join Us in Celebrating Our Heritage</h2>
    <p class="text-md w-[680px] text-white font-regular mb-8">Your donation helps us continue our mission to celebrate our culture, support our members, and host meaningful events.
Every dollar goes toward cultural education, event organization, and outreach.</p>
    <div class="flex space-x-2">
        <x-secondarybutton href="#" text="Become a Member"/>
        <x-button href="#" text="Donate Now"/>
        </div>
</div>
<div style="background-image: url('img/background.svg')" class="h-[572px] bg-cover bg-center px-120 py-16 space-y-8">
    <div class="mt-8 flex flex-col justify-center items-center">
        <h2 class="text-2xl text-red-900 font-semibold mb-[4px]">Stay Connected</h2>
        <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
              Don’t Miss an Update
            </p>
        </div>
        <p class="text-lg text-center font-regular text-gray-800 font-regular leading-relaxed">
            Subscribe to our monthly newsletter and stay in the loop with upcoming events, community news, and cultural insights.
        </p>
        <div class="space-y-4">
        <div class="flex flex-1/2 space-x-4"> 
            <div class="w-full flex flex-col items-left space-y-2">
            <p class="text-md font-regular text-gray-800"> First Name</p>
            <input type="text" placeholder="Enter your first name" class=" text-lg  text-gray-500 border border-gray-400 font-regular rounded-lg px-4 py-2">
            </div>
            <div class="w-full flex flex-col items-left space-y-2">
            <p class="text-md font-regular text-gray-800">Last Name</p>
            <input type="text" placeholder="Enter your last name" class=" text-lg  text-gray-500 border border-gray-400 font-regular rounded-lg px-4 py-2">
            </div>
        </div>
            <div class="flex flex-col items-left space-y-2">
            <p class="text-md font-regular text-gray-800">Email</p>
            <input type="email" placeholder="Enter your email" class=" text-lg  text-gray-500 border border-gray-400 font-regular rounded-lg px-4 py-2">
            </div>
            <x-button href="#" text="Subscribe to our Newsletter" />


        </div>
    
</div>
<x-footer />