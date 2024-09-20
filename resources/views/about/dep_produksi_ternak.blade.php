@extends('layout.menulayout')

@section('contentmenu')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Departemen Teknologi Produksi Ternak</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Departemen Teknologi Produksi Ternak</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


    <section id="faq" class="faq" data-aos="fade-up">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <!-- Table 1 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="text-center">
              <h5>Laboratorium Produksi Ternak Unggas</h5>
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
                    <td>Prof. Dr. Ir. Husmaini., MP</td>
                    <td>0013056302</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dr. Ir. Sabrina., MP</td>
                    <td>0001096004</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Dr. Ir. T ertia Delia Nova., MS</td>
                    <td>0016116002</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Dr. Ir. Yan Heryandi., MP</td>
                    <td>0014016402</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Dr. Ir. Zulkarnain., MS</td>
                    <td>0030125803</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Dr. Kusnadidi Subekti., S.Pt., MP</td>
                    <td>0013077903</td>
                  </tr>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
    
          <!-- Table 2 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="text-center">
              <h5>Laboratorium Produksi Ternak Potong</h5>
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
                    <td>Prof. Dr. Ir. Salam N. Aritonang., MS</td>
                    <td>0011036116</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Prof. Dr. Ir. Khasrad., M.Si</td>
                    <td>0020116301</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Reswati., S.Pt., M.Si</td>
                    <td>0007027008</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Dr. Yetmaneli., S.Pt., MP</td>
                    <td>0004037504</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Rusdimansyah., S.Pt., M.Si</td>
                    <td>0007078103</td>
                  </tr>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
    
          <!-- Table 3 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="text-center">
              <h5>Laboratorium Produksi Ternak Perah</h5>
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
                    <td>Prof. Dr. Ir. Elly Roza., MS</td>
                    <td>0021086104</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dr. Ir. Arief., MS</td>
                    <td>0013086201</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Eli Ratni., S.Pt., MP</td>
                    <td>1010058301</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Hilda Susanty., S.Pt., M.Si</td>
                    <td>0026118002</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Rizqan., S.Pt., M.Pt</td>
                    <td>0016069302</td>
                  </tr>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
    
          <!-- Table 4 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="text-center">
              <h5>Laboratorium Pemuliaan Ternak</h5>
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
                    <td>Prof. Dr. Ir. Yurnalis., MS</td>
                    <td>0011055402</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dr. Ir. Firda Arlina., M.Si</td>
                    <td>0010026404</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Ir. Mangku Mundana., MP</td>
                    <td>0018115902</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Dr. Ir. Tinda Afriani., MP</td>
                    <td>0026046202</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Dr. Rusfidra, S.Pt., MP</td>
                    <td>0022067002</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Linda Suhartati., S.Pt., M.Si</td>
                    <td>0004019303</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Adisti Rastosari., S.Pt., M.Sc</td>
                    <td>0225058801</td>
                  </tr>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
    
          <!-- Table 5 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="text-center">
              <h5>Laboratorium Reproduksi Tenak</h5>
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
                    <td>Prof. Dr. Ir. Zaituni Udin., M.Sc</td>
                    <td>0007095302</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dr. Ir. Masrizal., MS</td>
                    <td>0020096112</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Dr. Ir. Jaswandi., MS</td>
                    <td>0004106307</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Dr. Ir. Hendri., MS</td>
                    <td>0029076203</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Dr. Ferry Lismanto., S.Pt., MP</td>
                    <td>0005097803</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Ananda., S.Si., M.Si</td>
                    <td>0024099204</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Syafri Nanda., S.Pt., M.Si</td>
                    <td>0015039109</td>
                  </tr>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
    
          <!-- Table 6 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="text-center">
              <h5>Laboratorium Fisiologi Ternak</h5>
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
                    <td>Dr. Ir. Azhar., MS</td>
                    <td>0001095904</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Dr. Lendrawati., S.Pt., M.Si</td>
                    <td>0013038304</td>
                  </tr>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
    
          <!-- Table 7 -->
          <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="text-center">
              <h5>Laboratorium Kesehatan Ternak</h5>
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
                    <td>Dr. drh. Yulia Yellita., MP</td>
                    <td>0012076102</td>
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
            @foreach($dosen_produksi_ternak as $d)
            <a href="{{ route('dosen') }}">
                  <div class="col-xl-6 col-md-6 portfolio-item filter-active">
                      <div class="portfolio-wrap">
                          <div class="dosen">
                              <div class="member d-flex align-items-start">
                                  <div class="pic"><img src="{{ asset('storage/dosen/'.$d->file) }}" class="img-fluid" alt=""></div>
                                  <div class="member-info">
                                      <h4>{{ $d->nama }}</h4>
                                      <span>
                                          <p class="card-text"><strong>NIDN:</strong> {{ $d->nidn }}</p>
                                          <p class="card-text" style="text-align: justify;"><strong>Deskripsi Diri : </strong>Dosen Fakultas Peternakan Unand dengan bidang keahlian Ilmu Nutrisi Ternak Unggas dengan fokus 
                                            kajian penelitian pada pemanfaatan dan pengolahan rumput laut coklat sebagai bahan pakan ternak unggas. Selain menjadi dosen juga aktif pada 
                                            kegiatan olahraga baik dalam kampus maupun diluar kampus, yang berfokus pada pembinaan olahraga dibidang sepakbola, futsal dan street soccer 
                                            pada mahasiswa, pelajar dan umum</p>
                                          <p class="card-text"><strong>Depertement:</strong> {{ $d->departemen }}</p>
                                          <p class="card-text"><strong>Jabatan:</strong> {{ $d->jabatan_akademik }}</p>
                                          <p class="card-text"><strong>S1:</strong> {{ $d->edukasi_s1 }}</p>
                                          <p class="card-text"><strong>S2:</strong> {{ $d->edukasi_s2 }}</p>
                                          <p class="card-text"><strong>S3:</strong> {{ $d->edukasi_s3 }}</p>
                                          <p class="card-text"><strong>Email:</strong> {{ $d->email }}</p>
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


