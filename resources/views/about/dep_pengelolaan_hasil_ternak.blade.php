@extends('layout.menulayout')

@section('contentmenu')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Departemen Teknologi Pengelolaan Hasil Ternak</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Departemen Teknologi Pengelolaan Hasil Ternak</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


    <section id="faq" class="faq" data-aos="fade-up">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <!-- Table 1 -->
          <div class="col-sm-12 col-md-6 col-lg-12 mb-4">
            <div class="text-center">
              <h5>Laboratorium Teknologi Hasil Ternak</h5>
            </div>
            <div class="post-content table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Dosen</th>
                    <th>NIDN</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>drh. Yuherman., MS., Ph.D</td>
                    <td>0024115902</td>
                  </tr>
                  <tr>
                  <tr>
                    <td>2</td>
                    <td>Dr. Indri Juliyarsi., S.P., MP</td>
                    <td>0015077606</td>
                  </tr>
                  <tr>
                  <tr>
                    <td>3</td>
                    <td>Dr. Sri Melia., S.TP., MP</td>
                    <td>0004067502</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Deni Novia., ST.P., MP</td>
                    <td>0030117703</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Afriani Sandra., S.Pt., M.Sc</td>
                    <td>0010048204</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Ely Vebriyanti., S.Pt., MP</td>
                    <td>0011027906</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Ade Rakhmadi., S.Pt., MP</td>
                    <td>0004058003</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Ade Sukma., S.Pt., MP, Ph.D</td>
                    <td>0017078502</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Ferawati., S.Pt., M.Si</td>
                    <td>0014118302</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>El Latifa Sri Suharto., S.Pt., M.Si</td>
                    <td>0021019004</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Yudi Rahmadian., S.Pt., M.Sc</td>
                    <td>0008119205</td>
                  </tr>
                    
                  <tr>
                    <td>12</td>
                    <td>Aronal Arief Putra., S.Pt., M.Sc, Ph.D</td>
                    <td>0023088301</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Rizki Dwi Setiawan., S.TP., M.Si</td>
                    <td>0028049006</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Yulianti Fitri Kurnia., S.PT., M.Si</td>
                    <td>8829330017</td>
                  </tr>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          {{-- <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-S1-Padang">S1 Padang</li>
              <li data-filter=".filter-S1-Payakumbuh">S1 Payakumbuh</li>
              <li data-filter=".filter-S2">S2</li>
              <li data-filter=".filter-S3">S3</li>
            </ul>
          </div> --}}

          <div class="row gy-4 portfolio-container">
            @foreach($pengelolaan_hasil_ternak as $d)
            <a href="/dosen/{{ $d->nidn }}">
                   <div class="col-xl-6 col-md-6 portfolio-item filter-active">
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
                                          <p class="card-text"><strong>S1:</strong> {{ $d->edukasi_s1 }}</p>
                                          <p class="card-text"><strong>S2:</strong> {{ $d->edukasi_s2 }}</p>
                                          <p class="card-text"><strong>S3:</strong> {{ $d->edukasi_s3 }}</p>
                                          <p class="card-text"><strong>Email:</strong> {{ $d->email }}</p>
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
            </a>
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


