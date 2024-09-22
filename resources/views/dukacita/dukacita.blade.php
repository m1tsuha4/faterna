@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Berita Duka Cita FATERNA UNAND</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Berita Duka Cita FATERNA UNAND</li>
      </ol>
    </div>
  </nav>
</div>
<section id="dukacita-header" class="dukacita-header">
  <div class="container" data-aos="fade-up" style="margin-top: -20px">
    <div class="section-header">
      <h2>FATERNA UNAND</h2>
    </div>
    <div class="section-title duka" style="margin-top:-80px ">
      <h1>Berita Duka Cita</h1>
    </div>
  </div>
</section>
<section id="duka" class="duka" style="margin-top: -80px">
    @foreach($allDukaCita as $dukaCita)
        <div class="container" data-aos="fade-up">
            <ul>
                <li>
                    <div class="section-title duka">
                        <h1>{{ $dukaCita->judul }}</h1>
                    </div>
                    <span class="rss-date">{{ $dukaCita->tanggal }}</span>
                    <div class="row content">
                        <div class="col-lg-6 d-flex justify-content-start" style="text-align: justify; margin-top: 10px">
                            <p>{{ $dukaCita->deskripsi }}</p>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 portfolio-item ruangbaca" style="margin-top:-90px ">
                            <a href="{{ asset('storage/berita/'.$dukaCita->file) }}" data-gallery="portfolio-gallery-ruangbaca" class="glightbox"><img src="{{ asset('storage/berita/'.$dukaCita->file) }}" width="500" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <br>
        <br>
    @endforeach




{{--  <div class="container" data-aos="fade-up">--}}
{{--    <ul>--}}
{{--      <li>--}}
{{--        <div class="section-title duka">--}}
{{--          <h1>Judul Berita2</h1>--}}
{{--        </div>--}}
{{--        <span class="rss-date">16 November 2023</span>--}}
{{--        <div class="row content">--}}
{{--          <div class="col-lg-6 d-flex justify-content-start" style="text-align: justify; margin-top: 10px">--}}
{{--            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, --}}
{{--              culpa assumenda quas eos a accusantium fuga laboriosam odio? Doloremque sequi --}}
{{--              corporis pariatur temporibus nemo. At facere harum illum. Voluptas, amet?. Lorem --}}
{{--              ipsum dolor sit amet consectetur adipisicing elit. At maxime deleniti aspernatur --}}
{{--              nulla ipsum quaerat consectetur, ullam aut aliquid reiciendis quidem beatae laborum itaque eos.--}}
{{--              Laborum suscipit fuga unde fugit.</p>--}}
{{--          </div>--}}
{{--          <div class="col-lg-6 pt-4 pt-lg-0 portfolio-item ruangbaca" style="margin-top:-90px ">--}}
{{--            <a href="{{asset('assets/img/ruangbaca.jpg')}}" data-gallery="portfolio-gallery-ruangbaca" class="glightbox"><img src="{{asset('assets/img/ruangbaca.jpg')}}" width="500" class="img-fluid" alt=""></a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--    </ul>--}}
{{--  </div>--}}
</section>
@endsection

