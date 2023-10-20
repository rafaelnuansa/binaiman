<x-web-layout>
    @push('styles')
    @endpush

    <!-- Blog Article -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
            <!-- Content -->
            <div class="lg:col-span-2">
                <div class="py-8 lg:pr-4">
                    <div
                        class="prose prose-h1:text-3xl prose-h2:text-2xl space-y-1 lg:space-y-1 prose-h1:text-gray-900 dark:prose-h1:text-gray-100 prose-h2:text-gray-900 dark:prose-h2:text-gray-100 text-gray-900 dark:text-gray-300">
                        <a class="inline-flex items-center gap-x-1.5 text-sm text-gray-600 decoration-2 hover:underline dark:text-blue-400"
                            href="{{ route('web.posts') }}">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                            </svg>
                            Back to Blog
                        </a>

                        <h2 class="text-3xl font-bold lg:text-4xl dark:text-white">{{ $post->title }}</h2>

                        <div class="flex items-center gap-x-5">
                            <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-800 dark:text-gray-200"
                                href="#">
                                {{ $post->category->name }}
                            </a>
                            <p class="text-xs sm:text-sm text-gray-800 dark:text-gray-200">
                                {{ $post->created_at->format('d M Y') }}</p>
                        </div>
                        <figure>
                            <img class="w-full object-cover rounded-xl" src="{{ $post->image }}"
                                alt="{{ $post->title ?? $post->image }}">
                            <figcaption class="mt-3 text-sm text-center text-gray-500">
                                {{ $post->title }}
                            </figcaption>
                        </figure>

                        {!! $post->content !!}

                    </div>
                </div>
            </div>
            <!-- End Content -->

            <!-- Sidebar -->
            <div
                class="lg:col-span-1 lg:w-full lg:h-full lg:bg-gradient-to-r lg:from-gray-50 lg:via-transparent lg:to-transparent dark:from-slate-800">
                <div class="sticky top-0 left-0 py-8 lg:pl-4">
                    <h2 class="text-2xl text-gray-950 dark:text-gray-100 font-semibold mb-6">Berita Terkait</h2>
                    <div class="space-y-6">
                        @foreach ($relatedposts as $rpost)
                            <!-- Media -->
                            <a class="group flex items-center gap-x-6"
                                href="{{ route('web.posts.show', $rpost->slug) }}">
                                <div class="grow">
                                    <span
                                        class="text-sm font-bold text-gray-800 group-hover:text-blue-600 dark:text-gray-200 dark:group-hover:text-blue-500">
                                        {{ $rpost->title }}
                                    </span>
                                </div>

                                <div class="flex-shrink-0 relative rounded-lg overflow-hidden w-20 h-20">
                                    <img class="w-full h-full absolute top-0 left-0 object-cover rounded-lg"
                                        src="{{ $rpost->image }}" alt="{{ $rpost->title }}">
                                </div>
                            </a>
                            <!-- End Media -->
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
    <!-- End Blog Article -->


</x-web-layout>
