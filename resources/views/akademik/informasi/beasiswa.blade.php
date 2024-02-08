@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Informasi Beasiswa</h2> 
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Informasi Beasiswa</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs --> 
<section id="beasiswa" class="beasiswa">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Informasi Penerimaan Beasiswa</h2>
    </div>
    <div style="margin-top: 10px;" class="row gy-4">

      <div class="col-lg-4">
        <div class="content px-xl-5">
          <img width="500" src="{{asset('assets/img/beasiswa.png')}}" alt="">
        </div>
      </div>

      <div class="col-lg-8">

        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                <span class="num">1.</span>
                PENERIMAAN BEASISWA BANK INDONESIA
              </button>
            </h3>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
              <p>Penerima Beasiswa Bank Indonesia adalah Mahasiswa yang memenuhi persyaratan antara lain sebagai berikut.</p>
              <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                <span class="num">2.</span>
                PENERIMAAN BEASISWA KSE
              </button>
            </h3>
            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                <p>Penerima Beasiswa Karya Salemba Empat adalah Mahasiswa yang memenuhi persyaratan antara lain sebagai berikut.</p>
                <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                <span class="num">3.</span>
                PENERIMAAN BEASISWA LPS
              </button>
            </h3>
            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                <p>Penerima Beasiswa Lembaga Penjamin Simpanan adalah Mahasiswa yang memenuhi persyaratan antara lain sebagai berikut.</p>
                <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div><!-- # Faq item-->
        </div>

      </div>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->

@endsection



