<x-web-layout>
    <section class="bg-gray-300 py-16 dark:bg-gray-900">
        <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
            <h2 class="text-3xl text-gray-900 dark:text-gray-100 font-semibold leading-6 tracking-tight mb-6">Berita Terupdate</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                <a href="{{ route('web.posts.show', $post->slug) }}" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-gray-100">{{ $post->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">{{ $post->created_at->format('d M Y') }}</p>
                      </div>
                </a>
                @endforeach
            </div>
            {{ $posts->links('vendor.pagination.tailwind') }}
        </div>
    </section>
</x-web-layout>
