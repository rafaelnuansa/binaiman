<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(5);
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->name);
        $validator = Validator::make($request->all(), [
            'image'  => 'required|image|mimes:jpeg,jpg,png|max:2000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.sliders.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Upload image
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/sliders', $image->hashName());

        $slider = new Slider();

        $slider->name = $request->name;
        $slider->image = $image->hashName();
        if ($slider->save()) {
            return redirect()->route('admin.sliders.index')
                ->with('success', 'Data Product Category berhasil disimpan');
        }

        return redirect()->route('admin.sliders.create')
            ->with('error', 'Data Product Category gagal disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->route('admin.sliders.index')
                ->with('error', 'Data Product Category tidak ditemukan');
        }

        return view('admin.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->route('admin.sliders.index')
                ->with('error', 'Data Product Category tidak ditemukan');
        }

        return view('admin.sliders.edit', compact('slider'));
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
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->route('admin.sliders.index')
                ->with('error', 'Data Product Category tidak ditemukan');
        }

        $validator = Validator::make($request->all(), [
            'image'  => 'nullable|image|mimes:jpeg,jpg,png|max:2000',
            'name'  => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.sliders.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        // Check if there's a new image
        if ($request->hasFile('image')) {
            // Remove old image
            Storage::disk('local')->delete('public/sliders/' . basename($slider->image));
            // Upload new image

            $image = $request->file('image');
            $image->storeAs('public/sliders', $image->hashName());

            $slider->image = $image->hashName();
        }

        $slider->name = $request->name;
        if ($slider->save()) {
            return redirect()->route('admin.sliders.index')
                ->with('success', 'Data Product Category berhasil diupdate');
        }

        return redirect()->route('admin.sliders.edit', $id)
            ->with('error', 'Data Product Category gagal diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->route('admin.sliders.index')
                ->with('error', 'Data Product Category tidak ditemukan');
        }

        Storage::delete('public/slider/' . basename($slider->getOriginal('image')));

        if ($slider->delete()) {
            return redirect()->route('admin.sliders.index')
                ->with('success', 'Data Product Category berhasil dihapus');
        }

        return redirect()->route('admin.sliders.index')
            ->with('error', 'Data Product Category gagal dihapus');
    }
}
