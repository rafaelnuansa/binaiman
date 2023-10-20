<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $photos = Photo::latest()->paginate(8);
        return view('web.galllery.index', compact('photos'));
    }
}
