<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\berita;

class HomeController extends Controller
{
    public function index() {
        $pengumuman = berita::where('kategori','Pengumuman')->take(5)->get();

        return view('home/main', compact('pengumuman'));
    }

}
