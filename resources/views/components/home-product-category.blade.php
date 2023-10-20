<section class="bg-white py-16">
    <div class="mx-auto px-4 sm:px-6 md:px-4 lg:max-w-6xl xl:max-w-7xl lg:px-8">
        <div class="mb-6">
            <h2 class="text-3xl font-semibold leading-6 tracking-tight">Kategori Produk</h2>
            <p class="text-sm text-muted-foreground">Cari Produk Berdasarkan Kategori.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach ($categories as $category)
            <a href="{{ route('web.produk.category', $category->slug) }}"
            class="flex flex-col items-center p-2 space-y-2 text-center border border-gray-300 rounded-lg hover:border-blue-500 hover:text-blue-500">
            <div class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center">
                <!-- Ganti URL gambar sesuai dengan gambar kategori Anda -->
                <img src="{{ $category->image }}" alt="{{ $category->name }}" class="w-18 h-18">
            </div>
            <span class="text-sm font-medium">{{ $category->name }}</span>
        </a>

        
            @endforeach
            <!-- Tambahkan lebih banyak kategori di sini -->
        </div>
    </div>
</section>
