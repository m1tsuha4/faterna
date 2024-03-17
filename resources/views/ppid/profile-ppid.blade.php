@extends('layout.menulayout')

@section('contentmenu')
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>PPID</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>PPID</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs --> 

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div style="margin-top: -50px;" class="row content">
          <div class="col-lg-6 d-flex justify-content-start">
            <img width="500" src="{{asset('assets/img/hero-img.png')}}" alt="image">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <div class="section-title ppid d-flex justify-content-start">
              <h1>Pejabat Pengelola Informasi dan Dokumentasi (PPID)</h1>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <section id="about" class="about sections-bg ">
      <div class="container" data-aos="fade-up">

        <div style="margin-top: -50px;" class="row content">
          <div class="col-lg-4 d-flex justify-content-start">
            <div class="card">
              <div class="card-body">
              <img width="300" src="{{asset('assets/img/pimpinan/dekan.jpg')}}" alt="image">
              </div>
            </div>
          </div>
          <div class="col-lg-6  pt-lg-0">
            <div class="section-title ppid d-flex justify-content-start">
              <h1>Sambutan Ketua PPID Faterna</h1>
            </div>
            <p>
              Puji dan Syukur kita haturkan Pada Allah SWT atas segala rahmat dan karuniaNya kepada diberikan kepada kita. Sholawat dan salam tercurah kepada Nabi Muhammad SAW atas perjuangan beliau sehingga kita bisa menikmati ilmu pengetahuan hingga saat ini.
            </p>
              <br>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, magnam perferendis odit sequi quam cupiditate! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, dolorum tempore vero iure sint ipsum ea adipisci quas necessitatibus natus!
              </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <section  class="profile-ppid about" id="profile-ppid about">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
          <h2>Profile</h2>
        </div>

        <div style="margin-top: -80px;" class="section-title ppid d-flex justify-content-start">
          <h1> PPID Faterna</h1>
        </div>

        <div class="row content">
          <div class="col-lg-12 d-flex justify-content-start">
            <p>
              <strong><i>Selamat Datang di Layanan Informasi Publik Universitas Andalas (UNAND).</i></strong>
            </p>
            </div>
          <div style="margin-bottom:20px;" class="col-lg-12 d-flex justify-content-start">
            <p>
              Sesuai amanat UU No. 14 Tahun 2008 Tentang Keterbukaan Informasi Publik (KIP), UNAND sebagai badan publik memenuhi kebutuhan informasi dengan membuat Layanan Informasi Publik. Pembentukan Pejabat Pengelola Informasi dan Dokumentasi (PPID) Universitas Andalas Pertama Kalinya Tahun 2015 Melalui Surat Keputusan Rektor Universitas Andalas Nomor : 456/XIII/A/UNAND-2015. Layanan Informasi Publik UNAND juga disediakan untuk memudahkan publik mendapatkan informasi tentang UNAND. Publik berhak mengajukan informasi publik yang dikelola oleh UNAND sesuai ketentuan-ketentuan yang berlaku. UNAND melayani seluruh permohonan informasi melalui Layanan Informasi Publik secara online, dan juga secara offline (datang langsung, surat elektronik, telepon, dll).
            </p>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
           <div class="card">
            <div class="card-body">
            <img src="{{asset('assets/img/maklumat-ppid.jpg')}}" alt="">
            </div>
           </div>
          </div>
          </div>
    </section>

    <section  class="profile-ppid about sections-bg" id="profile-ppid about ">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sturkur Organisasi</h2>
        </div>

        <div style="margin-top: -80px;" class="section-title ppid d-flex justify-content-center">
          <h1> PPID Faterna UNAND</h1>
        </div>

        <div class="row content">
          <div class="col-lg-12 d-flex justify-content-center">
            <p>
              <strong><i>Ini isinya nanti gambar struktur ppid</i></strong>
            </p>
            </div>
        </div>
    </section>


    <section  class="profile-ppid faq" id="profile-ppid alur">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-header">
          <h2>PPID Faterna UNAND</h2>
        </div>

        <div style="margin-top: -60px;" class="section-title ppid d-flex justify-content-center">
          <h1 style="font-weight: 700; color:#87566e"> Layanan Informasi</h1>
        </div>

        <div class="row content">
          <div class="col-lg-12 justify-content-center">
          <div class="faq-list mb-10">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
             <h5>Formulir Permohonan Informasi Publik</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <h5>Tata Cara Permohonan Informasi</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <h5>Kompetensi Pelaksanaan/Petugas Layanan</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="400">
              <h5>Hasil Survei Indeks Kepuasan</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="500">
              <h5>Laporan Layanan Informasi</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="600">
              <h5>Tata Cara Pengajuan Keberatan</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="700">
              <h5>Tata Cara Penyelesaian Sengketa Informasi</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="700">
              <h5>FAQs</h5>
            </li>
          </ul>
        </div>
            </div>
        </div>
    </section>


    <section  class="profile-ppid about layanan-informasi" id="profile-ppid about">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
          <h2 style="color:white">PPID Faterna UNAND</h2>
        </div>

        <div style="margin-top: -60px;" class="section-title ppid d-flex justify-content-center">
          <h1 style="color:white"> SOP Layanan Informasi Publik</h1>
        </div>

        <div class="row content">
          <div class="col-lg-12 d-flex justify-content-center">
            <div class="container-fluid">
            <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Dokumen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>asdasd</td>
                                <td  width="25%">
                                    <a href="#" class="btn btn-success btn-sm mt">Download</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>
        
          </div>
          
        </div>
    </section>

   <!-- ======= Frequently Asked Questions Section ======= -->
   <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

      <div class="section-header">
          <h2>PPID Faterna UNAND</h2>
        </div>

        <div style="margin-top: -60px;" class="section-title ppid d-flex justify-content-center">
          <h1 style="font-weight: 700; color:#87566e"> Layanan Informasi</h1>
        </div>

        <div style="margin-top: 20px;" class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <img width="500" src="{{asset('assets/img/why-us.png')}}" alt="">
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Informasi Yang Wajib Disediakan (Berkala)
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  <a href="{{route('info-dikecualikan')}}">Selengkapnya</a>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Informasi yang Wajib Tersedia Setiap Saat
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <a href="{{route('info-publik')}}">Selengkapnya</a>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Informasi Serta Merta
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Informasi Dikecualikan
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                   <a href="{{route('info-dikecualikan')}}">Selengkapnya</a>
                  </div>
                </div>
              </div><!-- # Faq item-->
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


    <section  class="profile-ppid faq" id="profile-ppid alur">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-header">
          <h2>PPID Faterna UNAND</h2>
        </div>

        <div style="margin-top: -60px;" class="section-title ppid d-flex justify-content-center">
          <h1 style="font-weight: 700; color:#87566e"> Peraturan</h1>
        </div>

        <div class="row content">
          <div class="col-lg-12 justify-content-center">
          <div class="faq-list mb-10">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
             <h5>Regulasi</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <h5>Peraturan Majelis Wali Amanat (MWA)</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <h5>Peraturan Rektor</h5>
            </li>
            <li data-aos="fade-up" data-aos-delay="400">
              <h5>Surat Edaran</h5>
            </li>
          </ul>
        </div>
            </div>
        </div>
    </section>
@endsection

