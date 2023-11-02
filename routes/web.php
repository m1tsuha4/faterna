<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ini route Home
Route::get('/', function () {
    return view('home/home');
});

// ini route tentang kami
Route::get('/selayang-pandang', function () {
    return view('about/selayang-pandang');
})->name('selayang-pandang');

Route::get('/visi-misi', function () {
    return view('about/visi-misi');
})->name('visi-misi');

Route::get('/sejarah', function () {
    return view('about/sejarah');
})->name('sejarah');

Route::get('/pimpinan', function () {
    return view('about/pimpinan');
})->name('pimpinan');

Route::get('/dosen', function () {
    return view('about/dosen');
})->name('dosen');

Route::get('/tendik', function () {
    return view('about/tendik');
})->name('tendik');


// ini route prodi
//padang
Route::get('/sejarah-prodi-pdg', function () {
    return view('prodi/s1-pdg/sejarah-prodi-s1pdg');
})->name('sejarah-prodi-pdg');

Route::get('/visi-misi-prodi-pdg', function () {
    return view('prodi/s1-pdg/visi-misi-prodi-s1pdg');
})->name('visi-misi-prodi-pdg');

Route::get('/tujuan-prodi-pdg', function () {
    return view('prodi/s1-pdg/tujuan-prodi-s1pdg');
})->name('tujuan-prodi-pdg');

//pyk
Route::get('/sejarah-prodi-pyk', function () {
    return view('prodi/s1-pyk/sejarah-prodi-s1pyk');
})->name('sejarah-prodi-pyk');

Route::get('/visi-misi-prodi-pyk', function () {
    return view('prodi/s1-pyk/visi-misi-prodi-s1pyk');
})->name('visi-misi-prodi-pyk');

Route::get('/tujuan-prodi-pyk', function () {
    return view('prodi/s1-pyk/tujuan-prodi-s1pyk');
})->name('tujuan-prodi-pyk');

//S2
Route::get('/sejarah-prodi-s2', function () {
    return view('prodi/s2/sejarah-prodi-s2');
})->name('sejarah-prodi-s2');

Route::get('/visi-misi-prodi-s2', function () {
    return view('prodi/s2/visi-misi-prodi-s2');
})->name('visi-misi-prodi-s2');

Route::get('/tujuan-prodi-s2', function () {
    return view('prodi/s2/tujuan-prodi-s2');
})->name('tujuan-prodi-s2');

//S3
Route::get('/sejarah-prodi-s3', function () {
    return view('prodi/s3/sejarah-prodi-s3');
})->name('sejarah-prodi-s3');

Route::get('/visi-misi-prodi-s3', function () {
    return view('prodi/s3/visi-misi-prodi-s3');
})->name('visi-misi-prodi-s3');

Route::get('/tujuan-prodi-s3', function () {
    return view('prodi/s3/tujuan-prodi-s3');
})->name('tujuan-prodi-s3');


// ini route akademik
Route::get('/akreditasi', function () {
    return view('akademik/akreditasi');
})->name('akreditasi');



//ini route download
Route::get('/dokumen', function () {
    return view('download/dokumen');
})->name('dokumen');



//ini route PPID
Route::get('/profile', function () {
    return view('ppid/profile-ppid');
})->name('profile-ppid');

Route::get('/tata-cara-permohonan-informasi', function () {
    return view('ppid/layananinfo/tata-cara-permohonan');
})->name('tata-cara-permohonan');

Route::get('/informasi-publik', function () {
    return view('ppid/layananinfo/info-publik');
})->name('info-publik');

Route::get('/informasi-dikecualikan', function () {
    return view('ppid/layananinfo/info-dikecualikan');
})->name('info-dikecualikan');


//ini route riset
Route::get('/mou-bimtek-agam', function () {
    return view('riset/mou-bimtek-agam');
})->name('mou-bimtek-agam');

Route::get('/luar-negri', function () {
    return view('riset/luar-negri');
})->name('luar-negri');



// ini route Admin

Route::get('/administrator', function () {
    return view('admin/admindashboard');
})->name('administrator');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
