<section>
    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">{{ __('general.latest_post') }}</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">Informasi Terkini.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-1">

            @foreach ($posts as $post)
            <x-post-card :title="$post->title" :image="$post->image" :createdAt="$post->created_at->format('d M Y')" :slug="route('web.posts.show', $post->slug)"/>
            @endforeach
            <!-- Card -->

        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->
</section>
