<!-- resources/views/components/sidebar/nav-link.blade.php -->

@props(['url', 'label'])
@php
    $active = request()->url() == $url;
@endphp

<li>
    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md  dark:text-white @if ($active)  bg-gray-100  dark:bg-gray-900  @endif"
        href="{{ $url }}">
        {{ $label }}
    </a>
</li>
