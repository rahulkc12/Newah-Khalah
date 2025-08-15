@props(['title', 'image', 'author', 'date'])
{{-- Example Item --}}
                <div class="w-full p-4 rounded space-y-4 hover:bg-gray-200">
                    <div class="flex gap-4">
                        <img src="{{ $image }}" class="h-auto w-[158px] rounded object-cover"/>
                        <div class="text-md flex flex-col justify-between">
                            <p class="font-medium leading-tight">{{ $title }}</p>
                            <p class="text-gray-500">By {{ $author }} <br/>{{ $date }}</p>
                        </div>
                    </div>
                </div>