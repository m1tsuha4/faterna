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

    <section id="faq" class="faq" data-aos="fade-up">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <!-- Column 1 -->
          <div class="col-md-6">
            <!-- Table 1 -->
            <div class="mb-4">
              <div class="text-center">
                <h5>Laboratorium Sosial Ekonomi Peternakan</h5>
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
                      <td>Prof. Dr. Ir. Asdi Agustar., M.Sc</td>
                      <td>0001016101</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Prof. Dr.Ir. James Hellyward., MS</td>
                      <td>0016076103</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Dr. Ir. Fuad Madarisa., M.Sc</td>
                      <td>0018066103</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Ir. Andri., MS</td>
                      <td>0024036203</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Ir. Boyon, MP</td>
                      <td>0005016203</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Dr. Ir. Dwi Yuzaria., S.E., MS</td>
                      <td>0010126103</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Dr. Ir. Basril., MM</td>
                      <td>0007045909</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Dr. Ir. Arfa’i., MS</td>
                      <td>0006066003</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Ir. Amrizal Anas., MP</td>
                      <td>0003016301</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Dr. Nurhayati., S.Pt., MM</td>
                      <td>0027127406</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Fitrini., SP., M.Econs</td>
                      <td>0028027906</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Rahmi Wati., S.Pt., M.Si</td>
                      <td>0023107604</td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Ir. Amna Suresti., M.Si</td>
                      <td>0018016906</td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>Ediset., S.Pt., M.Si</td>
                      <td>1012098001</td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td>Winda Sartika., S.Pt., M.Si</td>
                      <td>0029058201</td>
                    </tr>
                    <tr>
                      <td>16</td>
                      <td>Ida Indrayani., S.Pt., M.Si</td>
                      <td>0020108102</td>
                    </tr>
                    <tr>
                      <td>17</td>
                      <td>Elfi Rahmi., S.Pt., M.Si</td>
                      <td>0003018201</td>
                    </tr>
                    <tr>
                      <td>18</td>
                      <td>Riza Andesca Putra., S.Pt., M.Si</td>
                      <td>1018068503</td>
                    </tr>
                    <tr>
                      <td>19</td>
                      <td>Tevina Edwin., S.Pt., MP</td>
                      <td>0016038907</td>
                    </tr>
                    <tr>
                      <td>20</td>
                      <td>Aditya Alqamal., S.Pt., M.Sc</td>
                      <td>0005039108</td>
                    </tr>
                    <tr>
                      <td>21</td>
                      <td>Noni Novarista., S.Pt., M.Si</td>
                      <td>1030098703</td>
                    </tr>
                    <tr>
                      <td>22</td>
                      <td>Dr. Fitrimawati., S.Pt., M.Si</td>
                      <td>0007117208</td>
                    </tr>
                    <tr>
                      <td>23</td>
                      <td>M. Ikhsan Rias., S.E., M.Si</td>
                      <td>0009076506</td>
                    </tr>
                    <tr>
                      <td>24</td>
                      <td>Amri Syahardi., S.P., M.Si</td>
                      <td>-</td>
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
                <h5>Laboratorium Komunikasi Pembangunan</h5>
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
                      <td>Dr. Ir. Fuad Madarisa., M.Sc</td>
                      <td>0018066103</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Dr. Ir. Basril., MM</td>
                      <td>0007045909</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Ir. Amrizal Anas., MP</td>
                      <td>0003016301</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Ediset., S.Pt., M.Si</td>
                      <td>1012098001</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Riza Andesca Putra., S.Pt., M.Si</td>
                      <td>1018068503</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Aditya Alqamal., S.Pt., M.Sc</td>
                      <td>0005039108</td>
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
            @foreach($bisnis_peternakan as $d)
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
                                              <a href="{{ $d->link_sinta }}"> <img width="70" src="{{ asset('assets/img/inta.png') }}" alt=""></a>
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


