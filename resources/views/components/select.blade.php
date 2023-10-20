@props(['options', 'placeholder' => 'Select an option'])

<select {{ $attributes->merge(['class' => 'py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400']) }}>
    <option value="">{{ $placeholder }}</option>
    @foreach ($options as $option)
        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
    @endforeach
</select>
