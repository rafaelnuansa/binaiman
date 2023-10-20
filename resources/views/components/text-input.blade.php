@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-3 block bg-white dark:bg-gray-900 text-black dark:text-white w-full rounded-md border-0 bg-white/5 py-1.5  shadow-sm ring-1 ring-inset ring-gray-400 dark:ring-white/10 focus:ring-1 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6']) !!}>
