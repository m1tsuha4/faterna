<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\alumni;
use App\Models\dosen;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dosen(){
        $dosen = dosen::all();

        return view('about/dosen',compact('dosen'));
    }

    public function alumni(){
        $alumni = alumni::orderBy('updated_at','desc')->get();

        return view('about/alumni',compact('alumni'));
    }

    public function sarana(){
        $allSarana = Fasilitas::all();

        return view('about/fasilitas',compact('allSarana'));
    }
}
