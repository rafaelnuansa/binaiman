<!-- resources/views/components/x-button.blade.php -->

@props(['type' => 'submit', 'label'])

<button type="{{ $type }}"
    class="px-4 py-2 bg-gray-900 dark:bg-slate-200 dark:text-gray-900 text-white rounded-md hover:bg-gray-600 focus:ring focus:ring-gray-300">
    {{ $label }}
</button>
