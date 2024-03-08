<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo-unand.png')}}" rel="icon">
  <link href="{{asset('assets/img/logo-unand.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/impact.css')}}" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img width="180" src="{{asset('assets/img/logo.png')}}" alt="">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home') }}">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <!-- selayang pandang routenya dipake untuk VISI MISI, malas mau ganti hehe -->
              <li><a href="{{ route('selayang-pandang') }}">Visi Misi</a></li> 
              <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
              <li><a href="{{ route('struktur') }}">Struktur Organisasi</a></li>
              <li><a href="{{ route('profilgb') }}">Profil Guru Besar</a></li>
              <li><a href="{{ route('profildepartemen') }}">Profil Departemen</a></li>
              <li><a href="{{ route('fasilitas') }}">Sarana & Prasarana</a></li>
              <li><a href="{{ route('akreditasi') }}">Akreditasi</a></li>
              <li><a href="{{ route('infoalumni') }}">Alumni</a></li>
              <li><a href="{{ route('dosen') }}">Dosen</a></li>
              <li><a href="{{ route('tendik') }}">Tendik</a></li>
              <li><a href="{{ route('zona') }}">Zona Integritas</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <li><a href="{{ route('pAkademik') }}">Panduan Akademik</a></li>
                  <li><a href="{{ route('infobeasiswa') }}">Beasiswa</a></li>
                  <li><a href="{{ route('kalenderakademik') }}">Kalender Akademik</a></li>
                </ul>
              </li>
              <li><a href="{{ route('kemahasiswaan') }}"><span>Kemahasiswaan</span></a>
              </li>
              <li class="dropdown"><a href="#"><span>Program Studi</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
            <li class="dropdown"><a href="#"><span>S1 Padang</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('sejarah-prodi-pdg') }}">Sejarah</a></li>
                  <li><a href="{{ route('visi-misi-prodi-pdg') }}">Visi Misi</a></li>
                  <li><a href="{{ route('tujuan-prodi-pdg') }}">Tujuan</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>S1 Payakumbuh</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="{{ route('sejarah-prodi-pyk') }}">Sejarah</a></li>
                  <li><a href="{{ route('visi-misi-prodi-pyk') }}">Visi Misi</a></li>
                  <li><a href="{{ route('tujuan-prodi-pyk') }}">Tujuan</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>S2</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="{{ route('sejarah-prodi-s2') }}">Sejarah</a></li>
                  <li><a href="{{ route('visi-misi-prodi-s2') }}">Visi Misi</a></li>
                  <li><a href="{{ route('tujuan-prodi-s2') }}">Tujuan</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>S3</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('sejarah-prodi-s3') }}">Sejarah</a></li>
                  <li><a href="{{ route('visi-misi-prodi-s3') }}">Visi Misi</a></li>
                  <li><a href="{{ route('tujuan-prodi-s3') }}">Tujuan</a></li>
                </ul>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{ route('profile-ppid') }}"><span>PPID</span> </a>
            <!-- <ul>
              <li><a href="{{ route('profile-ppid') }}">Profile</a></li>
              <li class="dropdown"><a href="#"><span>Layanan Informasi</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="{{ route('info-publik') }}">Informasi Yang Wajib Tersedia Setiap Saat</a></li>
                  <li><a href="#linkgform">Form Permohonan Informasi</a></li>
                  <li><a href="{{ route('info-dikecualikan') }}">Informasi Yang Wajib Disediakan Secara Berkala</a></li>
                </ul>
              </li>
            </ul> -->
          </li>
          <li class="dropdown"><a href="#"><span>Penelitian dan Pengabdian</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('penelitian') }}">Penelitian</a></li>
              <li><a href="{{ route('pengabdian') }}">Pengabdian</a></li>
            </ul>
          </li>
          <li><a class="" href="{{ route('kerjasama') }}">Kerjasama</a></li>
          <li><a class="" href="{{ route('conference') }}">Conference</a></li>
          <li class=""><a href="{{ route('dukacita') }}">Duka Cita</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Main Content Section ======= -->
        @yield('contentmain')
  <!-- =========END Content Section========= -->

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-info">
      <a href="index.html" class="logo d-flex align-items-center">
        <span>Impact</span>
      </a>
      <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
      <div class="social-links d-flex mt-4">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-tiktok"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Graphic Design</a></li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Contact Us</h4>
      <p>
        A108 Adam Street <br>
        New York, NY 535022<br>
        United States <br><br>
        <strong>Phone:</strong> +1 5589 55488 55<br>
        <strong>Email:</strong> info@example.com<br>
      </p>

    </div>

  </div>
</div>

<div class="container mt-4">
  <div class="copyright">
    &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/impact.js')}}"></script>

</body>

</html>