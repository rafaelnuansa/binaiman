<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Product::with('product_category')->latest()->paginate(8);
        // dd($products);
        return view('web.products.index', compact('products'));
    }

    public function show($slug)
    {
        // Dapatkan produk berdasarkan slug
        $product = Product::with('product_category')->where('slug', $slug)->firstOrFail();

        // Dapatkan produk serupa berdasarkan kategori produk saat ini
        $relatedProducts = Product::where('product_category_id', $product->product_category_id)
            ->where('id', '!=', $product->id) // Excluding the current product
            ->inRandomOrder() // Mengambil secara acak
            ->limit(4) // Anda dapat mengatur berapa banyak produk serupa yang ingin ditampilkan
            ->get();

        return view('web.products.show', [
            'produk' => $product,
            'relatedProducts' => $relatedProducts, // Mengirimkan produk serupa ke tampilan
        ]);
    }

    public function category($categorySlug)
    {
        // Dapatkan kategori berdasarkan slug
        $category = ProductCategory::where('slug', $categorySlug)->firstOrFail();

        // Dapatkan produk yang termasuk dalam kategori tertentu
        $products = Product::with('product_category')
            ->where('product_category_id', $category->id)
            ->latest()
            ->paginate(8);

        return view('web.products.category', [
            'category' => $category,
            'products' => $products,
        ]);
    }



}
