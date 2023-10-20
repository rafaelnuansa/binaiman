<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    /**
     * Menampilkan daftar semua kategori.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::latest()->paginate(5);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Menampilkan formulir untuk membuat kategori baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Menyimpan kategori baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.categories.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Create category
        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
        ]);

        if ($category) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Kategori berhasil ditambahkan.');
        }

        return redirect()->route('admin.categories.index')
            ->with('error', 'Gagal menambahkan kategori.');
    }

    /**
     * Menampilkan informasi tentang kategori tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $category = Category::find($id);

        if ($category) {
            return view('admin.categories.show', compact('category'));
        }

        return redirect()->route('admin.categories.index')
            ->with('error', 'Kategori tidak ditemukan.');
    }

    /**
     * Menampilkan formulir untuk mengedit kategori.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $category = Category::find($id);

        if ($category) {
            return view('admin.categories.edit', compact('category'));
        }

        return redirect()->route('admin.categories.index')
            ->with('error', 'Kategori tidak ditemukan.');
    }

    /**
     * Memperbarui kategori dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('admin.categories.index')
                ->with('error', 'Kategori tidak ditemukan.');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.categories.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        // Update category
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');

        if ($category->save()) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Kategori berhasil diperbarui.');
        }

        return redirect()->route('admin.categories.index')
            ->with('error', 'Gagal memperbarui kategori.');
    }

    /**
     * Menghapus kategori dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('admin.categories.index')
                ->with('error', 'Kategori tidak ditemukan.');
        }

        if ($category->delete()) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Kategori berhasil dihapus.');
        }

        return redirect()->route('admin.categories.index')
            ->with('error', 'Gagal menghapus kategori.');
    }
}
