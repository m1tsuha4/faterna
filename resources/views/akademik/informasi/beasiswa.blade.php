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
    <div style="margin-top: -50px;" class="row content">
      <div class="col-lg-6 d-flex justify-content-start">
        <img width="400" height="350" src="{{asset('assets/img/beasiswa.jpg')}}" alt="image">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" style="margin-top: 50px">
        <div class="section-header">
          <h2>FATERNA UNAND</h2>
        </div>
        <div class="section-title d-flex justify-content-start" style="margin-top:-80px ">
          <h1>Informasi Penerimaan Beasiswa</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container" data-aos="fade-up" style="margin-top: 30px">
    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
        @php
            $no = 1;
        @endphp
        @foreach($beasiswa as $b)
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-{{ $no }}">
                        <span class="num">{{ $no }}.</span>
                        {{ $b->judul }}
                    </button>
                </h3>
                <div id="faq-content-{{ $no }}" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                        <p>Penerima {{ $b->judul }} adalah Mahasiswa yang memenuhi persyaratan antara lain sebagai berikut. Deadline {{ $b->tanggal }}</p>
                        <a href="{{ $b->link }}" target="_blank">Selengkapnya</a>
                    </div>
                </div>
            </div><!-- # Faq item-->
            @php
                $no++;
            @endphp
        @endforeach


{{--      <div class="accordion-item">--}}
{{--        <h3 class="accordion-header">--}}
{{--          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">--}}
{{--            <span class="num">2.</span>--}}
{{--            PENERIMAAN BEASISWA KSE--}}
{{--          </button>--}}
{{--        </h3>--}}
{{--        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">--}}
{{--          <div class="accordion-body">--}}
{{--            <p>Penerima Beasiswa Karya Salemba Empat adalah Mahasiswa yang memenuhi persyaratan antara lain sebagai berikut.</p>--}}
{{--            <a href="#">Selengkapnya</a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div><!-- # Faq item-->--}}

{{--      <div class="accordion-item">--}}
{{--        <h3 class="accordion-header">--}}
{{--          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">--}}
{{--            <span class="num">3.</span>--}}
{{--            PENERIMAAN BEASISWA LPS--}}
{{--          </button>--}}
{{--        </h3>--}}
{{--        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">--}}
{{--          <div class="accordion-body">--}}
{{--            <p>Penerima Beasiswa Lembaga Penjamin Simpanan adalah Mahasiswa yang memenuhi persyaratan antara lain sebagai berikut.</p>--}}
{{--            <a href="#">Selengkapnya</a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div><!-- # Faq item-->--}}
    </div>
  </div>
  </div>
</section><!-- End Frequently Asked Questions Section -->

@endsection



