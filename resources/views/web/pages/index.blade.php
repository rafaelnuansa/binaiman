
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

@php
    $title = 'Halaman';
@endphp

<x-title :title="$title" />
<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Halaman</h1>
            </div>          
        </div>
    </section>

    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="w-full ">
                <h2 class="text-2xl font-semibold dark:text-white">List Halaman</h2>
                <ul class="mt-4">
                    @foreach ($pages as $page)
                        <li class="mb-4  border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                            <a href="{{ route('web.pages.show', $page->slug) }}" class="text-blue-500 hover:underline dark:text-blue-400">{{ $page->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>    
</x-app-layout>