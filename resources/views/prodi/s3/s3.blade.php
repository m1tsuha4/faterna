@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Program Studi S3 Ilmu Peternakan</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>S3 Ilmu Peternakan</li>
      </ol>
    </div>
  </nav>
</div>

<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div style="margin-top: -50px;" class="row content">
          <div class="col-lg-6 d-flex justify-content-start">
            <img width="500" src="{{asset('assets/img/hero-img.png')}}" alt="image">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
          
            <div class="section-title ppid d-flex justify-content-start">
              <h1>Program Studi Doktor S3 Ilmu Peternakan </h1>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, magnam perferendis odit sequi quam cupiditate! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, dolorum tempore vero iure sint ipsum ea adipisci quas necessitatibus natus!
              </p>
          </div>
        </div>

      </div>
    </section>
    <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-8 mt-5 justify-content-center">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clock-history"></i></div>
              <h4 class="title"><a href="{{ route('sejarah-prodi-s3') }}" class="stretched-link">Sejarah</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bullseye"></i></div>
              <h4 class="title"><a href="{{ route('visi-misi-prodi-s3') }}" class="stretched-link">Visi-Misi</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-arrow-up-square-fill"></i></div>
              <h4 class="title"><a href="{{ route('tujuan-prodi-s3') }}" class="stretched-link">Tujuan</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>
    </div>
  </section>
  <section id="about" class="about">
     <div class="section-header">
          <h2>Faterna UNAND</h2>
</div>
      <div class="container" data-aos="fade-up">
        <div style="margin-top: -50px;" class="row content">
          <div class="col-lg-6 d-flex justify-content-start">
            <img width="500" src="{{asset('assets/img/hero-img.png')}}" alt="image">
          </div>
          
          <div class="col-lg-6 pt-4 pt-lg-0">
         
            <div class="section-title ppid d-flex justify-content-start">
                
              <h1>Informasi Penerimaan Mahasiswa Baru</h1>
            </div>
            <p>
            Terdiri dari berbagai jenjang pendidikan, Fakultas Peternakan Universitas Andalas memiliki berbagai jalur masuk yang bervariasi, berikut informasi terkait penerimaan mahasiswa baru di lingkungan Fakultas Peternakan Universitas Andalas :

</p>
          </div>
        </div>

      </div>
      
    </section>
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
             <div style="margin-top: 20px;" class="row gy-4">
      
          <div class="col-lg-16">
            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Penerimaan Mahasiswa Baru Program Sarjana (S1) Peternakan
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  <a href="https://pmb.unand.ac.id/">Selengkapnya</a>
                  </div>
                </div>
              </div>
                    <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  Penerimaan Mahasiswa Baru Program Magister (S2) Ilmu Peternakan
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <a href="https://pasca.unand.ac.id/id/">Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  Penerimaan Mahasiswa Baru Program Doktor (S3) Ilmu Peternakan
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    <a href="https://pasca.unand.ac.id/id/">Selengkapnya</a>
                  </div>
              </div>
                          </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
