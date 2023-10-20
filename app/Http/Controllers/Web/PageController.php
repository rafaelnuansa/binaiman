<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
        $pages = Page::latest()->get();
        return view('web.pages.index', compact('pages'));
    }
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('web.pages.show', compact('page'));
    }
}
