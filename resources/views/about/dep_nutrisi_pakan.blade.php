@extends('layout.menulayout')

@section('contentmenu')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Departemen Ilmu Nutrisi dan Teknologi Pakan</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Departemen Ilmu Nutrisi dan Teknologi Pakan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section id="faq" class="faq" data-aos="fade-up">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <!-- Column 1 -->
          <div class="col-md-6">
            <!-- Table 1 -->
            <div class="mb-4">
              <div class="text-center">
                <h5>Laboratorium Nutrisi Ruminansia</h5>
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
                      <td>Prof. Dr. Ir. Mardiati Zain., MS</td>
                      <td>0019066503</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Prof. Dr. Ir. Novirman Jamarun., M.Sc</td>
                      <td>0006115502</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Prof. Dr. Ir. Hermon., M.Agr</td>
                      <td>0024075701</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Prof. Dr. Ir. Fauzia Agustin., MS</td>
                      <td>0017085905</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Dr. Ir. Elihasridas., MS</td>
                      <td>0021096304</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Ir. Maramis., MP</td>
                      <td>0001036004</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Dr. Ir. Rusmana W.S.N., M.Rur.Sc</td>
                      <td>0019096204</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Ir. Erpomen., MP</td>
                      <td>0011066206</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Dr. Roni Pazla., S.Pt., MP</td>
                      <td>0014058506</td>
                    </tr>
                    <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
            </div>
    
            <!-- Table 2 -->
            <div class="mb-4">
              <div class="text-center">
                <h5>Laboratorium Nutrisi Non Ruminansia</h5>
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
                      <td>Prof. Dr. Ir.  Mirnawati., MS</td>
                      <td>0026026207</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Prof. Dr. Ir.  Yose Rizal., M.Sc</td>
                      <td>0014055603</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Prof. Dr. Ir.  Wizna., MS</td>
                      <td>0014075701</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Prof. Dr. Ir.  Mirzah., MS</td>
                      <td>0015055801</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Prof. Dr. Ir.  Maria Endo Mahata., MS</td>
                      <td>0012066304</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Dr. Ir.  Gita Ciptaan., MP</td>
                      <td>0010115905</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Dr. Ir.  Ade Djulardi., MS</td>
                      <td>0024075903</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Dr. Ir.  Ahadiyah Yuniza., MS</td>
                      <td>0023066301</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Dr. Ridho Kurniawan Rusli., S.Pt., MP</td>
                      <td>0004078803</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Dr. Zurmiati., S.Pt</td>
                      <td>0028108907</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Robi Amizar., S.Pt., M.Si</td>
                      <td>0004078705</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Sepri Reski., S.Pt., M.Pt</td>
                      <td>0014099202</td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Kadran Fajrona., S.Pt., M.Pt</td>
                      <td>0025029401</td>
                    </tr>
                    <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    
          <!-- Column 2 -->
          <div class="col-md-6">
            <!-- Table 3 -->
            <div class="mb-4">
              <div class="text-center">
                <h5>Laboratorium Teknologi Industri Pakan</h5>
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
                      <td>Prof. Dr. Ir.  Khalil., M.Sc</td>
                      <td>0019056001</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Prof. Dr. Ir.  Yetti Marlida., MS</td>
                      <td>0005076304</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Prof. Dr. Ir.  Nuraini., MS</td>
                      <td>0005056302</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Dr. Ir.  Harnentis., MS</td>
                      <td>0031125894</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Dr. Ir.  Adrizal., M.Si</td>
                      <td>0023126201</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Dr. Montesqrit., S.Pt., M.Si</td>
                      <td>0025117001</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Dr. Ir.  Yuliati Shafan Nur., MS</td>
                      <td>0022076201</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Yessi Chwenta Sari., S.Pt., M.Si</td>
                      <td>0020059106</td>
                    </tr>
                    <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
            </div>
    
            <!-- Table 4 -->
            <div class="mb-4">
              <div class="text-center">
                <h5>Laboratorium Hijauan Pakan Ternak</h5>
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
                      <td>Dr. Ir. Suyitman., MP</td>
                      <td>0001056101</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Dr. Evitayani., S.Pt., M.Agr</td>
                      <td>0029107302</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Dr. Riesi Sriagtula., S.Pt., MP</td>
                      <td>0029087504</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Dr. Mardhiyetti., S.Pt., M.Si</td>
                      <td>0017057603</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Yolani Utami., S.Pt., M.Si</td>
                      <td>0017118803</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Dr. Imana Martaguri., S.Pt., M.Si</td>
                      <td>0001038102</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Dr. Simel Sowmen., S.Pt., MP</td>
                      <td>0007058102</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Qurrata Aini., S.Pt., MP</td>
                      <td>0005117701</td>
                    </tr>
                    <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
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
            @foreach($dosen_teknologi_pakan as $d)
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


