<?php

namespace App\Http\Controllers;

class PanduanakademikController extends Controller
{
    public function index() {
        return view('akademik.informasi.PAkademik');
    }
}