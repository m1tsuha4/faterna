@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Organisasi Mahasiswa</li>
        </ol>
      </div>
    </nav>
</div>  
<div id="ormawa" class="ormawa">
  <div class="container">
    <div class="post-heading">
      <h2>Organisasi Mahasiswa</h2>
      <ul class="entry-meta">
          <li class="post-date"> <!-- data tanggal upload-->
              <i class='bx bx-time-five'></i>
              6 November 2023, 13.00
          </li>
          <li class="post-autor"> <!-- data admin yang upload dan terhubung ke admin-->
              <i class='bx bxs-user'></i>
              Oleh:
              <a href="#">admin</a>
          </li>
      </ul>
    </div>
    <div class="post-content">
        <p style="text-align: justify">
          Organisasi kemahasiswaan tingkat Fakultas Perternakan terdiri dari Organisasi umum
          dan Badan Otonom. Berikut Organisasi Mahasiswa yang terdapat di Fakultas Perternakan
        </p>
        <ol>
          <li>
            <p style="text-align: justify">
              Organisasi umum merupakan entitas yang melibatkan mahasiswa dari jurusan atau program studi dalam satu Fakultas Perternakan. 
              Organisasi ini memiliki tanggung jawab untuk mewakili mahasiswa secara keseluruhan, mengelola kegiatan-kegiatan bersama, dan memperjuangkan 
              kepentingan umum mahasiswa di tingkat fakultas.
              Organisasi Umum Fakultas Perternakan terdiri dari Badan Eksekutif Mahasiswa (BEM), Dewan Perwakilan Mahasiswa (DPM), dan 
              Himpunan Mahasiswa Perternakan (Himapet).
            </p>
            <ol style="list-style-type: decimal;">
              <li><a href="#"><b>Badan Eksekutif Mahasiswa</b></a> Keluarga Mahasiswa Fakultas Perternakan (BEM KM FATERNA)</li>
              <li><a href="#"><b>Dewan Perwakilan Mahasiswa</b></a> Keluarga Mahasiswa Fakultas Perternakan (DPM KM FATERNA)</li>
              <li><a href="#"><b>Himpunan Mahasiswa Perternakan</b></a> (HIMAPET)</li>
            </ol>
          </li>
          <br>
          <li>
            <p style="text-align: justify">
              Badan otonom merupakan entitas yang memiliki kemandirian penuh dalam mengelola dan menjalankan 
              kegiatan atau program kerja tertentu. Badan otonom dapat berfokus pada bidang tertentu dan dapat membuat 
              keputusan sendiri tanpa terlalu banyak campur tangan dari pihak lain dalam organisasi.
              Badan Otonom Fakultas Perternakan terdiri dari
            </p>
            <ol style="list-style-type: decimal;">
              <li><a href="#"><b>Sanggar Ungu Unit Kegiatan Seni</b></a> merupakan UKMF yang bergerak di bidang seni yang
                terdiri dari beberapa bidang yaitu vokal, tari, dan mc</li>
              <li><a href="#"><b>Svarna Dvipa Ungu</b></a> merupakan UKMF yang bergerak di bidang pencinta alam 
                atau biasa disebut Mahasiswa Pencinta Alam Fakultas Perternakan</li>
              <li><a href="#"><b>Unit Kegiatan Olahraga</b></a> merupakan UKMF yang bergerak di bidang olahraga</li>
              <li><a href="#"><b>Academia Young Enterpreneur</b></a> merupakan UKMF yang bergerak di bidang kewirausahaan </li>
              <li><a href="#"><b>Forum Studi Islam</b></a> merupakan UKMF yang bergerak di bidang kerohanian islam</li>
              <li><a href="#"><b>lembaga kajian Ilmiah</b></a> merupakan UKMF yang bergerak di bidang pembuatan karya ilmiah</li>
            </ol> 
          </li>
        </ol>
      </div>
  </div>
</div>
@endsection

