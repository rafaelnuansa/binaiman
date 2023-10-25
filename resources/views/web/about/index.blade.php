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
            <div class="mr-auto place-self-center lg:col-span-10">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">{{ __('general.about_us') }}</h1>

            </div>
            <div class="lg:mt-0 lg:col-span-2 lg:flex">
                <img src="{{ asset('logo.png') }}" alt="Bina Iman Mulia">
            </div>
        </div>
    </section>

    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="w-full ">

                <p class="mb-4 text-gray-500 sm:text-xl dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolore iusto aliquid, possimus hic ex culpa dignissimos. Ipsam praesentium sapiente temporibus aliquam, inventore tempora nihil dolorem minima, atque facilis ut!
                </p>
            </div>
        </div>
    </section>




</x-app-layout>
