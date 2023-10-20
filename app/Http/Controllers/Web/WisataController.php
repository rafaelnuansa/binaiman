<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        $tours = Tour::with('tour_category')->latest()->paginate(8);
        return view('web.tours.index', compact('tours'));
    }

    public function show($slug)
    {
        $tour = Tour::with('tour_category')->where('slug', $slug)->firstOrFail();

        // Dapatkan produk serupa berdasarkan kategori produk saat ini
        $relatedtours = Tour::where('tour_category_id', $tour->tour_category_id)
            ->where('id', '!=', $tour->id) // Excluding the current tour
            ->inRandomOrder() // Mengambil secara acak
            ->limit(4) // Anda dapat mengatur berapa banyak produk serupa yang ingin ditampilkan
            ->get();

        return view('web.tours.show', [
            'wisata' => $tour,
            'relatedWisata' => $relatedtours, // Mengirimkan produk serupa ke tampilan
        ]);
    }
}
