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

 <!-- ======= Team Section ======= -->
 <section id="dosen" class="dosen">
      <div class="container-fluid" data-aos="fade-up">


       <div class="row mt-4">
       <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Elandra Maulana</h4>
                <span>
                    <p class="card-text">Depertement: </p>
                    <p class="card-text">Email: </p>
                    <p class="card-text">Edukasi: </p>
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

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Elandra Maulana</h4>
                <span>
                    <p class="card-text">Depertement: </p>
                    <p class="card-text">Email: </p>
                    <p class="card-text">Edukasi: </p>
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
       
       <div class="row mt-4">
       <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Elandra Maulana</h4>
                <span>
                    <p class="card-text">Depertement: </p>
                    <p class="card-text">Email: </p>
                    <p class="card-text">Edukasi: </p>
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

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Elandra Maulana</h4>
                <span>
                    <p class="card-text">Depertement: </p>
                    <p class="card-text">Email: </p>
                    <p class="card-text">Edukasi: </p>
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
    </section><!-- End Team Section -->


@endsection


