<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::latest()->paginate(10);
        return view('admin.programs.index', compact('programs'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'       => 'required|image|mimes:jpeg,jpg,png,webp|max:2000',
            'category_id' => 'required',
            'name'       => 'required|unique:programs',

        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.programs.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/programs', $image->hashName());
        $program = new Program([
            'image'       => $image->hashName(),
            'name'       => $request->name,
            'job'    => $request->job,
            'slug'        => Str::slug($request->name, '-'),
        ]);



        if ($program->save()) {
            return redirect()->route('admin.programs.index')
                ->with('success', 'Data Program berhasil disimpan');
        }

        return redirect()->route('admin.programs.create')
            ->with('error', 'Data Program gagal disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        return view('admin.programs.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }


    public function update(Request $request, $id)
    {
        $program = Program::find($id);

        if (!$program) {
            return redirect()->route('admin.programs.index')
                ->with('error', 'Data Program tidak ditemukan');
        }

        $validator = Validator::make($request->all(), [
            'image'       => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2000',
            'name'         => 'required|unique:programs,name,' . $program->id,
            'description'      => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.programs.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        // Check if there's a new image
        if ($request->hasFile('image')) {
            // Remove old image
            Storage::disk('local')->delete('public/programs/' . basename($program->image));
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/programs', $image->hashName());
            $program->image = $image->hashName();
        }

        $program->title = $request->name;
        $program->slug = Str::slug($request->name, '-');
        $program->job = $request->job;

        // dd($program->content);
        if ($program->save()) {
            return redirect()->route('admin.programs.index')
                ->with('success', 'Data Program berhasil diupdate');
        }

        return redirect()->route('admin.programs.edit', $id)
            ->with('error', 'Data Program gagal diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        // $program = Program::find($id);

        if (!$program) {
            return redirect()->route('admin.programs.index')
                ->with('error', 'Data Program tidak ditemukan');
        }

        // Storage::delete($program->image);

        if ($program->delete()) {
            return redirect()->route('admin.programs.index')
                ->with('success', 'Data Program berhasil dihapus');
        }

        return redirect()->route('admin.programs.index')
            ->with('error', 'Data Program gagal dihapus');
    }
}
