@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Struktur Organisasi</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Struktur Organisasi</li>
      </ol>
    </div>
  </nav>
</div>


<section  class="profile-ppid about" id="profile-ppid about">
  <div class="container" data-aos="fade-up">
    <div style="" class="section-title ppid d-flex justify-content-start">
      <h1> Struktur Organisasi Faterna</h1>
    </div>

    <div class="row content">
      <div class="col-lg-12 d-flex justify-content-center">
        <img src="{{asset('assets/img/struktur.png')}}" alt="">

      </div>
  </div>
</div>
</section>
@endsection

