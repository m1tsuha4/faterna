<?php

namespace App\Http\Controllers;

class DokumenController extends Controller
{
    public function index() {
        return view('download.dokumen');
    }
}