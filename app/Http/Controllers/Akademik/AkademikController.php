<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\beasiswa;
use App\Models\dokumen;
use App\Models\Kalender;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function panduan(){
        $panduan = dokumen::all();
        return view('akademik/informasi/pAkademik',compact('panduan'));
    }
    public function beasiswa(){
        $beasiswa = beasiswa::orderBy('updated_at','desc')->get();
        return view('akademik/informasi/beasiswa',compact('beasiswa'));
    }
    public function kalender(){
        $kalender = Kalender::orderBy('updated_at','desc')->get();
        return view('akademik/informasi/kalenderakademik',compact('kalender'));
    }
}
