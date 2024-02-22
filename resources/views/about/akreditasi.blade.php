@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Akreditasi</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Akreditasi</li>
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
              <h1>Akreditasi Program Studi</h1>
            </div>
            <p>
Fakultas Peternakan Universitas Andalas memiliki 4 Program Studi yang telah terakreditasi oleh BAN-PT              </p>
          </div>
        </div>

      </div>
    </section>
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

      <div class="section-header">
          <h2>Akreditasi Faterna UNAND</h2>
        </div>

        <div style="margin-top: -60px;" class="section-title ppid d-flex justify-content-center">
          <h1 style="font-weight: 700; color:#87566e"> Akreditasi</h1>
        </div>

        <div style="margin-top: 20px;" class="row gy-4">
      
          <div class="col-lg-16">
            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                   Akreditasi Sarjana (S1) Peternakan
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  <a href="#">Selengkapnya</a>
                  </div>
                </div>
              </div>
                    <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Akreditasi Sarjana (S1) Peternakan (Kampus II Payakumbuh)
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <a href="#">Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Akreditasi Magister (S2) Ilmu Peternakan 
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    <a href="#">Selengkapnya</a>
                  </div>
              </div>
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Akreditasi Doktor (S3) Ilmu Peternakan 
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                   <a href="#">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
