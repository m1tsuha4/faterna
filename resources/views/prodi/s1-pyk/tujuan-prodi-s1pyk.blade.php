@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Tujuan Prodi Sarjana Payakumbuh</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('s1-pyk') }}">Sarjana Peternakan</a></li>
        <li>Tujuan Program Studi Sarjana Perternakan</li>
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
                        Tujuan dari Prodi S1 Peternakan Kampus II Payakumbuh
                        </strong>
                    </span>
                </h4>
            </blockquote>
        </div>
        <ol>
          <li>Menghasilkan sarjana peternakan yang unggul dan bermoral, memiliki kompetensi global yang berorientasi sumberdaya lokal.</li>
          <li>Menghasilkan karya penelitian dan inovasi teknologi berorientasi sumberdaya lokal secara optimal dan berkelanjutan.</li>
          <li>Meningkatnya kualitas dan kuantitas pengabdian kepada masyarakat untuk meningkatkan daya saing peternakan rakyat</li>
          <li>Meningkatkan minat masyarakat untuk mendalami ilmu dan teknologi dan membangun profesi bidang usaha yang terkait dengan peternakan untuk menciptakan peluang kerja dan ketahanan pangan.</li>
        </ol>

    </div>
  </div>

@endsection

