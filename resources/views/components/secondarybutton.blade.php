@props(['href' => '#', 'text' => 'Click Me'])

<a href="{{ $href }}"
   {{ $attributes->merge(['class' => 'h-[48px] flex items-center font-regular justify-center  text-red-800 hover:text-primary-400 border border-primary-500 hover:border-primary-400 px-5 py-2 rounded-md bg-primary-500/20 hover:bg-primary-400/20 transition']) }}>
    {{ $text }}
</a>
