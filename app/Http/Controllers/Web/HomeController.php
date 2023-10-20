<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\Village;

class HomeController extends Controller
{
    //

    public function __invoke()
    {

        $posts = Post::latest()->take(6)->get();



        return view('web.home.index', compact(
         'posts',
        ));
    }
}
