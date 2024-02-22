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
    return view('home/main');
})->name('home');

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



Route::get('/struktur-organisasi', function () {
    return view('about/struktur');
})->name('struktur');

Route::get('/profil-guru-besar', function () {
    return view('about/profilgb');
})->name('profilgb');

Route::get('/profil-departemen', function () {
    return view('about/profildepartemen');
})->name('profildepartemen');

Route::get('/sarana-dan-prasarana', function () {
    return view('about/fasilitas');
})->name('fasilitas');

Route::get('/akreditasi', function () {
    return view('about/akreditasi');
})->name('akreditasi');

Route::get('/alumni-info', function () {
    return view('about/alumni');
})->name('infoalumni');

Route::get('/zona-integritas', function () {
    return view('about/zona');
})->name('zona');
// ini route prodi
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

Route::get('/s1-pdg', function () {
    return view('prodi/s1-pdg/s1pdg');
})->name('s1-pdg');

Route::get('/s1-pyk', function () {
    return view('prodi/s1-pyk/s1pyk');
})->name('s1-pyk');

Route::get('/s2', function () {
    return view('prodi/s2/s2');
})->name('s2');

Route::get('/s3', function () {
    return view('prodi/s3/s3');
})->name('s3');


// ini route kerjasama
Route::get('/kerja-sama', function () {
    return view('kerjasama/kerjasama');
})->name('kerjasama');

// ini route conference
Route::get('/conference', function () {
    return view('conference/conference');
})->name('conference');

// ini route conference
Route::get('/berita-duka-cita', function () {
    return view('dukacita/dukacita');
})->name('dukacita');

// ini route akademik

Route::get('/beasiswa-info', function () {
    return view('akademik/informasi/beasiswa');
})->name('infobeasiswa');

Route::get('/kalender-akademik', function () {
    return view('akademik/informasi/kalenderakademik');
})->name('kalenderakademik');

Route::get('/panduan-akademik', function () {
    return view('akademik/informasi/pAkademik');
})->name('pAkademik');


Route::get('/kemahasiswaan', function () {
    return view('akademik/kemahasiswaan/kemahasiswaan');
})->name('kemahasiswaan');

Route::get('/organisasi-mahasiswa', function () {
    return view('akademik/kemahasiswaan/ormawa');
})->name('ormawa');

//ini route download
Route::get('/panduan-dan-sop-ta', function () {
    return view('download/sopTA');
})->name('sopTA');

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

Route::get('/penelitian', function () {
    return view('riset/penelitian');
})->name('penelitian');

Route::get('/pengabdian', function () {
    return view('riset/pengabdian');
})->name('pengabdian');

// ini route Admin

Route::get('/administrator', function () {
    return view('admin/login');
})->name('administrator');

Route::get('/judul-berita', function () {
    return view('home/berita/berita');
})->name('berita');

//Route::get('/berita', function () {
//    return view('admin/admindashboard');
//})->name('dashboardadmin');
//
//Route::get('/addberita', function () {
//    return view('admin/addberita');
//})->name('addberita');
//
//Route::get('/editberita', function () {
//    return view('admin/editberita');
//})->name('editberita');
//
//Route::get('/dokumen', function () {
//    return view('admin/dokumen');
//})->name('dokumen');
//
//Route::get('/addokumen', function () {
//    return view('admin/addokumen');
//})->name('addokumen');
//
//Route::get('/dosen-admin', function () {
//    return view('admin/dosen');
//})->name('dosen-admin');
//
//Route::get('/addosen', function () {
//    return view('admin/addosen');
//})->name('addosen');
//
//Route::get('/editdosen', function () {
//    return view('admin/editdosen');
//})->name('editdosen');
//
//Route::get('/alumni', function () {
//    return view('admin/alumni');
//})->name('alumni');
//
//Route::get('/addalumni', function () {
//    return view('admin/addalumni');
//})->name('addalumni');
//
//Route::get('/beasiswa', function () {
//    return view('admin/beasiswa');
//})->name('beasiswa');
//
//Route::get('/addbeasiswa', function () {
//    return view('admin/addbeasiswa');
//})->name('addbeasiswa');

Route::middleware('auth')->group(function (){
    //berita
    Route::get('/berita', [\App\Http\Controllers\BeritaController::class,'index'])->name('dashboardadmin');
    Route::get('/addberita', [\App\Http\Controllers\BeritaController::class,'create'])->name('addberita');
    Route::post('/addberita', [\App\Http\Controllers\BeritaController::class,'store'])->name('add-berita');
    Route::get('/editberita/{id}', [\App\Http\Controllers\BeritaController::class,'edit'])->name('editberita');
    Route::put('/editberita/{id}', [\App\Http\Controllers\BeritaController::class,'update'])->name('edit-berita');
    Route::get('/delete-berita/{id}', [\App\Http\Controllers\BeritaController::class,'destroy'])->name('delete-berita');
    //dokumen
    Route::get('/dokumen', [\App\Http\Controllers\DokumenController::class,'index'])->name('dokumen');
    Route::get('/addokumen',  [\App\Http\Controllers\DokumenController::class,'create'])->name('addokumen');
    Route::post('/addokumen',  [\App\Http\Controllers\DokumenController::class,'store'])->name('add-dokumen');
    Route::get('/delete-dokumen/{id}', [\App\Http\Controllers\DokumenController::class,'destroy'])->name('delete-dokumen');
    //dosen
    Route::get('/dosen-admin', [\App\Http\Controllers\DosenController::class,'index'])->name('dosen-admin');
    Route::get('/addosen',[\App\Http\Controllers\DosenController::class,'create'])->name('addosen');
    Route::post('/addosen',[\App\Http\Controllers\DosenController::class,'store'])->name('add-dosen');
    Route::get('/editdosen/{id}', [\App\Http\Controllers\DosenController::class,'edit'])->name('editdosen');
    Route::put('/editdosen/{id}', [\App\Http\Controllers\DosenController::class,'update'])->name('edit-dosen');
    Route::get('/delete-dosen/{id}', [\App\Http\Controllers\DosenController::class,'destroy'])->name('delete-dosen');
    //alumni
    Route::get('/alumni', [\App\Http\Controllers\AlumniController::class,'index'])->name('alumni');
    Route::get('/addalumni', [\App\Http\Controllers\AlumniController::class,'create'])->name('addalumni');
    Route::post('/addalumni', [\App\Http\Controllers\AlumniController::class,'store'])->name('add-alumni');
    Route::get('/delete-alumni/{id}', [\App\Http\Controllers\AlumniController::class,'destroy'])->name('delete-alumni');
    //beasiswa
    Route::get('/beasiswa', [\App\Http\Controllers\BeasiswaController::class,'index'])->name('beasiswa');
    Route::get('/addbeasiswa', [\App\Http\Controllers\BeasiswaController::class,'create'])->name('addbeasiswa');
    Route::post('/addbeasiswa', [\App\Http\Controllers\BeasiswaController::class,'store'])->name('add-beasiswa');
    Route::get('/delete-beasiswa/{id}', [\App\Http\Controllers\BeasiswaController::class,'destroy'])->name('delete-beasiswa');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
