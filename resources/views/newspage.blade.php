@vite('resources/css/app.css')
<x-navbar />
<div class="max-w-7xl lg:mx-[120px] md:mx-[80px] sm:mx-[40px] py-10 space-y-12">

    {{-- Breadcrumb --}}
    <div class="text-sm text-gray-600 flex flex-row mb-4 space-x-2">
        <a href="/news" class="hover:underline flex flex-row"> <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8332 10.5H4.1665" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.99984 16.3333L4.1665 10.5L9.99984 4.66667" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>News & Articles</a> /
        <span>Yomari: More Than a Dumpling</span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

        {{-- Main Content --}}
        <div class="lg:col-span-7 space-y-4">
            <div >
                <h1 class="text-2xl font-semibold mb-2">Yomari: More Than a Dumpling</h1>
                <p class="text-gray-600">Yomari isn’t just food—it’s a festival of memory, connection, and cultural pride. For the Newar
                    community, it represents warmth, gratitude, and the spirit of harvest.</p>
            </div>

            {{-- Feature Image --}}
            <img src="/img/gallery/i4.png" class="w-full h-[350px] rounded-xl object-cover" />

            {{-- Author + date --}}
            <p class="text-sm text-gray-500">By Newah Editorial Team.<br/> 25 December, 2024</p>

            {{-- Article Body --}}
            <div class="space-y-6 border rounded-xl border-gray-300 p-4 text-gray-700 leading-relaxed text-md">

                <div>
                    <strong>A Dumpling Full of History</strong><br>
                    Yomari isn’t just a sweet treat. It’s a symbol of abundance, tradition, and unity for the
                    Newar people. Every year...
                </div>

                <p><strong>Where It Comes From</strong><br>
                    According to legend, the yomari was first made by a couple in Panauti...</p>

                <p><strong>How It’s Made (Traditionally)</strong></p>

                <p>Ingredients:<br>
                    • Freshly milled rice flour dough<br>
                    • Chaku (molasses) or khuwa (milk solids)<br>
                    • Roasted sesame seeds<br>
                    • Ghee for steaming</p>

                <p>Steps:<br>
                    1. Shape the dough into a small pouch…<br>
                    2. Fill it with …<br>
                    3. Steam until soft and aromatic.<br>
                    4. Offer the first one to the gods…</p>

                <p>In the U.S., making yomaris has become a powerful way...</p>

                <p><strong>More Than a Festival</strong><br>
                    Yomari Punhi isn’t just about food—it includes:<br>
                    • Rituals to honor Annapurna (goddess of food)<br>
                    • Lakhu dance performances by youth<br>
                    • Light offerings under the full moon<br>
                    • Storytelling in Nepal Bhasa about harvest myths<br><br>
                    “When we make yomaris, we are not just feeding our bodies—we are feeding our roots.”
                </p>
            </div>
        </div>

        {{-- Sidebar (Most Read + CTA) --}}
        <div class="lg:col-span-5 space-y-6">
            <div class="border rounded-xl shadow-md border-gray-200 p-2">
                <h3 class="font-semibold flex justify-center items-center m-4">Most Read</h3>
                <div>

                 <x-mostread title="A Night of Rhythm: Highlights from Teej Mahotsav 2025"
                           image="/img/gallery/i1.png"
                           author="Nisha Tuladhar"
                           date="25 September, 2024" />
                <x-mostread title="Growing Up Newah in America — Aarav Shrestha"
                           image="/img/gallery/i2.png"
                           author="Aarav Shrestha"
                           date="25 September, 2024" />
                <x-mostread title="Cultural Fusion: The Newah Experience in the Diaspora"
                           image="/img/gallery/i3.png"
                           author="Priya Shrestha"
                           date="25 September, 2024" />
                <x-mostread title="Teej Mahotsav 2025: A Celebration of Newah Culture"
                           image="/img/gallery/i1.png"
                           author="Nisha Tuladhar"
                           date="25 September, 2024" />
                </div>
            </div>

            <div class="border rounded-xl border-gray-200 p-6 shadow-md">
                <h3 class="font-semibold flex justify-center items-center mb-4">Join Us</h3>
                <p class="text-md flex justify-center items-center mb-3">Want to help make this event a success?</p>
                <div class="flex gap-2">
                    <x-secondarybutton href="#" text="Join as Volunteer"  class=" mt-2 w-full"/>
                    <x-button href="#" text="Like to be Sponsor?" class=" mt-2 w-full " />
                </div>
            </div>
        </div>

    </div>
</div>
<x-footer />