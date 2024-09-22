<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function allGallery(){
        $allGallery = Galeri::orderBy('updated_at','desc')->get();
        return view ('home/gallery/allGallery',compact('allGallery'));
    }
}
