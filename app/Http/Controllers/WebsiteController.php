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
}
