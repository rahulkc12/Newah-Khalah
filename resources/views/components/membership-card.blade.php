@props([
    'title',
    'price',
    'includes' => [],
    'benefits' => [],
    'button',
    'type' => true,
])


<div class="max-w-sm w-full bg-white border border-gray-200 p-[28px] rounded-md shadow-sm flex flex-col justify-between hover-scale">
    <div class="space-y-8">
        <div>
            <h3 class="text-xl font-semibold">{{ $title }}</h3>
            <p class="text-2xl font-bold text-red-700 mt-1">{{ $price }}</p>
        </div>

        @if (!empty($includes))
            <div>
                <h4 class="text-md font-semibold mb-2">What it includes</h4>
                <ul class="list-disc list-inside space-y-1 text-gray-700 text-[17px]">
                    @foreach ($includes as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (!empty($benefits))
            <div>
                <h4 class="text-md font-semibold mb-2">Benefits</h4>
                <ul class="list-disc list-inside space-y-1 text-gray-700 text-[17px]">
                    @foreach ($benefits as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @if ($type)
        <div class="mt-6">
            <x-secondarybutton href="#" class="w-full" text="{{ $button }}" />
        </div>
    @else
        <div class="mt-6">
            <x-button href="#" class="w-full" text="{{ $button }}" />
        </div>
        
    @endif
</div>
