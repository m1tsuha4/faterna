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
                  <div class="pic"><img src="{{ asset('storage/dosen/'.$dosen->file) }}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>{{ $dosen->nama }}</h4>
                    <span>
                      <p class="card-text"><strong>NIDN : </strong> {{ $dosen->nidn }}</p>
                      <p class="card-text" style="text-align: justify;"><strong>Deskripsi Diri : </strong> {{ $dosen->profile }}</p>
                      <p class="card-text"><strong>Depertement : </strong> {{ $dosen->departmen }}</p>
                      <p class="card-text"><strong>Jabatan : </strong> {{ $dosen->jabatan_akademik }}</p>
                      <p class="card-text"><strong>Email : </strong> {{ $dosen->email }}</p>
                      <p class="card-text"><strong>Edukasi S1 : {{ $dosen->edukasi_s1 }}</strong></p>
                      <p class="card-text"><strong>Edukasi S2 : {{ $dosen->edukasi_s2 }}</strong></p>
                      <p class="card-text"><strong>Edukasi S3 : {{ $dosen->edukasi_s3 }}</strong></p>
                      <p class="card-text"><strong>Mata Kuliah : </strong> <br>
                        {!! nl2br(e($dosen->mata_kuliah)) !!}
                      </p>                    
                      <p class="card-text"><strong>Bidang Keahlian : </strong> <br>
                        {!! nl2br(e($dosen->bidang_keahlian)) !!}
                      </p>
                      <p class="card-text"><strong>Riset Internal : </strong> <br>
                        {!! nl2br(e($dosen->riset_interest)) !!}
                      </p>
                    </span>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <a href="{{ $dosen->link_sinta }}"> <img width="70" src="{{ asset('assets/img/sinta.png') }}" alt=""></a>
                      </div>
                      <div class="col-md-4">
                        <a href="{{ $dosen->link_scopus }}"><img width="70" src="{{ asset('assets/img/scopus.png') }}" alt=""></a>
                      </div>
                      <div class="col-md-4">
                        <a href="{{ $dosen->link_scholar }}"><img width="70" src="{{ asset('assets/img/schoolar.png') }}" alt=""></a>
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


