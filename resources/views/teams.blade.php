@vite('resources/css/app.css')


<x-navbar />
<x-banner :title="'Team Members – Meet the Hearts Behind Newah'" :text="'Meet the people who make Newah possible.'" />

<div class="lg:mx-[120px] md:mx-[80px] mx-[60px] my-20 flex flex-col justify-center items-center gap-2 m-4">
    {{-- <div class="flex flex-col justify-center items-center">
        <h2 class="text-2xl text-red-900 font-semibold mb-[4px]">Meet our Team</h2>
        <p class="text-base text-center text-gray-800 font-regular leading-relaxed">
            We are a passionate group of volunteers, artists, educators, and community leaders.
        </p>
    </div> --}}
    <div class="w-full flex flex-wrap items-center justify-between px-2 py-4">
  <!-- Title -->
  <h2 class="text-2xl font-bold text-red-800">Members</h2>

  <!-- Filters -->
  <div class="flex flex-wrap items-center gap-4">
    <!-- Tenure Dropdown -->
    <div class="flex items-center space-x-2">
      <span class="text-black font-medium">Tenure:</span>
      <select class="rounded-md px-4 py-2 border border-gray-300 bg-neutral-50 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500">
        <option>2023-2025</option>
        <option>2021-2023</option>
        <option>2019-2021</option>
      </select>
    </div>

    <!-- Group By Dropdown -->
    <div class="flex items-center space-x-2">
      <span class="text-black font-medium">Group By:</span>
      <select class="rounded-md px-4 py-2 border border-gray-300 bg-neutral-50 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500">
        <option>All</option>
        <option>Executive</option>
        <option>General</option>
        <option>Life Members</option>
      </select>
    </div>
  </div>
</div>

   <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
       <x-teamcard />
       <x-teamcard />
       <x-teamcard />
       <x-teamcard />
       <x-teamcard />
       <x-teamcard />   
   </div>
</div>

<x-footer />