<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(Post $post){
        $mostPopular = Post::orderBy('views', 'desc')->first();
        $topPosts = Post::orderBy('views', 'desc')->take(8)->get();
        $newPosts = Post::orderBy('created_at', 'desc')->paginate(3);

        $nasionalPost = Post::where('category', 'nasional')->take(3)->get();
        $culturePost = Post::where('category', 'budaya')->latest()->get();
        $teknologiPost = Post::where('category', 'teknologi')->take(3)->get();
        $ekonomiPost = Post::where('category', 'ekonomi')->take(3)->get();
        $olahragaPost = Post::where('category', 'olahraga')->take(3)->get();
        $hiburanPost = Post::where('category', 'hiburan')->take(3)->get();

        return view('web.home', compact('mostPopular', 'topPosts', 'newPosts', 'nasionalPost', 'culturePost', 'teknologiPost', 'ekonomiPost', 'olahragaPost'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->firstOrFail();

        $post->increment('views');

        $popularPosts = Post::orderBy('views', 'desc')
            ->take(8)
            ->get();

        $latestPosts = Post::latest()
            ->take(5)
            ->get();

        return view('web.show', compact('post', 'popularPosts', 'latestPosts'));
    }

    public function likes(Post $post) {
        $post->increment('likes');
        return redirect()->back();
    }

    public function Privacy(){
        return view('web.privacy');
    }

     public function Terms(){
        return view('web.terms');
    }

     public function About(){
        return view('web.about');
    }

     public function Contacts(){
        return view('web.contacts');
    }

    public function pagePost() {
    $data = [
        'nasional'      => Post::where('category', 'nasional')->latest()->take(5)->get(),
        'internasional' => Post::where('category', 'internasional')->latest()->take(4)->get(),
        'ekonomi'       => Post::where('category', 'ekonomi')->latest()->take(6)->get(),
        'budaya'        => Post::where('category', 'budaya')->latest()->take(4)->get(),
        'olahraga'      => Post::where('category', 'olahraga')->latest()->take(4)->get(),
        'teknologi'     => Post::where('category', 'teknologi')->latest()->take(5)->get(),
        'hiburan'       => Post::where('category', 'hiburan')->latest()->take(4)->get(),
        'lifestyle'     => Post::where('category', 'lifestyle')->latest()->take(4)->get(),
        'populer'       => Post::orderBy('views', 'desc')->take(5)->get(), // Berita Terpopuler
    ];

    return view('web.pagePost', $data);
}

//// App/Http/Controllers/PostController.php

public function categoryPost($slug) {
    // 1. Konten Utama sesuai kategori yang diklik
    $mainPosts = Post::where('category', $slug)->latest()->paginate(12);
    $title = ucfirst($slug);

    // 2. Data Pendukung untuk Sidebar & Bottom Grid (Agar tidak Undefined)
    $sidebarPopuler = Post::orderBy('views', 'desc')->take(5)->get();

    // Ambil data untuk section bawah
    $ekonomi   = Post::where('category', 'ekonomi')->latest()->take(4)->get();
    $teknologi = Post::where('category', 'teknologi')->latest()->take(4)->get();
    $hiburan   = Post::where('category', 'hiburan')->latest()->take(4)->get();
    $olahraga  = Post::where('category', 'olahraga')->latest()->take(4)->get();
    $lifestyle = Post::where('category', 'lifestyle')->latest()->take(4)->get();
    $budaya    = Post::where('category', 'budaya')->latest()->take(4)->get();

    return view('web.categoryPage', compact('mainPosts', 'title', 'sidebarPopuler', 'ekonomi', 'teknologi', 'hiburan', 'budaya', 'olahraga', 'lifestyle', 'slug'));
}

}
