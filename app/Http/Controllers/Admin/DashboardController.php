<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pageCount = Page::count();
        $photoCount = Photo::count();
        $postCount = Post::count();
        $sliderCount = Slider::count();
        $userCount = User::count();

        return view('admin.dashboard.index', compact(
            'pageCount',
            'photoCount',
            'postCount',
            'sliderCount',
            'userCount',
        ));
    }
}
