@extends('layout.menulayout')

@section('contentmenu')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Portal Kiprah Civitas Akademika Faterna</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Kiprah Civitas Akademika</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


   <!-- ======= Blog Details Section ======= -->
   <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12">

            <article class="blog-details">

              <div class="post-img d-flex justify-content-center">
                <img src="{{ asset('storage/berita/'.$kiprah->file) }}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{ $kiprah->judul }}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">{{ $kiprah->author }} Faterna</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-01-01">{{ $kiprah->tanggal }}</time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                    {{ $kiprah->deskripsi }}
                </p>

              </div><!-- End post content -->
            </article><!-- End blog post -->
          </div>


        </div>

      </div>
    </section><!-- End Blog Details Section -->
@endsection


