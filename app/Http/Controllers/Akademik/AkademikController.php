<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\beasiswa;
use App\Models\dokumen;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function panduan(){
        $panduan = dokumen::all();
        return view('akademik/informasi/pAkademik',compact('panduan'));
    }
    public function beasiswa(){
        $beasiswa = beasiswa::all();
        return view('akademik/informasi/beasiswa',compact('beasiswa'));
    }
}
