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


                        <h2 class="text-3xl font-bold lg:text-4xl dark:text-white">{{ $program->name }}</h2>

                        <figure>
                            <img class="w-full object-cover rounded-xl" src="{{ $program->image }}"
                                alt="{{ $program->name ?? $program->image }}">
                            <figcaption class="mt-3 text-sm text-center text-gray-500">
                                {{ $program->name }}
                            </figcaption>
                        </figure>

                        {!! $program->description !!}

                    </div>
                </div>
            </div>
            <!-- End Content -->

            <!-- Sidebar -->
            <div
                class="lg:col-span-1 lg:w-full lg:h-full lg:bg-gradient-to-r lg:from-gray-50 lg:via-transparent lg:to-transparent dark:from-slate-800">
                <div class="sticky top-0 left-0 py-8 lg:pl-4">
                    <h2 class="text-2xl text-gray-950 dark:text-gray-100 font-semibold mb-6">Other Programs</h2>
                    <div class="space-y-6">
                        @foreach ($programs as $pgrm)
                            <!-- Media -->
                            <a class="group flex items-center gap-x-6"
                                href="{{ route('web.programs.show', $pgrm->slug) }}">
                                <div class="grow">
                                    <span
                                        class="text-sm font-bold text-gray-800 group-hover:text-blue-600 dark:text-gray-200 dark:group-hover:text-blue-500">
                                        {{ $pgrm->name }}
                                    </span>
                                </div>

                                <div class="flex-shrink-0 relative rounded-lg overflow-hidden w-20 h-20">
                                    <img class="w-full h-full absolute top-0 left-0 object-cover rounded-lg"
                                        src="{{ $pgrm->image }}" alt="{{ $pgrm->name }}">
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
