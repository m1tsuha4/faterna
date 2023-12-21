<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo-unand.png')}}" rel="icon">">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <script src= "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"> </script> 
  <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"> </script> 

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  
  <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/"><img src="{{asset('assets/img/logo.png')}}" alt=""></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('selayang-pandang') }}">Selayang Pandang</a></li>
              <li><a href="{{ route('visi-misi') }}">Visi Misi</a></li>
              <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
              <li><a href="{{ route('pimpinan') }}">Pimpinan</a></li>
              <li><a href="{{ route('dosen') }}">Dosen</a></li>
              <li><a href="{{ route('tendik') }}">Tendik</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Program Studi</span> <i class="bi bi-chevron-down"></i></a>
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
          <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('akreditasi') }}">Akreditasi</a></li>
                  <li><a href="{{ route('pAkademik') }}">Panduan Akademik</a></li>
                  <li><a href="{{ route('infobeasiswa') }}">Beasiswa</a></li>
                  <li><a href="{{ route('kalenderakademik') }}">Kalender Akademik</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Kemahasiswaan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ route('infoalumni') }}">Alumni</a></li>
                  <li><a href="{{ route('ormawa') }}">Organisasi Mahasiswa</a></li>
                  <li><a href="{{ route('fasilitas') }}">Fasilitas</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>PPID</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('profile-ppid') }}">Profile</a></li>
              <li class="dropdown"><a href="#"><span>Layanan Informasi</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="{{ route('info-publik') }}">Informasi Yang Wajib Tersedia Setiap Saat</a></li>
                  <li><a href="#linkgform">Form Permohonan Informasi</a></li>
                  <li><a href="{{ route('info-dikecualikan') }}">Informasi Yang Wajib Disediakan Secara Berkala</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Riset</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('mou-bimtek-agam') }}">MoU Bimtek Agam</a></li>
              <li><a href="{{ route('luar-negri') }}">Kerja Sama Luar Negri</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Download</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">SK Akreditasi Prodi</a></li>
              <li><a href="{{ route('sopTA') }}">Panduan dan SOP TA</a></li>
              <li><a href="#">SK Review Karya Ilmiah</a></li>
              <li><a href="#">Surat Bebas Labor</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Main Content Section ======= -->
        @yield('content')
  <!-- =========END Content Section========= -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Fakultas Perternakan</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>

</body>

</html>