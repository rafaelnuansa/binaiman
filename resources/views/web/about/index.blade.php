@php
$title = 'Tentang';
@endphp
<x-meta-tags
    :description="isset($metaDescription) ? $metaDescription : null"
    :ogUrl="isset($ogUrl) ? $ogUrl : null"
    :ogTitle="isset($ogTitle) ? $ogTitle : null"
    :ogDescription="isset($ogDescription) ? $ogDescription : null"
    :ogImage="isset($ogImage) ? $ogImage : null"
    :twitterDomain="isset($twitterDomain) ? $twitterDomain : null"
    :twitterUrl="isset($twitterUrl) ? $twitterUrl : null"
    :twitterTitle="isset($twitterTitle) ? $twitterTitle : null"
    :twitterDescription="isset($twitterDescription) ? $twitterDescription : null"
    :twitterImage="isset($twitterImage) ? $twitterImage : null"
/>

<x-title :title="$title" />
<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Ulin Ka Tenjolaya</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Dijamin Sagala Aya.</p>

            </div>
            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('logo.png') }}" alt="Bina Iman Mulia">
            </div>
        </div>
    </section>

    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="w-full ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tenjolaya Overview
                </h2>
                <p class="mb-4 text-gray-500 sm:text-xl dark:text-gray-400">
                    Pemerintah Kabupaten Bogor mendorong pengembangan wisata di wilayah Barat Kabupaten Bogor, melalui
                    Rencana Induk Pembangunan Kepariwisataan Kabupaten Bogor Tahun 2020-2025 disebutkan secara khusus
                    Kecamatan Tenjolaya menjadi target dalam pelaksanaan program Pengembangan diversifikasi daya Tarik
                    wisata pada sub-cluster Eduwisata Cagar Budaya pada tahun 2023-2024.
                </p>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">
                    Pengembangan eduwisata cagar budaya ini diharapkan akan merangsang pembangunan dan peningkatan
                    ekonomi masyarakat di sekitar lokasi wisata, juga sebagai alternative bagi wisatawan yang sudah
                    jenuh dengan wisata konvensional.
                </p>
            </div>
        </div>
    </section>



    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="w-full">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tenjolaya At Glance
                </h2>
                <p class="mb-4 text-gray-500 sm:text-xl dark:text-gray-400">
                    Tenjolaya adalah sebuah kecamatan di Kabupaten Bogor, Provinsi Jawa Barat, Indonesia. Tenjolaya merupakan kecamatan hasil pemekaran dengan Kecamatan Ciampea pada tahun 2004.

                </p>
                <p class="mb-4 text-gray-500 sm:text-xl dark:text-gray-400">
                    Luas : 4.126,99 hektar
                </p>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">
                    Tenjolaya adalah sebuah kecamatan di Kabupaten Bogor, Provinsi Jawa Barat, Indonesia. Tenjolaya merupakan kecamatan hasil pemekaran dengan Kecamatan Ciampea pada tahun 2004.

                </p>
            </div>
        </div>
    </section>



</x-app-layout>
