<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DarkModeController extends Controller
{
    public function toggleDarkMode()
    {
        // Periksa apakah pengguna sudah masuk
        if (Auth::check()) {
            // Ubah status dark mode pengguna
            $user = Auth::user();
            $user->dark_mode = !$user->dark_mode;
            $user->save();
        }

        // Kembali ke halaman sebelumnya
        return back();
    }
}
