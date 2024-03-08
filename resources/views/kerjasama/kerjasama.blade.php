@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Kerja Sama FATERNA UNAND</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Kerja Sama FATERNA UNAND</li>
      </ol>
    </div>
  </nav>
</div>
<section id="kerjasama" class="kerjasama">
  <div class="container" data-aos="fade-up">
    <div style="margin-top: -50px;" class="row content">
      <div class="col-lg-6 d-flex justify-content-start">
        <img width="350" src="{{asset('assets/img/kerjasama.png')}}" alt="image">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" style="margin-top: 50px">
        <div class="section-header">
          <h2>FATERNA UNAND</h2>
        </div>
        <div class="section-title d-flex justify-content-start" style="margin-top:-80px ">
          <h1>Kerja Sama</h1>
        </div>
        <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing 
          elit. Dolor sed necessitatibus quibusdam laborum, alias nobis accusantium odio adipisci? 
          Tempore dolor dignissimos aspernatur vitae non ratione accusamus labore quia, eum sunt.</p>
      </div>
    </div>
  </div>
  <div class="container" data-aos="fade-up">
    <div class="dalamnegeri">
      <div class="section-header">
        <h2>Kerja Sama</h2>
      </div>
      <div class="section-title d-flex justify-content-start" style="margin-top:-80px ">
        <h1>Dalam Negeri</h1>
      </div>
      <div>
        <p>isinya berupa gambar kerjasama dengan intitusi terkait</p>
      </div>
    </div>

    <div class="luarnegeri">
      <div class="section-header">
        <h2>Kerja Sama</h2>
      </div>
      <div class="section-title d-flex justify-content-start" style="margin-top:-80px ">
        <h1>Luar Negeri</h1>
      </div>
      <div>
        <p>isinya berupa gambar kerjasama dengan intitusi terkait</p><!--isinya berupa gambar intitusi kerjasama-->
      </div>
    </div>
  </div>
</section><!-- End About Us Section -->
<section id="" class="">

</section>
@endsection

