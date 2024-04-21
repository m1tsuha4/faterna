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

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-S1-Padang">S1 Padang</li>
              <li data-filter=".filter-S1-Payakumbuh">S1 Payakumbuh</li>
              <li data-filter=".filter-S2">S2</li>
              <li data-filter=".filter-S3">S3</li>
            </ul>
          </div>

          <div class="row gy-4 portfolio-container">
            @foreach($dosen as $d)
                  <div class="col-xl-6 col-md-6 portfolio-item filter-{{ $d->prodi }}">
                      <div class="portfolio-wrap">
                          <div class="dosen">
                              <div class="member d-flex align-items-start">
                                  <div class="pic"><img src="{{ asset('storage/dosen/'.$d->file) }}" class="img-fluid" alt=""></div>
                                  <div class="member-info">
                                      <h4>{{ $d->nama }}</h4>
                                      <span>
                            <p class="card-text"><strong>NIDN:</strong> {{ $d->nidn }}</p>
                            <p class="card-text"><strong>Depertement:</strong> {{ $d->departemen }}</p>
                            <p class="card-text"><strong>Jabatan:</strong> {{ $d->jabatan_akademik }}</p>
                            <p class="card-text"><strong>Email:</strong> {{ $d->email }}</p>
                            <p class="card-text"><strong>Edukasi S1:</strong> {{ $d->edukasi_s1 }}</p>
                            <p class="card-text"><strong>Edukasi S2:</strong> {{ $d->edukasi_s2 }}</p>
                            <p class="card-text"><strong>Edukasi S3:</strong> {{ $d->edukasi_s3 }}</p>
                        </span>
                                      <br>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <a href="{{ $d->link_sinta }}"> <img width="70" src="{{ asset('assets/img/sinta.png') }}" alt=""></a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="{{ $d->link_scopus }}"><img width="70" src="{{ asset('assets/img/scopus.png') }}" alt=""></a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="{{ $d->link_scholar }}"><img width="70" src="{{ asset('assets/img/schoolar.png') }}" alt=""></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div><!-- End Portfolio Item -->
            @endforeach


{{--            <div class="col-xl-6 col-md-6 portfolio-item filter-s1-pyk">--}}
{{--              <div class="portfolio-wrap">--}}
{{--                  <div class="dosen">--}}
{{--                  <div class="member d-flex align-items-start">--}}
{{--                      <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>--}}
{{--                      <div class="member-info">--}}
{{--                        <h4>Elandra Maulana</h4>--}}
{{--                        <span>--}}
{{--                            <p class="card-text"><strong>NIDN:</strong> Teknik Komputer</p>--}}
{{--                            <p class="card-text"><strong>Depertement:</strong> Teknik Komputer</p>--}}
{{--                            <p class="card-text"><strong>Jabatan:</strong>Lektor</p>--}}
{{--                            <p class="card-text"><strong>Email:</strong> elandramaulana81@gmail.com</p>--}}
{{--                            <p class="card-text"><strong>Edukasi S1:</strong></p>--}}
{{--                            <p class="card-text"><strong>Edukasi S2:</strong></p>--}}
{{--                            <p class="card-text"><strong>Edukasi S3:</strong></p>--}}
{{--                        </span>--}}
{{--                        <br>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <a href=""> <img width="70" src="{{ asset('assets/img/sinta.png') }}" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <a href=""><img width="70" src="{{ asset('assets/img/scopus.png') }}" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <a href=""><img width="70" src="{{ asset('assets/img/schoolar.png') }}" alt=""></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--            </div><!-- End Portfolio Item -->--}}


          </div><!-- End Portfolio Container -->

        </div>


      </div>
    </section><!-- End Portfolio Section -->


@endsection


