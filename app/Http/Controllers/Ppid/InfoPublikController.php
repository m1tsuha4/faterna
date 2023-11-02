<?php

namespace App\Http\Controllers;

class InfoPublikController extends Controller
{
    public function index() {
        return view('ppid.layananinfo.info-publik');
    }
}