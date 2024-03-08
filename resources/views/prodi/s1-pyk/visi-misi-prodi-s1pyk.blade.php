@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Visi Misi Prodi Sarjana Payakumbuh</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('s1-pyk') }}">Sarjana Peternakan</a></li>
        <li>Visi Misi Program Studi Sarjana Perternakan</li>
      </ol>
    </div>
  </nav>
</div>
<div class="container">

  <div class="visimisi">


    <div class="visi" style="text-align: center">
      <img src="assets/img/visis1.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
      <strong><p>Menjadi Prodi Peternakan yang unggul melalui penyelenggaraan pendidikan, penelitian, 
        dan pengabdian masyarakat dalam rangka mendukung daya saing peternakan rakyat untuk menghadapi 
        kompetisi global pada tahun 2019</p></strong>
    </div>
    <div class="misi" style="text-align: center">
      <img src="assets/img/misis1.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
    </div>
    <ol type="1" style="text-align: justify; padding-bottom:100px;">
      <li>Menyelenggarakan pendidikan di bidang peternakan yang unggul dalam rangka 
        menghasilkan lulusan yang bermoral, berorientasi sumber daya lokal dengan kompetensi global.</li>
      <li>Menyelenggarakan riset dibidang peternakan berorientasi sumberdaya lokal 
        dalam rangka pengembangan ilmu pengetahuan dan teknologi peternakan.</li>
      <li>Melaksanakan pengabdian kepada masyarakat untuk menerapkan ilmu 
        dan teknologi dalam rangka peningkatan daya saing peternakan rakyat.</li>
      <li>Mendukung misi pemerintah daerah untuk menjadikan Payakumbuh dan 
        daerah sekitarnya sebagai sentra peternakan nasional.</li>
    </ol>
  </div>
</div>
@endsection




