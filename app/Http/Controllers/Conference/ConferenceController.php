<?php

namespace App\Http\Controllers\Conference;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function conference(){
        $allConference = Conference::orderBy('updated_at','desc')->get();
        return view('conference/conference', compact('allConference'));
    }
}
