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
//Route::get('/', function () {
//    return view('home/main');
//})->name('home');
Route::get('/', [\App\Http\Controllers\Home\HomeController::class,'index'])->name('home');

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

Route::get('/dosen', [\App\Http\Controllers\Profile\ProfileController::class,'dosen'])->name('dosen');
//Route::get('/dosen', function () {
//    return view('about/dosen');
//})->name('dosen');

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

Route::get('/alumni-info', [\App\Http\Controllers\Profile\ProfileController::class,'alumni'])->name('infoalumni');

//Route::get('/alumni-info', function () {
//    return view('about/alumni');
//})->name('infoalumni');

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
Route::get('/konferensi', [\App\Http\Controllers\Conference\ConferenceController::class,'conference'])->name('konferensi');

// ini route conference
Route::get('/berita-duka-cita', [\App\Http\Controllers\Berita\BeritaController::class,'dukaCita'])->name('dukacita');

// ini route akademik

Route::get('/beasiswa-info', [\App\Http\Controllers\Akademik\AkademikController::class,'beasiswa'])->name('infobeasiswa');
Route::get('/kalender-akademik', [\App\Http\Controllers\Akademik\AkademikController::class,'kalender'])->name('kalenderakademik');
Route::get('/panduan-akademik', [\App\Http\Controllers\Akademik\AkademikController::class,'panduan'])->name('pAkademik');



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
Route::get('/profile', [\App\Http\Controllers\Ppid\ProfilePPIDController::class,'dokumen'])->name('profile-ppid');

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


Route::get('/all-berita', [\App\Http\Controllers\Berita\BeritaController::class,'allBerita'])->name('allberita');
Route::get('/detail-berita/{id}', [\App\Http\Controllers\Berita\BeritaController::class,'detailBerita'])->name('detailberita');

Route::get('/all-kiprah', [\App\Http\Controllers\Berita\BeritaController::class,'allKiprah'])->name('allkiprah');
Route::get('/detail-kiprah/{id}', [\App\Http\Controllers\Berita\BeritaController::class,'detailKiprah'])->name('detailkiprah');

Route::get('/all-pengumuman', [\App\Http\Controllers\Berita\BeritaController::class,'allPengumuman'])->name('allpengumuman');
Route::get('/detail-pengumuman/{id}', [\App\Http\Controllers\Berita\BeritaController::class,'detailPengumuman'])->name('detailpengumuman');

// ini route Admin

Route::get('/administrator', function () {
    return view('admin/login');
})->name('administrator');

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

    //Gallery
    Route::get('/gallery', [\App\Http\Controllers\GalleryController::class,'index'])->name('galeri');
    Route::get('/addgallery', [\App\Http\Controllers\GalleryController::class,'create'])->name('addgallery');
    Route::post('/addgallery', [\App\Http\Controllers\GalleryController::class,'store'])->name('add-galeri');
    Route::get('/delete-gallery/{id}', [\App\Http\Controllers\GalleryController::class,'destroy'])->name('delete-galeri');

    //Kalender Akademik
    Route::get('/kalender', [\App\Http\Controllers\KalenderController::class,'index'])->name('kalender');
    Route::get('/addkalender', [\App\Http\Controllers\KalenderController::class,'create'])->name('addkalender');
    Route::post('/addkalender', [\App\Http\Controllers\KalenderController::class,'store'])->name('add-kalender');
    Route::get('/delete-kalender/{id}', [\App\Http\Controllers\KalenderController::class,'destroy'])->name('delete-kalender');

    //SOP PPID
    Route::get('/sop-ppid', [\App\Http\Controllers\SopLayananPpidController::class,'index'])->name('sop-ppid');
    Route::get('/addsop-ppid', [\App\Http\Controllers\SopLayananPpidController::class,'create'])->name('addsop-ppid');
    Route::post('/addsop-ppid', [\App\Http\Controllers\SopLayananPpidController::class,'store'])->name('add-sop-ppid');
    Route::get('/delete-sop-ppid/{id}', [\App\Http\Controllers\SopLayananPpidController::class,'destroy'])->name('delete-sop-ppid');

    //Conference
    Route::get('/conference', [\App\Http\Controllers\ConferenceController::class,'index'])->name('allconference');
    Route::get('/add-conference', [\App\Http\Controllers\ConferenceController::class,'create'])->name('addconference');
    Route::post('/add-conference', [\App\Http\Controllers\ConferenceController::class,'store'])->name('add-conference');
    Route::get('/delete-conference/{id}', [\App\Http\Controllers\ConferenceController::class,'destroy'])->name('delete-conference');

    //Fasilitas
    Route::get('/allfasilitas', [\App\Http\Controllers\FasilitasController::class,'index'])->name('allfasilitas');
    Route::get('/addfasilitas', [\App\Http\Controllers\FasilitasController::class,'create'])->name('addfasilitas');
    Route::post('/add-fasilitas', [\App\Http\Controllers\FasilitasController::class,'store'])->name('add-fasilitas');
    Route::get('/delete-fasilitas/{id}', [\App\Http\Controllers\FasilitasController::class,'destroy'])->name('delete-fasilitas');

    //Kerjasama
    Route::get('/allkerjasama', [\App\Http\Controllers\KerjasamaController::class,'index'])->name('allkerjasama');
    Route::get('/addkerjasama', [\App\Http\Controllers\KerjasamaController::class,'create'])->name('addkerjasama');
    Route::post('/add-kerjasama', [\App\Http\Controllers\KerjasamaController::class,'store'])->name('add-kerjasama');
    Route::get('/delete-kerjasama/{id}', [\App\Http\Controllers\KerjasamaController::class,'destroy'])->name('delete-kerjasama');


    //Faternma Dalam Angka
    Route::get('/overview', [\App\Http\Controllers\OverviewController::class,'index'])->name('overview');
    Route::get('/editoverview', [\App\Http\Controllers\OverviewController::class,'edit'])->name('editoverview');
    Route::post('/edit-overview', [\App\Http\Controllers\OverviewController::class,'update'])->name('edit-overview');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
