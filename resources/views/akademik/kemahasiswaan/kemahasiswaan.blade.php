@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Kemahasiswaan FATERNA</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Kemahasiswaan</li>
      </ol>
    </div>
  </nav>

  <section id="about" class="about sections-bg ">
    <div class="container" data-aos="fade-up">

      <div style="margin-top: -50px;" class="row content">
        <div class="col-lg-6 d-flex justify-content-start">
          
            <img width="500" src="{{asset('assets/img/kemahasiswaan.webp')}}" alt="image">
        
        </div>
        <div class="col-lg-6  pt-lg-0">
          <div class="section-title ppid d-flex justify-content-start">
            <h1>Kemahasiswaan Faterna</h1>
          </div>
          <p>
            Dalam memberikan pelayanan kepada mahasiswa, fakultas Peternakan Universitas Andalas melalui Bidang Akademik dan Kemahasiswaan memiliki berbagai program untuk pemberdayaan mahasiswa, baik dalam bidang akademik maupun non akademik. Dengan kampus yang sangat luas dan dukungan almuni, memiliki berbagai fasilitas untuk menunjang kreatifitas dan aktifitas mahasiswa.
          </p>
            <br>
            <p>
              Berbagai layanan kemahasiswaan dirancang untuk memberikan kenyamanan bagi mahasiswa selama menempuh pendidikan di Fakultas Peternakan Universitas Andalas. Berbagai kegiatan kemahasiswaan dalam bentuk Unit Kegiatan Mahasiswa dapat menjadi alternatif aktifitas mahasiswa selain dari kegitan pembelajaran
            </p>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->
</div>
@endsection

