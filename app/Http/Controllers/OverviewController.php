<?php

namespace App\Http\Controllers;

use App\Models\Overview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class OverviewController extends Controller
{
    public function index()
    {
        // $alloverview = Overview::all();
        return view('admin.overview');
    }

    public function edit()
    {
        return view('admin.editoverview');
    }

 

}
