@extends('layout.navbar')

@section('title', 'Dashboard')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Fakultas Teknologi Informasi Universitas Andalas</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://youtu.be/rCOSHlNh2EI" class="btn-get-started glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Profile Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/img/oracle.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/img/redhat.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/img/cisco (1).png')}}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <center><h1>Visi</h1></center>
            <p>
              Menjadi Fakultas Teknologi Informasi yang Bermutu dan Berprestasi Nasional Tahun 2028
            </p>
            <center><h1>Misi</h1></center>
            <ul>
              <li><i class="ri-check-double-line"></i> Menyelenggarakan pendidikan yang bereputasi global dan bermartabat untuk menghasilkan lulusan bidang teknologi informasi yang berakhlak mulia dan kompetitif</li>
              <li><i class="ri-check-double-line"></i> Menyelenggarakan penelitian yang bermanfaat bagi pelayanan publik dan indutri serta berkontribusi nyata untuk pengembangan ilmu pengetahuan dan teknologi di bidang teknologi informasi</li>
              <li><i class="ri-check-double-line"></i> Menyelenggarakan pengabdian kepada masyarakat dalam bidang teknologi informasi untuk berkontribusi nyata dalam peningkatan kesejateraan ekonomi dan sosial masyarakat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <center><h1>Tujuan</h1></center>
            <ul>
              <li><i class="ri-check-double-line"></i> Menghasilkan lulusan yang berwawasan luas, kemampuan professional, berakhlak mulia dan berjiwa technopreneur dibidang teknologi informasi</li>
              <li><i class="ri-check-double-line"></i> Mendaptekan peringkat akreditasi unggul untuk semua program studi</li>
              <li><i class="ri-check-double-line"></i> Melaksanakan penelitian untuk menghasilkan publikasi ilmiah dan paten yang bermutu dan inovatif yang bermanfaat untuk pengembangan ilmu pengetahuan, teknologi dan pembangunakan masyrakat madani</li>
              <li><i class="ri-check-double-line"></i> Menerapkan teknologi informasi kepada masyarakat luas untuk meningkatkan kesejahteraan sosial dan ekonomi</li>
              <li><i class="ri-check-double-line"></i> Membangun kerjasama yang berkelanjutan dengan masyarakat, swasta, pemerintah dan lembaga-lembaga nasional dan internasional</li>
            </ul>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Struktur Organisasi <strong>Fakultas Teknologi Informasi</strong></h3>
            </div>

            <div class="accordion-list">
              <table>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>NIP</th>
                </tr>
                <tr>
                    <td>Dr. Ahmad Syafruddin Indrapriyatna, M.T</td>
                    <td>Dekan</td>
                    <td>196307071991031003</td>
                </tr>
                <tr>
                    <td>Dr. Eng Rahmadi Kurnia, S.T., M.T.</td>
                    <td>Wakil Dekan I</td>
                    <td>196908201997031002</td>
                </tr>
                <tr>
                    <td>Hasdi Putra, M.T.	</td>
                    <td>Wakil Dekan II	</td>
                    <td>198327072008121003</td>
                </tr>
                <tr>
                    <td>Ratna Aisuwarya, M.Eng</td>
                    <td>Wakil Dekan III</td>
                    <td>198410302008122002</td>
                </tr>
            </table>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/struktur.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="department" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Department</h2>
        </div>

        <div class="row">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img width="150" height="100" src="{{asset('assets/img/SI.png')}}" alt=""></div>
              <h4><a href="">Sistem Informasi</a></h4>
              <p>Departemen Sistem Informasi Fakultas Teknologi Informasi Universitas Andalas</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div  class="icon-box">
              <div class="icon"><img width="100" src="{{asset('assets/img/TK.png')}}" alt=""></div>
              <h4><a href="">Teknik Komputer</a></h4>
              <p>Departemen Teknik Komputer Fakultas Teknologi Informasi Universitas Andalas</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img width="100" src="{{asset('assets/img/if.jpg')}}" alt=""></div>
              <h4><a href="">Informatika</a></h4>
              <p>Departemen Informatika Fakultas Teknologi Informasi Universitas Andalas</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

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
              <a href="#" class="buy-btn">Selengkapnya</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <img style="margin-bottom: 20px;" width="340" src="{{asset('assets/img/b4.png')}}" alt="">
              <h3>Penyerahan Ijazah pada Wisuda II FTI UNAND</h3>
              <a href="#" class="buy-btn">Selengkapnya</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <img style="margin-bottom: 20px;" width="340" src="{{asset('assets/img/b3.png')}}" alt="">
              <h3>Pembukaan Portal Pemabayaran UKT dan Registrasi Ulang Semester Genap</h3>
              <a href="#" class="buy-btn">Selengkapnya</a>
            </div>
          </div>

        </div>

      </div>
      <br>
     <center><div><a href="#" class="buy-btn">Read More</a></div></center>
    </section><!-- End Pricing Section -->


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
                <p>sekretariat@it.unand.ac.id</p>
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