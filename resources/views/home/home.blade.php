@extends('layout.navbar')

@section('title', 'Fakultas Peternakan Universitas Andalas')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Fakultas Peternakan Universitas Andalas</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#" class="btn-get-started glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Profile Video</span></a>
          </div>
        </div>
        <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div> -->
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
           <img src="{{asset('assets/img/program-sarjana.png')}}" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/img/program-pascasarjana.png')}}" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/img/program-doktor.png')}}" alt="">
          </div>
        </div>

      </div>
    </section>  -->


    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/img/pimpinan/dekan.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dr.Ir. Adrizal, M.Si</h4>
                <span>Dekan</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/img/pimpinan/wd1.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dr. Rusfidra, S.Pt, MP</h4>
                <span>Wakil Dekan I</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/img/pimpinan/wd2.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dr.Ir. Firda Arlina, M.Si</h4>
                <span>Wwakil Dekan II</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('assets/img/pimpinan/wd3.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Dr.Ir. Rusmana Wijaya Setia Ningrat, M.Rur.Sc</h4>
                <span>Wakil Dekan III</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

     
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6">
            <center><h1>Visi</h1></center>
            <p>
            Menjadi fakultas yang menghasilkan lulusan berdaya saing nasional menuju internasional dan berperan aktif dalam pembangunan bangsa
            </p>
            <center><h1>Misi</h1></center>
            <ul>
              <li><i class="ri-check-double-line"></i> Menyelenggarakan pendidikan untuk mengembangkan IPTEKS, membangun sikap dan meningkatkan keterampilan dalam bidang Peternakan, sehingga menghasilkan lulusan yang mandiri, mempunyai kompetensi di bidangnya dan berdedikasi tinggi.</li>
              <li><i class="ri-check-double-line"></i> Menyelenggarakan penelitian dasar maupun terapan dalam bidang peternakan serta mempublikasikannya dalam jurnal nasional dan internasional untuk menunjang pengembangan IPTEKS dan pembangunan.</li>
              <li><i class="ri-check-double-line"></i> Menyelenggarakan pengabdian kepada masyarakat untuk menyebarluaskan IPTEKS dalam bidang peternakan yang telah dikuasai maupun dihasilkan melalui penelitian.</li>
              <li><i class="ri-check-double-line"></i> Membangun jaringan kerjasama yang produktif dan berkelanjutan dengan lembaga pendidikan, pemerintah dan swasta baik dalam, maupun luar negeri dalam menunjang penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
              <li><i class="ri-check-double-line"></i> Membangun organisasi Fakultas Peternakan untuk menciptakan suasana yang kondusif untuk penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <center><h1>Tujuan</h1></center>
            <ul>
              <li><i class="ri-check-double-line"></i> Meningkatkan peran Fakultas Peternakan dalam hal peningkatan pemerataan dan akses pendidikan tinggi, sehingga lulusan dapat berkiprah di kancah nasional dan internasional baik di sektor swasta maupun pemerintahan</li>
              <li><i class="ri-check-double-line"></i> Meningkatkan peran serta sivitas akademika dalam menggali dan mengembangkan IPTEKS di bidang peternakan</li>
              <li><i class="ri-check-double-line"></i> Meningkatkan peran serta sivitas akademika dalam menyebarluaskan IPTEKS di bidang peternakan kepada masyarakat.</li>
              <li><i class="ri-check-double-line"></i> Memperluas dan meningkatkan jaringan kerjasama dengan berbagai institusi baik di dalam, maupun di luar negeri dalam rangka pengembangan IPTEKS di bidang peternakan.</li>
              <li><i class="ri-check-double-line"></i> Menerapkan organisasi yang efisien dalam menunjang suasana yang kondusif untuk pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
            </ul>
            <!-- Button trigger modal -->
        <a type="button" class="more-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Selengkapnya
        </a>

        <!-- Modal -->
        <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Visi Misi dan Tujuan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <strong>Visi</strong><br>Menjadi fakultas yang menghasilkan lulusan berdaya saing nasional menuju internasional dan berperan aktif dalam pembangunan bangsa <br> <br>
                <strong>Misi</strong><br>
                <ol>
                  <li>Menyelenggarakan pendidikan untuk mengembangkan IPTEKS, membangun sikap dan meningkatkan keterampilan dalam bidang Peternakan, sehingga menghasilkan lulusan yang mandiri, mempunyai kompetensi di bidangnya dan berdedikasi tinggi. </li>
                  <li>Menyelenggarakan penelitian dasar maupun terapan dalam bidang peternakan serta mempublikasikannya dalam jurnal nasional dan internasional untuk menunjang pengembangan IPTEKS dan pembangunan.</li>
                  <li>Menyelenggarakan pengabdian kepada masyarakat untuk menyebarluaskan IPTEKS dalam bidang peternakan yang telah dikuasai maupun dihasilkan melalui penelitian. </li>
                  <li>Membangun jaringan kerjasama yang produktif dan berkelanjutan dengan lembaga pendidikan, pemerintah dan swasta baik dalam, maupun luar negeri dalam menunjang penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat. </li>
                  <li>Membangun organisasi Fakultas Peternakan untuk menciptakan suasana yang kondusif untuk penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
                </ol>
                <br>
                <strong>Tujuan</strong><br>
                <ol>
                  <li>Meningkatkan peran Fakultas Peternakan dalam hal peningkatan pemerataan dan akses pendidikan tinggi, sehingga lulusan dapat berkiprah di kancah nasional dan internasional baik di sektor swasta maupun pemerintahan </li>
                  <li>Meningkatkan peran serta sivitas akademika dalam menggali dan mengembangkan IPTEKS di bidang peternakan </li>
                  <li>Meningkatkan peran serta sivitas akademika dalam menyebarluaskan IPTEKS di bidang peternakan kepada masyarakat.</li>
                  <li>Memperluas dan meningkatkan jaringan kerjasama dengan berbagai institusi baik di dalam, maupun di luar negeri dalam rangka pengembangan IPTEKS di bidang peternakan.</li>
                  <li>Menerapkan organisasi yang efisien dalam menunjang suasana yang kondusif untuk pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
                </ol>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>
    </section><!-- End About Us Section -->


      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
      <div class="container">

      <div class="section-title">
          <h2 style="color: #fff;" >Faterna Dalam Angka</h2>
        </div>

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="2" class="purecounter"></span>
              <p>Mahasiswa</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="2" class="purecounter"></span>
              <p>Prodi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2" class="purecounter"></span>
              <p>Tendik</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2" class="purecounter"></span>
              <p>Laboratorium</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="portfolio" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>News & Event Update</h2>
          </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <img style="margin-bottom: 20px;" width="340" src="{{asset('assets/img/b1.png')}}" alt="">
              <h3>Pengumuman Hibah Draft Buku Ajar dan PDK</h3>
              <a href="{{ route('berita') }}" class="buy-btn">Selengkapnya</a></li>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <img style="margin-bottom: 20px;" width="340" src="{{asset('assets/img/b4.png')}}" alt="">
              <h3>Penyerahan Ijazah pada Wisuda II Fakultas Peternakan UNAND</h3>
              <a href="{{ route('berita') }}" class="buy-btn">Selengkapnya</a></li>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <img style="margin-bottom: 20px;" width="340" src="{{asset('assets/img/b3.png')}}" alt="">
              <h3>Pembukaan Portal Pemabayaran UKT dan Registrasi Ulang Semester Genap</h3>
              {{-- <a href="#" class="buy-btn">Selengkapnya</a> --}}
              <a href="{{ route('berita') }}" class="buy-btn">Selengkapnya</a></li>
            </div>
          </div>

        </div>

      </div>
      <br>
     <center>
     
      <!-- <div class="container">
      <div class="collapse" id="collapseExample">
       <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <img style="margin-bottom: 20px;" width="340" src="{{asset('assets/img/b1.png')}}" alt="">
            <h3>Pengumuman Hibah Draft Buku Ajar dan PDK</h3>
            <a href="#" class="buy-btn">Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <img style="margin-bottom: 20px;" width="340" src="{{asset('assets/img/b1.png')}}" alt="">
            <h3>Pengumuman Hibah Draft Buku Ajar dan PDK</h3>
            <a href="#" class="buy-btn">Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <img style="margin-bottom: 20px;" width="340" src="{{asset('assets/img/b1.png')}}" alt="">
            <h3>Pengumuman Hibah Draft Buku Ajar dan PDK</h3>
            <a href="#" class="buy-btn">Selengkapnya</a>
          </div>
        </div>
       </div> -->
        
      </div>
      </div>
      <div>
          <a class="cta-btn align-middle" href="#">Read More</a>
       </div>
    </center>
    </section><!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>

        <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>PPID</h3>
            <p> Pusat Informasi Pejabat Pengelola Informasi Dan Dokumentasi</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Read More</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Useful Links</h2>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div style="background-image: url(/assets/img/portal.jpg); height:250px; " class="member d-flex align-items-start">
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div style="background-image: url(/assets/img/sipena.png); background-size: cover;" class="member d-flex align-items-start">
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div style="background-image: url(/assets/img/mbkm.png); height:250px; background-size: cover;" class="member d-flex align-items-start">
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div style="background-image: url(/assets/img/webunand.png); background-size: cover;" class="member d-flex align-items-start">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Kampus Unand Limau Manis, Padang</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>faterna@unand.ac.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 853-5610-5388</p>
              </div>

              <iframe src="https://maps.app.goo.gl/T9F8VtV9YpJ8sz7f7" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection