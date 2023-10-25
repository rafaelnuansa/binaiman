@props(['name', 'slug', 'image'])
<div>
    <a class="group relative block transform transition-transform duration-300 hover:scale-105"
    href="{{ $slug }}">
    <div
        class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[250px] before:absolute before:inset-x-0 before:w-full before:h-full before:bg-gradient-to-t before:from-gray-900/[.7] before:z-[1]">
        <img class="w-full h-full absolute top-0 left-0 object-cover"
        src="{{ $image }}"
        alt="{{ $name }}"
        onerror="this.src='https://www.pulsecarshalton.co.uk/wp-content/uploads/2016/08/jk-placeholder-image.jpg'; this.alt='Image not found';">

    </div>

    <div class="absolute bottom-0 inset-x-0 z-10">
        <div class="flex flex-col h-full p-4 sm:p-6">
            <h3
                class="text-md md:text-lg font-semibold text-white group-hover:text-white/[.8] overflow-ellipsis line-clamp-2">
                {{ $name }}
            </h3>
        </div>
    </div>
</a>
</div>
