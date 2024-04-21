<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\dokumen;
use Illuminate\Http\Request;

class PanduanAkademikController extends Controller
{
    public function index(){
        $panduan = dokumen::all();
        return view('akademik/informasi/pAkademik',compact('panduan'));
    }
}
