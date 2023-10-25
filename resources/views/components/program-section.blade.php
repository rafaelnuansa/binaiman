
<section>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="mx-auto  mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Program Kami</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">Program kami copywriting</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
        @foreach ($programs as $program)
        <x-program-card
        :name="$program->name"
        :image="$program->image"
        :slug="route('web.programs.show', $program->slug)"/>


        @endforeach

        </div>
    </div>
</section>
