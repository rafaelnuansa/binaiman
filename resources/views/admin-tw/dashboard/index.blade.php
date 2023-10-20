<!-- resources/views/layouts/admin-layout.blade.php -->

<x-admin-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <x-card>
            <h5 class="text-lg font-semibold dark:text-white">Halaman</h5>
            <p class="text-3xl font-bold dark:text-white">{{ $pageCount }}</p>
        </x-card>

        <x-card>
            <h5 class="text-lg font-semibold dark:text-white">Foto Galeri</h5>
            <p class="text-3xl font-bold dark:text-white">{{ $photoCount }}</p>
        </x-card>

        <x-card>
            <h5 class="text-lg font-semibold dark:text-white">Postingan</h5>
            <p class="text-3xl font-bold dark:text-white">{{ $postCount }}</p>
        </x-card>

        <x-card>
            <h5 class="text-lg font-semibold dark:text-white">Produk</h5>
            <p class="text-3xl font-bold dark:text-white">{{ $productCount }}</p>
        </x-card>

        <x-card>
            <h5 class="text-lg font-semibold dark:text-white">Slider</h5>
            <p class="text-3xl font-bold dark:text-white">{{ $sliderCount }}</p>
        </x-card>

        <x-card>
            <h5 class="text-lg font-semibold dark:text-white">Pengguna</h5>
            <p class="text-3xl font-bold dark:text-white">{{ $userCount }}</p>
        </x-card>

        <x-card>
            <h5 class="text-lg font-semibold dark:text-white">Desa</h5>
            <p class="text-3xl font-bold dark:text-white">{{ $villageCount }}</p>
        </x-card>
    </div>
</x-admin-layout>
