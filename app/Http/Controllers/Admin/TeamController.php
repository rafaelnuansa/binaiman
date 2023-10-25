<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->paginate(10);
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function edit(Team $team){
        return view('admin.teams.edit', compact('team'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'       => 'required|image|mimes:jpeg,jpg,png,webp|max:2000',
            'name'       => 'required|unique:teams',
            'job' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.teams.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/teams', $image->hashName());
        $team = new Team([
            'image'       => $image->hashName(),
            'name'       => $request->name,
            'job'    => $request->job,
            'slug'        => Str::slug($request->name, '-'),
        ]);



        if ($team->save()) {
            return redirect()->route('admin.teams.index')
                ->with('success', 'Data Team berhasil disimpan');
        }

        return redirect()->route('admin.teams.create')
            ->with('error', 'Data Team gagal disimpan');
    }


    public function update(Request $request, $id)
    {
        $team = Team::find($id);

        if (!$team) {
            return redirect()->route('admin.teams.index')
                ->with('error', 'Data Team tidak ditemukan');
        }

        $validator = Validator::make($request->all(), [
            'image'       => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2000',
            'name'         => 'required|unique:teams,name,' . $team->id,
            'job'      => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.teams.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        // Check if there's a new image
        if ($request->hasFile('image')) {
            // Remove old image
            Storage::delete('public/teams/' . basename($team->getOriginal('image')));
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/teams', $image->hashName());
            $team->image = $image->hashName();
        }

        $team->name = $request->name;
        $team->slug = Str::slug($request->name, '-');
        $team->job = $request->job;

        // dd($team->content);
        if ($team->save()) {
            return redirect()->route('admin.teams.index')
                ->with('success', 'Data Team berhasil diupdate');
        }

        return redirect()->route('admin.teams.edit', $id)
            ->with('error', 'Data Team gagal diupdate');
    }

    public function destroy($id)
    {
        $team = Team::find($id);

        if (!$team) {
            return redirect()->route('admin.teams.index')
                ->with('error', 'Data Team tidak ditemukan');
        }


        if ($team->image) {
            Storage::delete('public/teams/' . basename($team->getOriginal('image')));
        }

        if ($team->delete()) {
            return redirect()->route('admin.teams.index')
                ->with('success', 'Data Team berhasil dihapus');
        }

        return redirect()->route('admin.teams.index')
            ->with('error', 'Data Team gagal dihapus');
    }
}
