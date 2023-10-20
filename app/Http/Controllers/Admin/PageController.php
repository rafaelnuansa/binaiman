<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::latest()->paginate(5);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new page.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created page in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required',
            'title_en'     => 'nullable',
            'title_ar'     => 'nullable',
            'content' => 'required',
            'content_en' => 'nullable',
            'content_ar' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.pages.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Create page
        $page = Page::create([
            'title'   => $request->title,
            'title_en'   => $request->title_en,
            'title_ar'   => $request->title_ar,
            'slug'    => Str::slug($request->title),
            'content' => $request->content,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'user_id' => auth()->user()->id,
        ]);

        if ($page) {
            return redirect()->route('admin.pages.index')
                ->with('success', 'Data Page berhasil disimpan');
        }

        return redirect()->route('admin.pages.create')
            ->with('error', 'Data Page gagal disimpan');
    }

    /**
     * Display the specified page.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified page.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified page in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required',
            'title_en'     => 'nullable',
            'title_ar'     => 'nullable',
            'content' => 'required',
            'content_en' => 'nullable',
            'content_ar' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.pages.edit', $page->id)
                ->withErrors($validator);
        }

        // Update page
        $page->update([
            'title_en'   => $request->title_en,
            'title_ar'   => $request->title_ar,
            'slug'    => Str::slug($request->title),
            'content' => $request->content,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
        ]);

        if ($page) {
            return redirect()->route('admin.pages.index')
                ->with('success', 'Data Page berhasil diperbarui');
        }

        return redirect()->route('admin.pages.edit', $page->id)
            ->with('error', 'Data Page gagal diperbarui');
    }

    /**
     * Remove the specified page from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if ($page->delete()) {
            return redirect()->route('admin.pages.index')
                ->with('success', 'Data Page berhasil dihapus');
        }

        return redirect()->route('admin.pages.index')
            ->with('error', 'Data Page gagal dihapus');
    }
}
