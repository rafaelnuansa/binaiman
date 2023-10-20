@php 
$title = 'Pencarian';
@endphp
<x-title :title="$title" />
<x-app-layout>
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-10">
            <form action="{{ route('web.search') }}" method="GET">
                <div class="flex">
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">Semua Tipe <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div class="hidden">
                        <input type="hidden" name="type" id="type" value="{{ old('type', $typeFilter) }}">
                    </div>
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    onclick="selectType('all')">Semua</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    onclick="selectType('wisata')">Wisata</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    onclick="selectType('produk')">Produk</button>
                            </li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" name="q" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                            placeholder="Cari produk atau wisata..." value="{{ old('q', $searchTerm) }}">
                        @error('q')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                        <button type="submit"
                            class="absolute top-0 bottom-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        

        @if (isset($results))
            @if ($typeFilter === 'wisata')

                <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4 mb-4">
                        @foreach ($results as $tour)
                            <div
                                class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('web.wisata.show', $tour->slug) }}" class="aspect-w-16 aspect-h-9">
                                    <img class="rounded-t-lg object-cover h-[200px] w-full object-center "
                                        src="{{ $tour->image }}" alt="{{ $tour->name }}" />
                                </a>
                                <div class="p-5">
                                    <a href="{{ route('web.wisata.show', $tour->slug) }}">
                                        <h5
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">
                                            {{ $tour->name }}</h5>
                                    </a>
                                    <div class="flex items-center justify-between mb-4">
                                        <p class="font-semibold text-sm text-gray-700 dark:text-gray-400 line-clamp-2">
                                            {{ $tour->tour_category->name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @elseif ($typeFilter === 'produk')
                <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4 mb-4">
                        @foreach ($results as $product)
                            <div
                                class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('web.produk.show', $product->slug) }}" class="aspect-w-16 aspect-h-9">
                                    <img class="rounded-t-lg object-cover h-[200px] w-full object-center "
                                        src="{{ $product->image }}" alt="{{ $product->name }}" />
                                </a>
                                <div class="p-5">
                                    <a href="{{ route('web.produk.show', $product->slug) }}">
                                        <h5
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">
                                            {{ $product->name }}</h5>
                                    </a>
                                    <div class="flex items-center justify-between mb-4">
                                        <p class="font-semibold text-sm text-gray-700 dark:text-gray-400 line-clamp-2">
                                            {{ $product->product_category->name ?? '' }}</p>
                                        <p class="font-semibold text-sm text-gray-700 dark:text-gray-400 line-clamp-2">
                                            Rp. {{ $product->price }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            </div>
            </div>
        @endif
    </section>
</x-app-layout>

<script>
    function selectType(type) {
        document.getElementById('dropdown-button').textContent = type.charAt(0).toUpperCase() + type.slice(
            1);
        document.getElementById('type').value = type;
        document.getElementById('dropdown').classList.add('hidden');
    }
</script>
