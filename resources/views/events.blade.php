@vite('resources/css/app.css')


<x-navbar />
<x-banner :title="'Events – Celebrate with Newah'" :text="'Experience Culture. Celebrate Together.'" />
<div class="lg:mx-[120px] md:mx-[80px] mx-[60px] my-20">
     <div class="mt-12 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
        <x-eventscard />
        <x-eventscard />
        <x-eventscard />
        <x-eventscard />

    </div>
</div>
<x-footer />