@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Panduan Akademik FATERNA</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Panduan Akademik</li>
      </ol>
    </div>
  </nav>
</div>
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div style="margin-top: -50px;" class="row content">
      <div class="col-lg-6 d-flex justify-content-start">
        <img width="350" src="{{asset('assets/img/panduan2.png')}}" alt="image">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" style="margin-top: 80px">
        <div class="section-title ppid d-flex justify-content-start">
          <h1>Panduan Akademik FATERNA UNAND</h1>
        </div>
        <p style="text-align: justify">Panduan Akademik, dokumen yang berisi informasi sebagai pedoman dan informasi terkait
          aturan, tata cara, dan prosedur yang berkaitan dengan akademik yang harus diikuti oleh civitas akademika 
          Fakultas Peternakan Universitas Andalas.</p>
      </div>
    </div>
  </div>
</section><!-- End About Us Section -->
<section id="pakademik" class="pakademik">
  <div class="container" data-aos="fade-up">
   <!-- <div class="section-header">
      <h2>Panduan Akademik FATERNA</h2>
    </div>-->
    <div class="accordion" id="accordionlist" data-aos="fade-up" data-aos-delay="100">
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Panduan Portal Akademik Mahasiswa
            </font></font>  
          </button>
        </h3>
        <div id="collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample" >
          <div class="accordion-body">
            <p>Informasi detail terkait dapat di Download dibawah ini</p>
            <p><a href="#">Download</a></p>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Panduan Farm 2016
            </font></font>  
          </button>
        </h2>
        <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionlist" >
          <div class="accordion-body">
          <p>Informasi detail terkait dapat di Download dibawah ini</p>
            <p><a href="#">Download</a></p>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Panduan Akademik
            </font></font>  
          </button>
        </h2>
        <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionlist" >
          <div class="accordion-body">
            <ol>
              <li>
              <p>Informasi detail terkait dapat di Download dibawah ini</p>
                <p><a href="#">Download</a></p>
              </li>
              <li>
              <p>Informasi detail terkait dapat di Download dibawah ini</p>
                <p><a href="#">Download</a></p>
              </li>
            </ol>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Panduan dan SOP Tugas Akhir 
            </font></font>  
          </button>
        </h2>
        <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionlist" >
          <div class="accordion-body">
            <p>Informasi detail terkait Panduan dan SOP Tugas Akhir, Download dibawah ini</p>
            <p><a href="#">Download</a></p>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5">
            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Surat Bebas Labor
            </font></font>  
          </button>
        </h2>
        <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionlist" >
          <div class="accordion-body">
            <p>Informasi detail terkait Surat Bebas Labor, Download dibawah ini</p>
            <p><a href="#">Download</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- End Frequently Asked Questions Section -->
@endsection



