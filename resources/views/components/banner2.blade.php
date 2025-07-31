@props(['title' => '#', 'text' => '#', 'secondary_text' => '#','primary_text' => '#'])

<div class="h-[468px] w-full rounded-t-3xl" style="background: radial-gradient(ellipse at top, #7d0f04 0%, #120000 70%);">
    <div class="flex flex-col items-center justify-center h-full">
        <h2 class="text-red-700 text-3xl font-bold mb-4">{{ $title }}</h2>
        <p class="text-white text-lg text-center max-w-2xl mb-4">{{ $text }}</p>
        <div class="flex space-x-2">
        <x-secondarybutton href="#" text="{{ $secondary_text }}"/>
        <x-button href="#" text="{{ $primary_text }}"/>
     </div>
    </div>  
</div>
