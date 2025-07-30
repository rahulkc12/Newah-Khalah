@vite('resources/css/app.css')


<x-navbar />
<x-banner :title="'About Us - Newah Khalah'" :text="'A united and empowered Newar diaspora'" class="mt-2"/>
<div class="mx-[120px] my-20">
    <div class="grid grid-cols-2 gap-8">
        <img src="img/women.png" alt="newar_women" class="w-full rounded-sm h-auto">
        <div class="mt-4 space-y-8 flex justify-center items-center flex-col">
            <h2 class="text-2xl text-red-900 font-semibold mb-4">Our Vison</h2>
            <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
              Our vision at Colorado Newah Khalah is to be a dynamic and inclusive platform where the Newari culture thrives and resonates within and beyond the Nepali diaspora in Colorado. We envision a community where the beauty and depth of Newari traditions are actively celebrated, appreciated, and integrated into the wider Colorado cultural tapestry. As we look to the future, we aspire to cultivate a space where learning, celebration, and cultural exchange illuminate the uniqueness of our heritage, fostering a global community that values diversity, unity, and cultural preservation
            </p>
        </div>
    </div>
</div>
<x-footer />

