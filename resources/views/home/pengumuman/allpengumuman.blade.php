@extends('layout.menulayout')

@section('contentmenu')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Portal Pengumuman Faterna</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Pengumuman</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-posts" class="recent-posts ">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pengumuman</h2>
        </div>

        <div class="row gy-4">
        @foreach($pengumuman as $p)
                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="{{ asset('storage/berita/'.$p->file) }}" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Pengumuman</p>

                        <h2 class="title">
                            <a href="{{ route('detailpengumuman',['id' => $p->id]) }}">{{ $p->judul }}</a>
                        </h2>

                        <div class="d-flex align-items-center">

                            <div class="post-meta">
                                <p class="post-author">{{ $p->author }} Faterna</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">{{ $p->tanggal }}</time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div><!-- End post list item -->
        @endforeach


        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

@endsection


