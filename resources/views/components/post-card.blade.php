@props(['slug', 'title', 'createdAt', 'image'])
<a class="group hover:bg-gray-100 rounded-xl p-2 transition-all dark:hover:bg-white/[.05]" href="{{ $slug }}">
    <div
        class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[170] before:absolute before:inset-x-0 before:w-full before:h-full before:bg-gradient-to-t before:from-gray-900/[.7] before:z-[1]">
        <img class="w-full object-cover rounded-xl " src="{{ $image }}" alt="{{ $title }}"
            onerror="this.src='https://www.pulsecarshalton.co.uk/wp-content/uploads/2016/08/jk-placeholder-image.jpg'; this.alt='Image not found';">
    </div>
    <h3 class="mt-5 text-xl text-gray-800 font-bold dark:text-gray-300 dark:group-hover:text-white">
        {{ $title }}
    </h3>
    <p class="mt-3 inline-flex items-center gap-x-2 text-sm font-semibold text-gray-800 dark:text-gray-200">
        {{ $createdAt }}
    </p>
</a>
