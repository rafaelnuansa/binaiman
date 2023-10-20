<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $tour_categories = TourCategory::all();
        $product_categories = ProductCategory::all();
        $searchTerm = $request->input('q');
        $typeFilter = $request->input('type');
    
        // Inisialisasi query untuk mencari baik "Wisata" maupun "Produk"
        $wisataQuery = Tour::query();
        $productQuery = Product::query();
    
        // Filter berdasarkan tipe (produk atau wisata) jika parameter tipe ada
        if ($typeFilter === 'wisata') {
            $wisataQuery->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%');
            });
    
            $results = $wisataQuery->get();
        } elseif ($typeFilter === 'produk') {
            $productQuery->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%');
            });
    
            $results = $productQuery->get();
        } 
        else {
            // Jika tipe tidak dipilih, cari baik "Wisata" maupun "Produk"
            $wisataResults = $wisataQuery->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%');
            })->get();
    
            $productResults = $productQuery->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%');
            })->get();
    
            
            $results = [
                'wisata' => $wisataResults,
                'produk' => $productResults,
            ];
        }
    
        return view('web.search.index', [
            'tour_categories' => $tour_categories,
            'product_categories' => $product_categories,
            'searchTerm' => $searchTerm,
            'results' => $results,
            'typeFilter' => $typeFilter,
        ]);
    }
    
    
    public function wisata(Request $request)
    {
        $searchTerm = $request->input('q');
        $categoryFilter = $request->input('category'); // Ambil parameter kategori dari input

        $query = Tour::query();

        // Filter berdasarkan kategori jika parameter kategori ada
        if ($categoryFilter) {
            $query->where('tour_category_id', $categoryFilter);
        }

        // Lakukan pencarian berdasarkan nama atau deskripsi
        $query->where(function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('content', 'like', '%' . $searchTerm . '%');
        });

        $wisata = $query->get();

        return view('web.search.wisata', [
            'searchTerm' => $searchTerm,
            'wisata' => $wisata,
        ]);
    }

    public function product(Request $request)
    {
        $searchTerm = $request->input('q');
        $categoryFilter = $request->input('category');

        $query = Product::query();

        if ($categoryFilter) {
            $query->where('product_category_id', $categoryFilter);
        }

        $query->where(function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('content', 'like', '%' . $searchTerm . '%');
        });

        $products = $query->get();

        return view('web.search.product', [
            'searchTerm' => $searchTerm,
            'products' => $products,
        ]);
    }
}
