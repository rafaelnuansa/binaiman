<?php

namespace App\Http\Controllers\Api\Public;

use App\Models\Tour;
use App\Http\Controllers\Controller;
use App\Http\Resources\WisataResource;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        // Get the search query from the request
        $searchQuery = $request->search;

        // Start with a base query
        $query = Tour::latest()->with('tour_category', 'village', 'user');

        // If a search query is provided, apply the search filter
        if ($searchQuery) {
            $query->where('name', 'like', '%' . $searchQuery . '%');
        }

        // Paginate the results
        $perPage = 4;
        $wisatas = $query->paginate($perPage);

        // Return the results as a JSON response
        return new WisataResource(true, 'List Data Wisata', $wisatas);
    }


    /**
     * show
     *
     * @param  mixed $slug
     * @return void
     */
    public function show($slug)
    {
        $wisata = Tour::where('slug', $slug)->with('tour_category', 'village', 'user')->first();

        if ($wisata) {
            //return with Api Resource
            return new WisataResource(true, 'Detail Data Wisata', $wisata);
        }

        //return with Api Resource
        return new WisataResource(false, 'Detail Data Wisata Tidak Ditemukan!', null);
    }

    public function homePage()
    {
        $wisatas = Tour::latest()->with('tour_category', 'village', 'user')->take(6)->get();

        //return with Api Resource
        return new WisataResource(true, 'List Data Wisata HomePage', $wisatas);
    }

    public function categories()
    {
        $categories = TourCategory::all();
        //return with Api Resource
        return new WisataResource(true, 'List Data Wisata Categories', $categories);
    }
}
