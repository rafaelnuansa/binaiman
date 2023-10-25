@props(['name', 'job', 'image', 'slug'])
<div class="text-center">
    <img class="rounded-full w-24 h-24 mx-auto"
        src="{{ $image }}"
        alt="{{ $name }}"
        onerror="this.src='https://www.pulsecarshalton.co.uk/wp-content/uploads/2016/08/jk-placeholder-image.jpg'; this.alt='Image not found';"
        >
    <div class="mt-2 sm:mt-4">
        <h3 class="font-medium text-gray-800 dark:text-gray-200">
            {{ $name }}
        </h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">
            {{ $job }}
        </p>
    </div>
</div>
