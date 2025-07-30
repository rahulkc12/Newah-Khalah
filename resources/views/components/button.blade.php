@props(['href' => '#', 'text' => 'Click Me'])

<a href="{{ $href }}"
   {{ $attributes->merge(['class' => 'h-[48px] flex items-center font-regular justify-center  bg-primary-500 text-white px-5 py-2 rounded-md hover:bg-primary-600 transition']) }}>
    {{ $text }}
</a>
