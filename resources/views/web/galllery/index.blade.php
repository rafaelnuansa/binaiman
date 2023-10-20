@php 
$title = 'Galeri';

@endphp
<x-title :title="$title" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Gallery
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <h3 class="text-2xl font-semibold mb-4">Photo Gallery</h3>

            @if($photos->count() > 0)
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($photos as $photo)
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ $photo->image }}" alt="{{ $photo->image }}">
                </div>
                @endforeach
            
            </div>
            

            {{ $photos->links('vendor.pagination.tailwind') }}
            @endif
        </div>
    </section>
    

</x-app-layout>
