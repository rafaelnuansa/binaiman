<section class="bg-gray-100 py-16">
    <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">

        <div class="mb-6">
            <h2 class="text-3xl font-semibold leading-6 tracking-tight">Produk Kami</h2>
            <p class="text-sm text-muted-foreground">Produk dari Desa yang ada di Kec.Tenjolaya.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4">
            @foreach ($products as $product)
                <div
                    class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('web.produk.show', $product->slug) }}" class="aspect-w-16 aspect-h-9">
                        <img class="rounded-t-lg object-cover h-[200px] w-full object-center "
                            src="{{ $product->image }}" alt="{{ $product->title }}" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('web.produk.show', $product->slug) }}">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">
                                {{ $product->title }}</h5>
                        </a>
                        <div class="flex items-center justify-between mb-4">
                            <p class="font-semibold text-sm text-gray-700 dark:text-gray-400 line-clamp-2">
                                {{ $product->product_category->name }}</p>
                            <p class="font-semibold text-sm text-gray-700 dark:text-gray-400">Rp. {{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
          
            {{ $products->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</section>
