<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\Galeri;
use App\Models\Overview;

class HomeController extends Controller
{
    public function index() {
        //section pengumuman
        $pengumuman = berita::where('kategori','Pengumuman')->take(5)->get();
        //section faterna dalam angka
        $overview = Overview::where('id' ,1)->first();
        //section berita & informasi event
        $berita = berita::where('kategori','Berita')->orWhere('kategori', 'Informasi Event')->take(3)->get();
        //section kiprah
        $kiprah = berita::where('kategori','Kiprah Civitas Akademika')->take(6)->get();
        //section galeri
        $galeri = Galeri::take(6)->get();

        return view('home/main', compact('pengumuman','overview','berita','kiprah','galeri'));
    }

}
