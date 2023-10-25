<section>
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">{{ __('general.our_team') }} </h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">Our Creative People</p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 md:gap-12">
            @foreach ($teams as $team)
                <x-team-card :name="$team->name" :job="$team->job" :image="$team->image" :slug="$team->slug" />
            @endforeach
        </div>
</section>
