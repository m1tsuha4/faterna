<?php

namespace App\Http\Controllers\Kerjasama;

use App\Http\Controllers\Controller;
use App\Models\Kerjasama;
use Illuminate\Http\Request;

class KerjasamaController extends Controller
{
    public function kerjaSama(){
        $allDalamNegeri = Kerjasama::where('jenis','Dalam Negeri')->get();
        $allLuarNegeri = Kerjasama::where('jenis','Luar Negeri')->get();
        return view('kerjasama/kerjasama',compact('allDalamNegeri','allLuarNegeri'));
    }
}
