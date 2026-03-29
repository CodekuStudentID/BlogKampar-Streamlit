<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dunia-kampar', [WebsiteController::class, 'index'])->name('web.index');
Route::get('/dunia-kampar/berita/{slug}', [WebsiteController::class, 'show'])->name('web.show');
Route::post('/dunia-kampar/kabar/likes', [WebsiteController::class, 'likes'])->name('web.likes');

Route::get('/dunia-kampar/privacy-policy', [WebsiteController::class, 'Privacy'])->name('web.privacy');
Route::get('/dunia-kampar/terms-of-services', [WebsiteController::class, 'Terms'])->name('web.terms');
