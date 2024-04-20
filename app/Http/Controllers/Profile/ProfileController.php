<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\dosen;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dosen(){
        $dosen = dosen::all();

        return view('about/dosen',compact('dosen'));
    }
}
