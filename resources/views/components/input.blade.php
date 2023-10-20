<!-- resources/views/components/x-input.blade.php -->

@props(['type' => 'text', 'label' => '', 'name', 'value' => '', 'required' => false, 'autofocus' => false])

<div class="mb-4">
    <label for="{{ $name }}" class="text-gray-600 dark:text-white text-sm font-semibold">{{ $label }}</label>
    <input
        type="{{ $type }}"
        class="w-full border-2 border-gray-200 dark:border-gray-600 rounded-md p-2 text-gray-800 dark:text-white shadow-sm focus:ring focus:ring-blue-300"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ $value }}"
        @if($required) required @endif
        @if($autofocus) autofocus @endif
    />
</div>
