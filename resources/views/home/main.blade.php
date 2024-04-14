
@extends('layout.navmain')

@section('title', 'Fakultas Peternakan Universitas Andalas')

@section('contentmain')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Fakultas Peternakan Universitas Andalas</h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">

        </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Layanan Digital</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Single Sign On Unand</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lokasi kampus</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Tracer Study</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

      <!-- ======= About Us Section ======= -->
      <section style="margin-top: -100px;" id="blog" class="blog">

      <div class="section-header">
          <h2>Selayang Pandang</h2>
        </div>

      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

          <div class="card shadow">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <div class="post-img">
                        <img width="300" src="{{asset('assets/img/adrizal-dekan.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-body">
                      <h1>Selamat Datang</h1>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit saepe laudantium mollitia ea quod quam possimus deleniti accusantium in quis. Doloremque magni nemo unde ducimus facere fugit, neque tempora quisquam nobis minus eius illo soluta mollitia, voluptatem voluptate adipisci, reprehenderit iusto suscipit nesciunt incidunt nam! Autem expedita dicta minus recusandae!</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, perspiciatis. Quisquam maxime amet ea illum illo ratione maiores, laboriosam, eaque eligendi itaque expedita est nemo, aut fugit. Sunt ipsum reprehenderit corrupti ipsa tempore porro facere ratione? Cumque repellat vel in fugiat quibusdam accusamus sequi possimus nihil libero nulla molestias, ut ratione similique nemo aliquam amet. Dolore atque voluptatem numquam ab!</p>
                      </div>
                </div>
            </div>
        </div>


          </div>

          <div class="col-lg-4">

            <div class="sidebar">
              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Pengumuman</h3>

                <div class="mt-3">
                    @foreach($pengumuman as $p)
                        <div class="post-item mt-3">
                            <img style="width: 50px" src="{{ asset('storage/berita/'.$p->file) }}" alt="">
                            <div>
                                <h4><a href="{{ route('detailpengumuman',['id' => $p->id]) }}">{{ $p->judul }}</a></h4>
                                <time datetime="2020-01-01">{{ $p->tanggal }}</time>
                            </div>
                        </div><!-- End recent post item-->
                    @endforeach


{{--                  <div class="post-item">--}}
{{--                  <img src="{{asset('assets/img/berita/blog-1.jpg')}}" alt="">--}}
{{--                    <div>--}}
{{--                      <h4><a href="{{route('detailpengumuman')}}">Nihil blanditiis at in nihil autem</a></h4>--}}
{{--                      <time datetime="2020-01-01">Jan 1, 2020</time>--}}
{{--                    </div>--}}
{{--                  </div><!-- End recent post item-->--}}

{{--                  <div class="post-item">--}}
{{--                  <img src="{{asset('assets/img/berita/blog-1.jpg')}}" alt="">--}}
{{--                    <div>--}}
{{--                      <h4><a href="{{route('detailpengumuman')}}">Nihil blanditiis at in nihil autem</a></h4>--}}
{{--                      <time datetime="2020-01-01">Jan 1, 2020</time>--}}
{{--                    </div>--}}
{{--                  </div><!-- End recent post item-->--}}

{{--                  <div class="post-item">--}}
{{--                  <img src="{{asset('assets/img/berita/blog-1.jpg')}}" alt="">--}}
{{--                    <div>--}}
{{--                      <h4><a href="{{route('detailpengumuman')}}">Nihil blanditiis at in nihil autem</a></h4>--}}
{{--                      <time datetime="2020-01-01">Jan 1, 2020</time>--}}
{{--                    </div>--}}
{{--                  </div><!-- End recent post item-->--}}

{{--                  <div class="post-item">--}}
{{--                  <img src="{{asset('assets/img/berita/blog-1.jpg')}}" alt="">--}}
{{--                    <div>--}}
{{--                      <h4><a href="{{route('detailpengumuman')}}">Nihil blanditiis at in nihil autem</a></h4>--}}
{{--                      <time datetime="2020-01-01">Jan 1, 2020</time>--}}
{{--                    </div>--}}
{{--                  </div><!-- End recent post item-->--}}

                </div>

              </div><!-- End sidebar recent posts-->

              <div class="col-sm-12 mt-3">
                <div class="d-flex justify-content-center">
                        <button style="background: #451952; color:#fff;" class="btn">
                          <a style="color: white;" href="{{route('allpengumuman')}}">Selengkapnya</a>
                        </button>
                      </div>
                </div>

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

         <!-- ======= Our Team Section ======= -->
    <section id="team" class="team sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pimpinan</h2>
          <div class="col-sm-12 d-flex justify-content-center">
        <div class="col-xl-4 col-md-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{asset('assets/img/pimpinan/dekan.jpg')}}" class="img-fluid" alt="">
              <h4>Dr.Ir. Adrizal, M.Si</h4>
              <span>Dekan</span>
            </div>
          </div><!-- End Team Member -->
        </div>
        </div>

        <div class="row gy-3">

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{asset('assets/img/pimpinan/wd1.jpg')}}" class="img-fluid" alt="">
              <h4>Dr. Rusfidra, S.Pt, MP</h4>
              <span>Wakil Dekan I</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{asset('assets/img/pimpinan/wd2.jpg')}}" class="img-fluid" alt="">
              <h4>Dr.Ir. Firda Arlina, M.Si</h4>
              <span>Wakil Dekan II</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{asset('assets/img/pimpinan/wd3.jpg')}}" class="img-fluid" alt="">
              <h4>Dr.Ir. Rusmana Wijaya Setia Ningrat, M.Rur.Sc</h4>
              <span>Wakil Dekan III</span>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->


      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
      <div class="container">

        <div class="section-header">
          <h2 style="color: #fff;" >Faterna Dalam Angka</h2>
        </div>

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="{{ $overview->mahasiswa ?? 1500 }}" data-purecounter-duration="2" class="purecounter"></span>
              <p>Mahasiswa</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="{{ $overview->prodi ?? 3 }}" data-purecounter-duration="2" class="purecounter"></span>
              <p>Prodi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="{{ $overview->dosen ?? 100 }}" data-purecounter-duration="2" class="purecounter"></span>
              <p>Dosen</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="{{ $overview->labor ?? 10 }}" data-purecounter-duration="2" class="purecounter"></span>
              <p>Laboratorium</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <h3>Profile FATERNA UNAND</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section><!-- End Call To Action Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Rilis Berita & Informasi Event</h2>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{asset('assets/img/berita/berita1.jpg')}}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Berita</p>

              <h2 class="title">
                <a href="{{route('detailberita')}}">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Admin Faterna</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{asset('assets/img/berita/berita1.jpg')}}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Berita</p>

              <h2 class="title">
                <a href="{{route('detailberita')}}">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Admin Faterna</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{asset('assets/img/berita/berita1.jpg')}}" alt="" class="img-fluid">
              </div>

              <p class="post-category">Berita</p>

              <h2 class="title">
                <a href="{{route('detailberita')}}">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">

                <div class="post-meta">
                  <p class="post-author">Admin Faterna</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

   <div class="col-sm-12 mt-3">
   <div class="d-flex justify-content-center">
          <button style="background: #451952; color:#fff;" class="btn">
            <a style="color: white;" href="{{route('allberita')}}">Selengkapnya</a>
          </button>
        </div>
   </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kiprah Civitas Akademika</h2>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{asset('assets/img/team/team-1.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><a href="{{route('detailkiprah')}}">Judul Post</a></h3>
                    </div>
                  </div>
                  <p>
                      Meraih medali perunggu dari lomba lari melawan kuda
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{asset('assets/img/team/team-1.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><a href="{{route('detailkiprah')}}">Judul Post</a></h3>
                    </div>
                  </div>
                  <p>
                      Meraih medali perunggu dari lomba lari melawan kuda
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{asset('assets/img/team/team-1.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><a href="{{route('detailkiprah')}}">Judul Post</a></h3>
                    </div>
                  </div>
                  <p>
                      Meraih medali perunggu dari lomba lari melawan kuda
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{asset('assets/img/team/team-1.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><a href="{{route('detailkiprah')}}">Judul Post</a></h3>
                    </div>
                  </div>
                  <p>
                      Meraih medali perunggu dari lomba lari melawan kuda
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="col-sm-12 mt-3">
          <div class="d-flex justify-content-center">
                  <button style="background: #451952; color:#fff;" class="btn">
                    <a style="color: white;" href="{{route('allkiprah')}}">Selengkapnya</a>
                  </button>
                </div>
          </div>


      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Gallery</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <!-- <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul>
          </div> -->

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('assets/img/gallery/gallery1.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('assets/img/gallery/gallery1.jpg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4>Judul</h4>
                  <p>Deskripsi</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('assets/img/gallery/gallery1.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('assets/img/gallery/gallery1.jpg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4>Judul</h4>
                  <p>Deskripsi</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('assets/img/gallery/gallery1.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('assets/img/gallery/gallery1.jpg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4>Judul</h4>
                  <p>Deskripsi</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('assets/img/gallery/gallery1.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('assets/img/gallery/gallery1.jpg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4>Judul</h4>
                  <p>Deskripsi</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('assets/img/gallery/gallery1.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('assets/img/gallery/gallery1.jpg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4>Judul</h4>
                  <p>Deskripsi</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('assets/img/gallery/gallery1.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('assets/img/gallery/gallery1.jpg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4>Judul</h4>
                  <p>Deskripsi</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

        <div class="col-sm-12 mt-3">
          <div class="d-flex justify-content-center">
                  <button style="background: #451952; color:#fff;" class="btn">
                    <a style="color: white;" href="">Selengkapnya</a>
                  </button>
                </div>
          </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

      <div class="section-header">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
          <div class=" d-flex justify-content-center">
            <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="100" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
          </div>
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Dosen & Tendik</strong></p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Alumni</strong></p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="68" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Tahun Berdiri</strong></p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

  </main><!-- End #main -->

 @endsection
