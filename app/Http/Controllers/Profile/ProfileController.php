<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\alumni;
use App\Models\dosen;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function produksi_ternak(){
        $dosen_produksi_ternak = dosen::where('departemen', 'Teknologi Produksi Ternak')->get();
       
        return view('about/dep_produksi_ternak',compact('dosen_produksi_ternak'));
    }
    public function teknologi_pakan(){
        $dosen_teknologi_pakan = dosen::where('departemen', 'Ilmu Nutrisi dan Teknologi Pakan')->get();
      
        return view('about/dep_nutrisi_pakan',compact('dosen_teknologi_pakan'));
    }
    public function pengelolaan_hasil_ternak(){
        $pengelolaan_hasil_ternak = dosen::where('departemen', 'Teknologi Pengolahan Hasil Ternak')->get();
      
        return view('about/dep_pengelolaan_hasil_ternak',compact('pengelolaan_hasil_ternak'));
    }
    public function bisnis_peternakan(){
        $bisnis_peternakan = dosen::where('departemen', 'Pembangunan dan Bisnis Peternakan')->get();
        
        return view('about/dep_bisnis_peternakan',compact('bisnis_peternakan'));
    }
    
    
    

    public function alumni(){
        $alumni = alumni::orderBy('updated_at','desc')->get();

        return view('about/alumni',compact('alumni'));
    }

    public function sarana(){
        $allSarana = Fasilitas::all();

        return view('about/fasilitas',compact('allSarana'));
    }

    public function dosen($dosen){
        $dosen = Dosen::where('id',$dosen)->first();

        return view('about/dosen',compact('dosen'));
    }
}
