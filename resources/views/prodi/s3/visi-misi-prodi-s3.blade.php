@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Visi Misi Prodi Doktor</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Visi Misi Program Studi Doktor Perternakan</li>
      </ol>
    </div>
  </nav>
</div>
<div class="container">
  <div class="visimisi">
    <div class="visi" style="text-align: center">
      <img src="assets/img/visis1.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
      <strong><p>Menjadi Lembaga Pendidikan Penghasil Doktor Ilmu Peternakan Terkemuka Di Indonesia 
        dan Memiliki Peran Serta Dalam Jaringan Kerjasama Akademik Secara Nasional Dan Internasional 
        Terutama Dalam Aspek Pengolahan Sumber Daya Alam Peternakan Sumatera</p></strong>
    </div>
    <div class="misi" style="text-align: center">
      <img src="assets/img/misis1.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
    </div>
    <ol type="1" style="text-align: justify; padding-bottom:100px;">
      <li>Mengembangkan Pendidikan Ilmu Peternakan Sesuai Kebutuhan 
        Pembangunan Dan Penerapan Teknologi Dimasa Datang Yang Penuh Tantangan Didaerah Terutama Sumatera</li>
      <li>Memfokuskan Penelitian Tentang Masalah Pemanfaatan Dan Pelestarian Sumber Daya Alam Peternakan 
        Tropis Di Daerah, Yang Ditunjang Dengan Posisi Sumatera Yang Berada Pada Khatulistiwa Serta 
        Ditunjang Dengan Fasilitas Laboratorium yang Modern</li>
      <li>Mengupayakan Alih Teknolohi Dalam Pengololaan, Pemanfaatan Dan 
        Pelestarian Peternakan Kepada Manyarakat, Khususnya Yang Bergerak Dalam Bidang Peternakan</li>
    </ol>
  </div>
</div>
@endsection

