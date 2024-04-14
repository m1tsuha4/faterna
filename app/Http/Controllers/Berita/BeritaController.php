<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use App\Models\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //Pengumuman
    public function allPengumuman(){
        $pengumuman = berita::where('kategori','Pengumuman')->get();

        return view('home/pengumuman/allpengumuman',compact('pengumuman'));
    }
    public function detailPengumuman($id){
        $pengumuman = berita::where('id', $id)->first();

        return view('home/pengumuman/detailpengumuman',compact('pengumuman'));
    }

    //Berita & Informasi Event
    public function allBerita(){
        $berita = berita::where('kategori','Berita')->orWhere('kategori', 'Informasi Event')->get();

        return view('home/berita/allberita',compact('berita'));
    }
    public function detailBerita($id){
        $berita = berita::where('id', $id)->first();

        return view('home/berita/detail-berita',compact('berita'));
    }
}
