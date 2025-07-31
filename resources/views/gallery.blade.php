@vite('resources/css/app.css')


<x-navbar />
<x-banner :title="'Gallery – Memories That Bind Us'" :text="'Relive the Moments. Celebrate the Legacy.'" />
<div class="lg:mx-[120px] md:mx-[80px] mx-[60px] my-12 flex flex-col justify-center items-center gap-2 m-4">
<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
       <x-gallerycard />
       <x-gallerycard />
       <x-gallerycard />
        <x-gallerycard />
   </div>
   </div>
<x-footer />