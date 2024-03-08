@extends('layout.menulayout')

@section('contentmenu')

<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Visi Misi Prodi Magister</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('s2') }}">S2 Ilmu Peternakan</a></li>
        <li>Visi Misi Program Studi Magister Perternakan</li>
      </ol>
    </div>
  </nav>
</div>
<div class="container">
  <div class="visimisi">

    <div class="visi" style="text-align: center">
      <img src="assets/img/visis2.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
      <strong><p>
        “Menjadi Institusi Penyelenggara Program Magister Ilmu Peternakan yang mampu menghasilkan 
        Magister Peternakan yang memiliki daya saing ditingkat Nasional dan Internasional serta 
        berperan aktif dalam pengembangan dan pembangunan peternakan tropis pada tahun 2025”</p></strong>
    </div>
    <div class="misi" style="text-align: center">
      <img src="assets/img/misis2.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
    </div>
    <ol type="1" style="text-align: justify; padding-bottom:100px;">
      <li>Menyelenggarakan pendidikan ilmu peternakan jenjang Magister (S2) sesuai dengan 
        kebutuhan pengembangan sumberdaya manusia untuk pembangunan peternakan di daerah tropis.</li>
      <li>Melaksanakan penelitian dasar, terapan dan pengembangan berbasis sumberdaya lokal untuk 
        pengembangan peternakan yang berkelanjutan serta mempublikasikannya di tingkat nasional dan internasional.</li>
      <li>Menyelenggarakan kegiatan pengabdian kepada masyarakat berbasis IPTEKS yang diperoleh dari hasil
         penelitian yang dapat diadopsi oleh masyarakat.</li>
      <li>Membangun jejaring kerjasama (network) dengan pihak pemerintah, swasta serta lembaga Perguruan 
        Tinggi baik di dalam maupun luar negeri, untuk meningkatkan kualitas penyelenggaraan proses pendidikan, 
        penelitian dan pengabdian kepada masyarakat.</li>
    </ol>
  </div>
</div>
@endsection



