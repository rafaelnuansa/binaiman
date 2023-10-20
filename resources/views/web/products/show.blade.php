
<x-title :title="$produk->title" />
<x-app-layout>
      <section class="bg-white py-16">
    <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <!-- Gambar Produk -->
            <div class="md:col-span-2 lg:col-span-2">
                <img class="rounded-lg object-cover h-auto w-full" src="{{ asset($produk->image) }}"
                    alt="{{ $produk->title }}" />
            </div>
            <!-- Informasi Produk -->
            <div class="md:col-span-1 lg:col-span-1">
                <h1 class="text-3xl font-semibold leading-6 tracking-tight text-gray-800 mb-3">{{ $produk->title }}</h1>
                <p class="text-2xl font-semibold text-leading-7 text-gray-800 dark:text-gray-400 mb-4">Rp. {{ $produk->price }}</p>
                <p class="text-lg text-gray-700 dark:text-gray-400 mb-4"> {{ $produk->owner }}</p>
                <p class="text-lg text-gray-700 dark:text-gray-400 mb-4">Telepon: {{ $produk->phone }}</p>
                <p class="text-lg text-gray-700 dark:text-gray-400 mb-4">Alamat: {{ $produk->address }}</p>
                <a href="https://wa.me/{{ preg_replace('/[^\d]+/', '', $produk->phone) }}"
                    class="inline-flex items-center justify-center w-full h-12 mt-6 text-lg font-semibold text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Beli Sekarang
                </a>
            </div>
            
        </div>
        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-gray-800">Deskripsi Produk</h2>
            <p class="mt-4 text-lg text-gray-700 dark:text-gray-400"{!! $produk->content !!}</p>
        </div>
    </div>
</section>

    <!-- Produk Serupa -->
    <section class="bg-gray-100 py-16">
        <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-semibold leading-6 tracking-tight mb-6">Produk Serupa</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4">
                @foreach ($relatedProducts as $relatedProduct)
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ route('web.produk.show', $relatedProduct->slug) }}"
                            class="aspect-w-16 aspect-h-9">
                            <img class="rounded-t-lg object-cover h-[200px] w-full object-center"
                                src="{{ asset($relatedProduct->image) }}" alt="{{ $relatedProduct->title }}" />
                        </a>
                        <div class="p-5">
                            <a href="{{ route('web.produk.show', $relatedProduct->slug) }}">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">
                                    {{ $relatedProduct->title }}</h5>
                            </a>
                            <p class="font-semibold text-sm text-gray-700 dark:text-gray-400 line-clamp-2 mb-3">
                                {{ $relatedProduct->product_category->name }}, Rp. {{ $relatedProduct->price }}</p>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>