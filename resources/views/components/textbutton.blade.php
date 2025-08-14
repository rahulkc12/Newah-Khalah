@props(['href' => '#', 'text' => 'Click Me'])

<a href="{{ $href }}"
   {{ $attributes->merge(['class' => " h-[24px] gap-1 py-2 flex items-center font-medium text-red-900 hover:text-primary-400  transition "]) }}>
    {{ $text }}
    {{-- <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.16634 10L15.833 10" stroke="#8C0E02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.99967 4.16665L15.833 9.99998L9.99967 15.8333" stroke="#8C0E02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg> --}}

</a>