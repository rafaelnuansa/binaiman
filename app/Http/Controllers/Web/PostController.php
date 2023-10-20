<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(8);
        return view('web.posts.index', compact('posts'));
    }

    public function show($slug)
    {
        // Dapatkan produk berdasarkan slug
        $post = Post::with('category')->where('slug', $slug)->firstOrFail();

        // Dapatkan produk serupa berdasarkan kategori post saat ini
        $relatedposts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id) // Excluding the current tour
            ->inRandomOrder() // Mengambil secara acak
            ->limit(4) // Anda dapat mengatur berapa banyak produk serupa yang ingin ditampilkan
            ->get();

        return view('web.posts.show', [
            'post' => $post,
            'relatedposts' => $relatedposts, // Mengirimkan produk serupa ke tampilan
        ]);
    }
}
