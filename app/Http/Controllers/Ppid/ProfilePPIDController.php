<?php

namespace App\Http\Controllers\Ppid;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;

class ProfilePPIDController extends Controller
{
    public function dokumen(){
        $sop = Sop::orderBy('updated_at','desc')->get();
        return view('ppid/profile-ppid',compact('sop'));
    }
}
