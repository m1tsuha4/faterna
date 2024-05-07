<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\Galeri;
use App\Models\Kerjasama;
use App\Models\Overview;
use App\Models\Visitor;

class HomeController extends Controller
{
    public function index() {
        $totalVisitors = Visitor::first()->visitors_count ?? 0;
        //section pengumuman
        $pengumuman = berita::where('kategori','Pengumuman')->take(5)->orderBy('updated_at','desc')->get();
        //section faterna dalam angka
        $overview = Overview::where('id' ,1)->first();
        //section berita & informasi event
        $berita = berita::where('kategori','Berita')->orWhere('kategori', 'Informasi Event')->take(3)->orderBy('updated_at','desc')->get();
        //section kiprah
        $kiprah = berita::where('kategori','Kiprah Civitas Akademika')->take(6)->orderBy('updated_at','desc')->get();
        //section galeri
        $galeri = Galeri::take(6)->orderBy('updated_at','desc')->get();
        //section kerjasama
        $kerjasama = Kerjasama::all();
        return view('home/main', compact('pengumuman','overview','berita','kiprah','galeri','kerjasama', 'totalVisitors'));
    }

}
