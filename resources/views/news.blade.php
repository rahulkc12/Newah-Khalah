@vite('resources/css/app.css')


<x-navbar />
<x-banner :title="'Gallery – Memories That Bind Us'" :text="'Relive the Moments. Celebrate the Legacy.'" />

<div class="lg:mx-[120px] md:mx-[80px] sm:mx-[40px] my-12 flex flex-col justify-center items-center gap-2 m-4">

    <div class="w-full flex flex-wrap items-center justify-between px-2 py-4">
  <!-- Title -->
  <h2 class="text-2xl font-semibold text-red-800">Latest Memories</h2>

  <!-- Filters -->
  <div class="h-full flex flex-wrap items-center gap-4">
    <div class="flex items-center space-x-2">
    <input type="search" class="h-[45px] w-[240px] rounded-md px-4 py-2 border border-gray-300 bg-neutral-50 text-gray-500 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Search Memories...">
    <button class="h-[45px] w-[45px] rounded-md flex justify-center items-center px-4 py-2 bg-primary-500 text-white hover:bg-primary-400 focus:outline-none focus:ring-2 focus:ring-red-500">
        <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.4373 2.97501H4.56726C2.69726 2.97501 1.65226 5.17501 2.91726 6.60501L7.15226 11.555C7.50102 11.9504 7.69619 12.4578 7.70226 12.985V16.725C7.70226 17.0167 7.81816 17.2965 8.02445 17.5028C8.23074 17.7091 8.51053 17.825 8.80226 17.825C9.094 17.825 9.37379 17.7091 9.58008 17.5028C9.78637 17.2965 9.90226 17.0167 9.90226 16.725V12.985C9.90018 11.9386 9.53028 10.9263 8.85726 10.125L4.62006 5.17501H17.4351L13.2001 10.125C12.5354 10.9311 12.1666 11.9403 12.1551 12.985V18.925C12.1551 19.2167 12.271 19.4965 12.4772 19.7028C12.6835 19.9091 12.9633 20.025 13.2551 20.025C13.5468 20.025 13.8266 19.9091 14.0329 19.7028C14.2392 19.4965 14.3551 19.2167 14.3551 18.925V12.985C14.3453 12.7218 14.3891 12.4594 14.4836 12.2137C14.5781 11.9679 14.7215 11.7438 14.9051 11.555L19.1401 6.60501C20.2973 5.17501 19.3073 2.97501 17.4373 2.97501Z" fill="#FCF8F7"/>
</svg>
</button>
    </div>
  </div>
</div>
<div class="w-full grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

   <x-newscard />
   <x-newscard />
   <x-newscard /> 
  <x-newscard />
</div>
</div>
<x-banner2 :title="'Not sure where to start? '" :text="'We’ll help you choose.'" :primary_text="'Contact Us'" :secondary_text="'Learn more'" :p_href="'/contact'" :s_href="'/about'" />
<x-footer />