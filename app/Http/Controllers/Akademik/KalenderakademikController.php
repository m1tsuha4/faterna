<?php

namespace App\Http\Controllers;

class KalenderakademikController extends Controller
{
    public function index() {
        return view('akademik.informasi.kalenderakademik');
    }
}