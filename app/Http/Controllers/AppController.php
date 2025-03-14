<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AppController extends Controller
{
    function index () {
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get()
        ]);
    } 

    function berita () {
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get()
        ]);
    }

    function detail ($slug) {

        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikel
        ]);
    }
}
