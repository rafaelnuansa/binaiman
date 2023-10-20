<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PermissionResource;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::when(request()->search, function ($query) {
            $query->where('name', 'like', '%' . request()->search . '%');
        })->latest()->paginate(10);

        $permissions->appends(['search' => request()->search]);

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        // return view('admin.permissions.create');
    }

    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|unique:permissions|max:255',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->route('admin.permissions.create')
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     $permission = Permission::create([
    //         'name' => $request->name,
    //     ]);

    //     if ($permission) {
    //         return redirect()->route('admin.permissions.index')
    //             ->with('success', 'Permission berhasil disimpan');
    //     }

    //     return redirect()->route('admin.permissions.create')
    //         ->with('error', 'Permission gagal disimpan');
    // }

    // public function edit($id)
    // {
    //     $permission = Permission::find($id);

    //     if (!$permission) {
    //         return redirect()->route('admin.permissions.index')
    //             ->with('error', 'Permission tidak ditemukan');
    //     }

    //     return view('admin.permissions.edit', compact('permission'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $permission = Permission::find($id);

    //     if (!$permission) {
    //         return redirect()->route('admin.permissions.index')
    //             ->with('error', 'Permission tidak ditemukan');
    //     }

    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|unique:permissions,name,' . $permission->id,
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->route('admin.permissions.edit', $id)
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     $permission->name = $request->name;

    //     if ($permission->save()) {
    //         return redirect()->route('admin.permissions.index')
    //             ->with('success', 'Permission berhasil diupdate');
    //     }

    //     return redirect()->route('admin.permissions.edit', $id)
    //         ->with('error', 'Permission gagal diupdate');
    // }

    // public function destroy($id)
    // {
    //     $permission = Permission::find($id);

    //     if (!$permission) {
    //         return redirect()->route('admin.permissions.index')
    //             ->with('error', 'Permission tidak ditemukan');
    //     }

    //     if ($permission->delete()) {
    //         return redirect()->route('admin.permissions.index')
    //             ->with('success', 'Permission berhasil dihapus');
    //     }

    //     return redirect()->route('admin.permissions.index')
    //         ->with('error', 'Permission gagal dihapus');
    // }
}
