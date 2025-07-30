@vite('resources/css/app.css')


<x-navbar />
<x-banner :title="'About Us - Newah Khalah'" :text="'A united and empowered Newar diaspora'"/>
<div class="lg:mx-[120px] md:mx-[80px] mx-[60px] my-20">
    <div class="grid grid-cols-2 gap-8">
        <img src="img/women.png" alt="newar_women" class="w-full rounded-sm h-auto">
        <div class="mt-4 space-y-8 flex justify-center items-center flex-col">
            <h2 class="text-2xl text-red-900 font-semibold mb-4">Our Vision</h2>
            <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
              At Colorado Newah Khalah, we’re building a vibrant community where Newari culture is celebrated and shared  both within Colorado and beyond. We aim to create a space for connection, learning, and cultural pride that honors our heritage while embracing diversity and unity.
            </p>
        </div>
    </div>
    <div class="grid grid-cols-2 mt-10 gap-8">
        <div class="mt-4 space-y-8 flex justify-center items-center flex-col">
            <h2 class="text-2xl text-red-900 font-semibold mb-4">Our Mission</h2>
            <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
             Colorado Newah Khalah is here to keep Newari culture alive and thriving in Colorado. We bring generations together to celebrate our festivals, food, language, and traditions and we welcome everyone to join in. Through events, education, and community connections, we aim to share the richness of our heritage while building understanding and unity across cultures.
            </p>
        </div>
        <img src="img/women.png" alt="newar_women" class="w-full rounded-sm h-auto">
        </div>
</div>
<div class="lg:mx-[120px] md:mx-[80px] mx-[60px] my-20 flex flex-col justify-center items-center gap-8 m-8">
<div class=" flex flex-col justify-center items-center">
        <h2 class="text-2xl text-red-900 font-semibold mb-[4px]">What We Do</h2>
        <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
              We serve the community through
            </p>
</div>
<div class=" grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 justify-center items-center gap-6">
    <div class="h-full bg-white border border-gray-200 drop-shadow-lg rounded-lg p-4 flex flex-col items-center">
        <h3 class="text-lg text-centerfont-semibold mb-2"> Cultural Events & Festivals</h3>
        <p class="text-md text-gray-800 text-center">Hosting traditimonal events like Yomari Punhi, Samuhik Bratabandha, Teej, and Nepal Sambat celebrations.</p>
    </div>
    <div class="h-full bg-white border border-gray-200 drop-shadow-lg rounded-lg p-4 flex flex-col items-center">
        <h3 class="text-lg text-center font-semibold mb-2"> Social Support & Networking</h3>
        <p class="text-md text-gray-800 text-center">Creating safe spaces for Newars  to connect, collaborate, and care for one another.</p>
    </div>
    <div class="h-full bg-white border border-gray-200 drop-shadow-lg rounded-lg p-4 flex flex-col items-center">
        <h3 class="text-lg text-center font-semibold mb-2"> Youth Engagement</h3>
        <p class="text-md text-gray-800 text-center">Organizing language classes, cultural dance training, storytelling, and mentorship for younger generations.</p>
    </div>
    <div class="h-full bg-white border border-gray-200 drop-shadow-lg rounded-lg p-4 flex flex-col items-center">
        <h3 class="text-lg text-center font-semibold mb-2"> Cultural Education </h3>
        <p class="text-md text-gray-800 text-center">Preserving oral history, language (Nepal Bhasa), music, and art through curated content, workshops, and shared experiences.</p>
    </div>
    </div>
</div>
<div class="lg:mx-[120px] md:mx-[80px] mx-[60px] my-20 flex flex-col justify-center items-center gap-8 m-4">
<div class="flex flex-col justify-center items-center">
        <h2 class="text-2xl text-red-900 font-semibold mb-[4px]">Meet our Team</h2>
        <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
              We are a passionate group of volunteers, artists, educators, and community leaders.
            </p>
</div>
<div class=" grid grid-cols-2 justify-center items-center gap-4 ">
    <div class="h-[400px] rounded-lg  flex flex-col items-center">
       <img src="img/women.png" alt="teams">
    </div>
    <div class="h-[400px] rounded-lg flex flex-col items-center">
        <img src="img/women.png" alt="teams">
    </div>
</div>
</div>
<x-footer />

