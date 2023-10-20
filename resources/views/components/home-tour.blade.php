
    <section class="bg-gray-100 py-16">
        <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
            <div class="mb-6">
                <h2 class="text-3xl font-semibold leading-6 tracking-tight">Destinasi Wisata</h2>
                <p class="text-sm text-muted-foreground">Destinasi wisata di Tenjolaya.</p>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($tours as $tour)
                <div class="relative">
                    <a href="{{ route('web.wisata.show', $tour->slug) }}" class="block">
                        <img class="rounded-lg object-cover h-[200px] w-full"
                            src="{{ $tour->image }}" alt="{{ $tour->name }}" />
                        <div
                            class="overlay bg-black bg-opacity-0 text-white text-opacity-0 transition-opacity duration-1000 hover:bg-opacity-75 hover:text-opacity-100 absolute inset-0 flex flex-col justify-end p-4">
                            <h5 class="mb-2 text-xl font-bold tracking-tight line-clamp-2">{{ $tour->name }}</h5>
                            <p class="mb-3 font-normal line-clamp-2">{{ $tour->tour_category->name }}</p>
                        </div>
                    </a>
                </div>
                                                
                
                @endforeach
            </div>
            <div class="mt-8 text-center">
                <a href="{{ route('web.wisata') }}"
                    class="inline-block px-6 py-3 text-sm font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Lihat Semua Wisata
                </a>
            </div>
        </div>
    </section>
