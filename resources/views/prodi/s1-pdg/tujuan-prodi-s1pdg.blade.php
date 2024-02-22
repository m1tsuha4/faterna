@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Tujuan Prodi Sarjana Padang</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('s1-pdg') }}">Sarjana Peternakan</a></li>
        <li>Tujuan</li>
      </ol>
    </div>
  </nav>
</div>
<div class="container">
  <div class="sejarah">
    <div class="sejarah" style="text-align: center">
      <img src="assets/img/tujuan1.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
    </div>
    <div class="post-content">
            <blockquote>
                <h4>
                    <span style="color:#87566e">
                        <strong>
                        Tujuan dari Prodi S1 Peternakan 
                        </strong>
                    </span>
                </h4>
            </blockquote>
        </div>
        <ol>
  <li>Meningkatkan peran Fakultas Peternakan dalam hal peningkatan pemerataan dan akses pendidikan tinggi, sehingga lulusan dapat berkiprah di kancah nasional dan internasional baik di sektor swasta maupun pemerintahan.</li>
  <li>Meningkatkan peran serta sivitas akademika dalam menggali dan mengembangkan IPTEKS di bidang peternakan.</li>
  <li>Meningkatkan peran serta sivitas akademika dalam menyebarluaskan IPTEKS di bidang peternakan kepada masyarakat.</li>
  <li>Memperluas dan meningkatkan jaringan kerjasama dengan berbagai institusi baik di dalam, maupun di luar negeri dalam rangka pengembangan IPTEKS di bidang peternakan.</li>
  <li>Menerapkan organisasi yang efisien dalam menunjang suasana yang kondusif untuk pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
</ol>

    </div>
  </div>
@endsection

