@extends('layout.menulayout')

@section('contentmenu')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Gallery Faterna</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Gallery</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Gallery</h2>
            </div>
            <div class="row gy-4">
                @foreach($allGallery as $gallery)
                    <div class="col-xl-4 col-md-6">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('storage/galeri/'. $gallery->file) }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('storage/galeri/'. $gallery->file) }}" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4>{{ $gallery->judul }}</h4>
                                <p>{{ $gallery->deskripsi }}</p>
                            </div>
                        </div>
                    </div><!-- End post list item -->
                @endforeach


            </div><!-- End recent posts list -->

        </div>
    </section><!-- End Recent Blog Posts Section -->

@endsection


