<?php

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\text;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/testing', function() {
    return 'success';
});

// Route::get('/postingan', [PostController::class, 'index'])->name('post.index');
// Route::get('/postingan/baru', [PostController::class, 'GetForm'])->name('post.form');
// Route::post('/postingan/baru/ditambahkan', [PostController::class, 'store'])->name('post.store');

Route::get('/', [WebsiteController::class, 'index'])->name('web.index');
Route::get('/berita/{slug}', [WebsiteController::class, 'show'])->name('web.show');
Route::post('/kabar/likes', [WebsiteController::class, 'likes'])->name('web.likes');

Route::get('/privacy-policy', [WebsiteController::class, 'Privacy'])->name('web.privacy');
Route::get('/terms-of-services', [WebsiteController::class, 'Terms'])->name('web.terms');
Route::get('/about', [WebsiteController::class, 'About'])->name('web.about');
Route::get('/contacts', [WebsiteController::class, 'Contacts'])->name('web.contacts');

Route::get('/category/{slug}', [WebsiteController::class, 'categoryPost'])->name('web.category');

// Jalankan ini dulu untuk tes koneksi
Route::get('/cek-koneksi', [ArtisanController::class, 'test']);
// Jalankan ini saat sudah di hosting (Satu link untuk semua command)
Route::get('/gas-deploy', [ArtisanController::class, 'deploy']);

require __DIR__.'/auth.php';
