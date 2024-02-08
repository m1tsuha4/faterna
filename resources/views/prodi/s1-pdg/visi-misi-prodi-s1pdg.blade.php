@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Visi Misi Prodi Sarjana Padang</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Visi Misi Program Studi Sarjana Perternakan</li>
      </ol>
    </div>
  </nav>
</div>
<div class="container">
  <div class="visimisi">
    <div class="visi" style="text-align: center">
      <img src="assets/img/visis1.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
      <strong><p>Menjadi fakultas yang menghasilkan lulusan berdaya saing nasional menuju internasional dan berperan aktif dalam pembangunan bangsa</p></strong>
    </div>
    <div class="misi" style="text-align: center">
      <img src="assets/img/misis1.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
    </div>
    <ol type="1" style="text-align: justify; padding-bottom:100px;">
      <li>Menyelenggarakan pendidikan untuk mengembangkan IPTEKS, membangun sikap dan meningkatkan 
        keterampilan dalam bidang Peternakan, sehingga menghasilkan lulusan yang mandiri, 
        mempunyai kompetensi di bidangnya dan berdedikasi tinggi.</li>
      <li>Menyelenggarakan penelitian dasar maupun terapan dalam bidang peternakan serta 
        mempublikasikannya dalam jurnal nasional dan internasional untuk menunjang 
        pengembangan IPTEKS dan pembangunan.</li>
      <li>Menyelenggarakan pengabdian kepada masyarakat untuk menyebarluaskan IPTEKS 
        dalam bidang peternakan yang telah dikuasai maupun dihasilkan melalui penelitian.</li>
      <li>Membangun jaringan kerjasama yang produktif dan berkelanjutan dengan lembaga pendidikan, 
        pemerintah dan swasta baik dalam, maupun luar negeri dalam menunjang 
        penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
      <li>Membangun organisasi Fakultas Peternakan untuk menciptakan suasana yang 
        kondusif untuk penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
    </ol>
  </div>
</div>
@endsection

