@extends('layout.menulayout')

@section('contentmenu')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Dosen Faterna</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Dosen</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section id="portfolio1" class="portfolio1">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="col-xl-12 col-md-12 portfolio-item">
            <div class="portfolio-wrap">
              <div class="dosen1">
                <div class="member d-flex align-items-center">
                  <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Elandra Maulana</h4>
                    <span>
                      <p class="card-text"><strong>NIDN : </strong> Teknik Komputer</p>
                      <p class="card-text" style="text-align: justify;"><strong>Deskripsi Diri : </strong>Dosen Fakultas Peternakan Unand dengan bidang keahlian Ilmu Nutrisi Ternak Unggas dengan fokus 
                        kajian penelitian pada pemanfaatan dan pengolahan rumput laut coklat sebagai bahan pakan ternak unggas. Selain menjadi dosen juga aktif pada 
                        kegiatan olahraga baik dalam kampus maupun diluar kampus, yang berfokus pada pembinaan olahraga dibidang sepakbola, futsal dan street soccer 
                        pada mahasiswa, pelajar dan umum</p>
                      <p class="card-text"><strong>Depertement : </strong> Teknik Komputer</p>
                      <p class="card-text"><strong>Jabatan : </strong> Lektor</p>
                      <p class="card-text"><strong>Email : </strong> elandramaulana81@gmail.com</p>
                      <p class="card-text"><strong>Edukasi S1 : </strong></p>
                      <p class="card-text"><strong>Edukasi S2 : </strong></p>
                      <p class="card-text"><strong>Edukasi S3 : </strong></p>
                      <p class="card-text"><strong>Mata Kuliah : </strong>
                        1.
                        2.
                        3.
                      </p>
                      <p class="card-text"><strong>Bidang Keahlian : </strong>
                        1.
                        2.
                        3.
                      </p>
                      <p class="card-text"><strong>Riset Internal : </strong>
                        1.
                        2.
                        3.
                      </p>
                    </span>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <a href=""> <img width="70" src="{{ asset('assets/img/sinta.png') }}" alt=""></a>
                      </div>
                      <div class="col-md-4">
                        <a href=""><img width="70" src="{{ asset('assets/img/scopus.png') }}" alt=""></a>
                      </div>
                      <div class="col-md-4">
                        <a href=""><img width="70" src="{{ asset('assets/img/schoolar.png') }}" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection


