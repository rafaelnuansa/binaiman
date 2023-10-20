@php 
$title = 'Kelompok Sadar Wisata';

@endphp
<x-title :title="$title" />

<x-app-layout>
    <section class="bg-gray-100 py-16">
        <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-semibold leading-6 tracking-tight mb-6">Daftar Pokdarwis</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($pokdarwis as $item)
                <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#" class="aspect-w-16 aspect-h-9">
                    <img class="object-cover h-[200px] w-full object-center "
                        src="{{ $item->image }}" alt="{{ $item->name }}" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">
                            {{ $item->name }}</h5>
                    </a>
                </div>
            </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
