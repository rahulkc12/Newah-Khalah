@props(['title' => 'About us', 'text' => 'Click Me'])


<div class="h-[180px] pt-10 bg-cover bg-center flex flex-col justify-center items-center space-y-2"
     style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(0, 0, 0, 0.9)), url('{{ asset('img/banner1.png') }}');">
    <h3 class="text-white font-bold text-3xl">{{ $title }}</h3>
    <p class="text-white font-regular text-base">{{ $text }}</p>
</div>