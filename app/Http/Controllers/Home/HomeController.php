<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\Overview;

class HomeController extends Controller
{
    public function index() {
        $pengumuman = berita::where('kategori','Pengumuman')->take(5)->get();
        $overview = Overview::where('id' ,1)->first();
        return view('home/main', compact('pengumuman','overview'));
    }

}
