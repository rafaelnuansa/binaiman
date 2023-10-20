<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', App\Http\Controllers\Web\HomeController::class)->name('home');
Route::get('/about', [App\Http\Controllers\Web\AboutController::class, 'index'])->name('web.about.index');
Route::get('/contact', [App\Http\Controllers\Web\AboutController::class, 'index'])->name('web.contact.index');

Route::get('/posts', [App\Http\Controllers\Web\PostController::class, 'index'])->name('web.posts');
Route::get('/posts/{slug}', [App\Http\Controllers\Web\PostController::class, 'show'])->name('web.posts.show');
Route::get('/posts/kategori', [App\Http\Controllers\Web\PostController::class, 'index'])->name('web.posts.kategori');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified']], function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class)->names('categories');
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class)->names('posts');
    Route::get('/dark-mode', [App\Http\Controllers\Admin\DarkModeController::class, 'toggleDarkMode'])->name('dark-mode.toggle');

    Route::resource('pages', App\Http\Controllers\Admin\PageController::class)->names('pages');
    Route::resource('users', App\Http\Controllers\Admin\UserController::class)->names('users');
    Route::resource('photos', App\Http\Controllers\Admin\PhotoController::class)->names('photos');
});

if (file_exists(app_path('Http/Controllers/LocalizationController.php')))
{
    Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class , 'lang'])->name('lang');
}

require __DIR__.'/auth.php';
