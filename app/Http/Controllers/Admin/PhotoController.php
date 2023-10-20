<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::latest()->paginate(5);
        return view('admin.photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.create');
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
            'image'   => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'caption' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.photos.create')
                ->withErrors($validator)
                ->withInput();
        }


        // Upload image
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/photos', $image->hashName());

        $villageId = auth()->user()->village_id;
        // dd($villageId);
        $photo = new Photo([
            'image'   => $image->hashName(),
            'caption' => $request->caption,
            'village_id' => $villageId ?? 1, // Simpan village_id
        ]);

        if ($photo->save()) {
            return redirect()->route('admin.photos.index')
                ->with('success', 'Data Photo berhasil disimpan');
        }

        return redirect()->route('admin.photos.create')
            ->with('error', 'Data Photo gagal disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);

        if (!$photo) {
            return redirect()->route('admin.photos.index')
                ->with('error', 'Data Photo tidak ditemukan');
        }

        return view('admin.photos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);

        if (!$photo) {
            return redirect()->route('admin.photos.index')
                ->with('error', 'Data Photo tidak ditemukan');
        }

        return view('admin.photos.edit', compact('photo'));
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
        $photo = Photo::find($id);

        if (!$photo) {
            return redirect()->route('admin.photos.index')
                ->with('error', 'Data Photo tidak ditemukan');
        }

        $validator = Validator::make($request->all(), [
            'image'   => 'nullable|image|mimes:jpeg,jpg,png|max:2000',
            'caption' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.photos.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        // Check if there's a new image
        if ($request->hasFile('image')) {
            // Remove old image
            Storage::disk('local')->delete('public/photos/' . basename($photo->image));
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/photos', $image->hashName());
            $photo->image = $image->hashName();
        }

        $photo->caption = $request->caption;

        if ($photo->save()) {
            return redirect()->route('admin.photos.index')
                ->with('success', 'Data Photo berhasil diupdate');
        }

        return redirect()->route('admin.photos.edit', $id)
            ->with('error', 'Data Photo gagal diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);

        if (!$photo) {
            return redirect()->route('admin.photos.index')
                ->with('error', 'Data Photo tidak ditemukan');
        }

        Storage::delete($photo->image);

        if ($photo->delete()) {
            return redirect()->route('admin.photos.index')
                ->with('success', 'Data Photo berhasil dihapus');
        }

        return redirect()->route('admin.photos.index')
            ->with('error', 'Data Photo gagal dihapus');
    }
}
