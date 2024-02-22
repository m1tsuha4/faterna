@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Tujuan Prodi Doktor</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('s3') }}">S3 Ilmu Peternakan</a></li>
        <li>Tujuan Program Studi Doktor Perternakan</li>
      </ol>
    </div>
  </nav>
</div>
<div class="container">
  <div class="sejarah">
    <div class="sejarah" style="text-align: center">
      <img src="assets/img/tujuan3.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
    </div>
    <div class="post-content">
            <blockquote>
                <h4>
                    <span style="color:#87566e">
                        <strong>
                        Tujuan dari Prodi S3 Peternakan
                        </strong>
                    </span>
                </h4>
            </blockquote>
        </div>
        <ol>
          <li>Membekali dan menghasilkan lulusan yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa dan berjiwa Pancasila dalam menjalankan tugas dan kehidupannya, sehingga berdisiplin dan bertanggungjawab dalam mencapai kualitas terbaik sesuai dengan kebutuhan pengembangan sumberdaya manusia untuk pembangunan Peternakan yang berkelanjutan.</li>
          <li>Membekali dan menghasilkan lulusan yang mempunyai landasan yang kuat dalam penguasaan ilmu-Ilmu Peternakan dasar dan terapan, sehingga berkemampuan mengembangkan ilmu pengetahuan melalui penelitian dan menghasilkan teknologi pengelolaan dan pemanfaatan sumberdaya ternak, terutama ternak lokal sebagai landasan pembangunan Peternakan berkelanjutan, dan pembangunan bidang terkait lainnya di daerah tropis, serta secara akademik dapat berperan aktif di tingkat nasional maupun internasional.</li>
          <li>Membekali dan menghasilkan lulusan yang mempunyai kemampuan untuk mengalihkan teknologi pengelolaan dan pemanfaatan sumberdaya ternak, terutama ternak lokal kepada masyarakat.</li>

        </ol>

    </div>
  </div>

@endsection

