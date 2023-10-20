<!DOCTYPE html>
<html x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" x-bind:class="{ 'dark': darkMode }"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="canonical" href="{{ route('home') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <!-- HTML Meta Tags -->
    <title>{{ isset($title) ? $title . ' - ' : '' }}</title>
    <!-- resources/views/components/meta-tags.blade.php -->

    <meta name="description" content="{{ $description ?? 'Tenjolaya adalah sebuah kecamatan di Kabupaten Bogor, Provinsi Jawa Barat, Indonesia. Tenjolaya merupakan kecamatan hasil pemekaran dengan Kecamatan Ciampea pada tahun 2004' }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ $ogUrl ?? env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $ogTitle ?? 'Bina Iman Mulia' }}">
    <meta property="og:description" content="{{ $ogDescription ?? 'Tenjolaya adalah sebuah kecamatan di Kabupaten Bogor, Provinsi Jawa Barat, Indonesia. Tenjolaya merupakan kecamatan hasil pemekaran dengan Kecamatan Ciampea pada tahun 2004' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('logo.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="{{ $twitterDomain ?? 'BinaImanMulia.com' }}">
    <meta property="twitter:url" content="{{ $twitterUrl ?? env('APP_URL') }}">
    <meta name="twitter:title" content="{{ $twitterTitle ?? 'Bina Iman Mulia' }}">
    <meta name="twitter:description" content="{{ $twitterDescription ?? 'Tenjolaya adalah sebuah kecamatan di Kabupaten Bogor, Provinsi Jawa Barat, Indonesia. Tenjolaya merupakan kecamatan hasil pemekaran dengan Kecamatan Ciampea pada tahun 2004' }}">
    <meta name="twitter:image" content="{{ $twitterImage ?? asset('logo.png') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white dark:bg-gray-900">
        <x-header></x-header>
        <!-- Page Content -->
        {{ $slot }}
        <x-footer></x-footer>
    </div>
</body>

</html>
