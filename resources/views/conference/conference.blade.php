@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Conference FATERNA UNAND</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Conference FATERNA UNAND</li>
      </ol>
    </div>
  </nav>
</div>
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div style="margin-top: -80px;" class="row content">
      <div class="col-lg-6 d-flex justify-content-start">
        <img width="400" height="350" src="{{asset('assets/img/conference.png')}}" alt="image">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" style="margin-top: 110px">
        <div class="section-title ppid d-flex justify-content-start">
          <h1>Conference FATERNA UNAND</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="conference" class="conference" style="margin-top: -110px">
  <div class="container" data-aos="fade-up" >
    <div class="accordion" id="conlist" data-aos="fade-up" data-aos-delay="100" >
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#con-conten-1">
            <span class="num">1. </span>
              Judul Conference 1  
          </button>
        </h2>
        <div id="con-conten-1" class="accordion-collapse collapse" data-bs-parent="#conlist">
          <div class="accordion-body">
              <div class="col-lg-12 d-flex justify-content-center">
              <div class="card">
                <div class="card-body">
                <img src="{{asset('assets/img/maklumat-ppid.jpg')}}" alt="">
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
      
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#con-conten-2">
            <span class="num">2. </span>
              Judul Conference 2  
          </button>
        </h2>
        <div id="con-conten-2" class="accordion-collapse collapse" data-bs-parent="#conlist">
          <div class="accordion-body">
          <div class="col-lg-12 d-flex justify-content-center">
           <div class="card">
            <div class="card-body">
            <img src="{{asset('assets/img/maklumat-ppid.jpg')}}" alt="">
            </div>
           </div>
          </div>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#con-conten-3">
            <span class="num">3. </span>
              Judul Conference 3  
          </button>
        </h2>
        <div id="con-conten-3" class="accordion-collapse collapse" data-bs-parent="#conlist">
          <div class="accordion-body">
          <div class="col-lg-12 d-flex justify-content-center">
           <div class="card">
            <div class="card-body">
            <img src="{{asset('assets/img/maklumat-ppid.jpg')}}" alt="">
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

