<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SopLayananPpidController extends Controller
{
    public function index()
    {
     
        return view('admin.soplayananpublik');
    }

    public function create()
    {
        return view('admin.addsoplayananpublik');
    }
}
