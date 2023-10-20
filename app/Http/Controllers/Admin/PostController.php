<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::with('category')->latest();
        $posts = $posts->paginate(8);
        return view('admin.posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'       => 'required|image|mimes:jpeg,jpg,png,webp|max:2000',
            'category_id' => 'required',
            'title'       => 'required|unique:posts',
            'title_en'    => 'nullable',
            'title_ar'    => 'nullable',
            'content'     => 'required',
            'content_en'    => 'nullable',
            'content_ar'    => 'nullable',
            'meta_description'    => 'nullable',
            'meta_keyword'    => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.posts.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
        $post = new Post([
            'image'       => $image->hashName(),
            'title'       => $request->title,
            'title_en'    => $request->title_en, // Menyimpan judul dalam bahasa Inggris
            'title_ar'    => $request->title_ar, // Menyimpan judul dalam bahasa Arab
            'slug'        => Str::slug($request->title, '-'),
            'category_id' => $request->category_id,
            'content'     => $request->content,
            'content_en'  => $request->content_en, // Menyimpan konten dalam bahasa Inggris
            'content_ar'  => $request->content_ar, // Menyimpan konten dalam bahasa Arab
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,

            'user_id'     => auth()->user()->id,
        ]);



        if ($post->save()) {
            return redirect()->route('admin.posts.index')
                ->with('success', 'Data Post berhasil disimpan');
        }

        return redirect()->route('admin.posts.create')
            ->with('error', 'Data Post gagal disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            $categories = Category::all();
            return redirect()->route('admin.posts.index', compact('categories'))
                ->with('error', 'Data Post tidak ditemukan');
        }
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        if (!$post) {
            return redirect()->route('admin.posts.index', compact('categories'))
                ->with('error', 'Data Post tidak ditemukan');
        }
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('admin.posts.index')
                ->with('error', 'Data Post tidak ditemukan');
        }

        $validator = Validator::make($request->all(), [
            'image'       => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2000',
            'title'         => 'required|unique:posts,title,' . $post->id,
            'title_en'      => 'nullable',
            'title_ar'      => 'nullable',
            'category_id'   => 'required',
            'content'       => 'required',
            'content_en'       => 'required',
            'content_ar'       => 'required',
            'meta_description' => 'nullable',
            'meta_keyword' => 'nullable',

        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.posts.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        // Check if there's a new image
        if ($request->hasFile('image')) {
            // Remove old image
            Storage::disk('local')->delete('public/posts/' . basename($post->image));
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            $post->image = $image->hashName();
        }

        $post->title = $request->title;
        $post->title_en = $request->title_en;
        $post->title_ar = $request->title_ar;
        $post->slug = Str::slug($request->title, '-');
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->content_en = $request->content_en;
        $post->content_ar = $request->content_ar;
        $post->meta_description = $request->meta_description;
        $post->meta_keyword = $request->meta_keyword;

        // dd($post->content);
        if ($post->save()) {
            return redirect()->route('admin.posts.index')
                ->with('success', 'Data Post berhasil diupdate');
        }

        return redirect()->route('admin.posts.edit', $id)
            ->with('error', 'Data Post gagal diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('admin.posts.index')
                ->with('error', 'Data Post tidak ditemukan');
        }

        Storage::delete($post->image);

        if ($post->delete()) {
            return redirect()->route('admin.posts.index')
                ->with('success', 'Data Post berhasil dihapus');
        }

        return redirect()->route('admin.posts.index')
            ->with('error', 'Data Post gagal dihapus');
    }

}
