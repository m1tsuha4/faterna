@extends('layout.menulayout')

@section('contentmenu')
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Pejabat Pengelola Informasi dan Dokumentasi (PPID)</h2>
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
          <div class="col-lg-12 d-flex justify-content-start">
            <p>
              Sesuai amanat UU No. 14 Tahun 2008 Tentang Keterbukaan Informasi Publik (KIP), UNAND sebagai badan publik memenuhi kebutuhan informasi dengan membuat Layanan Informasi Publik. Pembentukan Pejabat Pengelola Informasi dan Dokumentasi (PPID) Universitas Andalas Pertama Kalinya Tahun 2015 Melalui Surat Keputusan Rektor Universitas Andalas Nomor : 456/XIII/A/UNAND-2015. Layanan Informasi Publik UNAND juga disediakan untuk memudahkan publik mendapatkan informasi tentang UNAND. Publik berhak mengajukan informasi publik yang dikelola oleh UNAND sesuai ketentuan-ketentuan yang berlaku. UNAND melayani seluruh permohonan informasi melalui Layanan Informasi Publik secara online, dan juga secara offline (datang langsung, surat elektronik, telepon, dll).
            </p>
          </div>
          </div>

        
    </section>

    <section id="portfolio" class="portfolio d-flex justify-content-center">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter=".filter-visi-misi">Visi & Misi</li>
              <li data-filter=".filter-tugas-fungsi">Tugas Dan Fungsi</li>
              <li data-filter=".filter-maklumat">Maklumat</li>
              <li data-filter=".filter-komitmen">Komitmen PPID</li>
              <li data-filter=".filter-sop-layanan">Standar Layanan</li>
            </ul>
          </div>

          <div class="portfolio-container d-flex justify-content-center">
            <div class="portfolio-item filter-visi-misi">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Visi</h5>
                        <p class="card-text">PPID Universitas Andalas Garda Terdepan dalam Pelayanan Prima Keterbukaan Informasi Publik Untuk Mewujudkan Universitas Terkemuka dan Bermartabat.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Misi</h5>
                        <ol class="card-text">
                          <li>Berorientasi Informasi dan Visualisasi Berbasis Digitalisasi</li>
                          <li>Pelayanan yang Profesional, Transparan, dan Akuntabel</li>
                          <li>Pelayanan Prima terhadap Publik Internal dan Eksternal</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-item filter-tugas-fungsi">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-title">Tugas Pejabat Pengelola Informasi dan Dokumentasi Pelaksana di Lingkungan Universitas Andalas Tahun 2020 – 2023</h6>
                        <ol class="card-text">
                          <li>Menyediakan, menyimpan, mendokumentasikan dan mengamankan informasi publik;</li>
                          <li>Memberikan pelayanan informasi sesuai dengan aturan yang berlaku;</li>
                          <li>Memberikan pelayanan informasi publik yang cepat, tepat, dan sederhana;</li>
                          <li>Memberikan prosedur operasional penyebarluasan informasi publik;</li>
                          <li>Mengklarifikasi informasi dan/atau pengubahannya;</li>
                          <li>Menetapkan informasi yang dikecualikan yang telah habis jangka waktu pengecualiannya sebagai informasi publik yang dapat diakses; dan</li>
                          <li>Menetapkan pertimbangan tertulis atas setiap kebijakan yang diambil untuk memenuhi hak setiap orang atas informasi publik.</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-item filter-maklumat">
             <div class="row">
               <!-- Konten untuk filter lain -->
               <div class="col-lg-12 d-flex justify-content-center">
                <div class="card">
                 <div class="card-body">
                 <center>
                  <img src="{{asset('assets/img/maklumat-ppid.jpg')}}" alt="">
                 </center>
                 </div>
                </div>
               </div>
             </div>
            </div>
            <div class="portfolio-item filter-komitmen">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <ol style="color: black" class="card-text">
                          <li>Menetapkan strategi dan metode pembinaan, pengawasan, evaluasi, dan monitoring atas pelaksanaan kebijakan Informasi Publik yang dilakukan oleh PPID Pelaksana Pejabat Fungsional dan/atau Petugas Pelayanan Informasi.</li>
                          <li>Melakukan pembinaan, pengawasan, evaluasi, dan monitoring atas pelaksanaan kebijakan Informasi Publik yang dilakukan oleh PPID dan PPID Pelaksana</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-item filter-sop-layanan">
              <div class="container">
                <div class="row">
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Waktu Layanan</h5>
                        <ul>
                          <li>Senin - Kamis : 08:00 - 16:00 WIB</li>
                          <li>Jum'at : 08:00 - 16:30 WIB</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Waktu Istirahat</h5>
                        <ul>
                          <li>Senin - Kamis : 12:00 - 13:00 WIB</li>
                          <li>Jum'at : 12:30 - 13:30 WIB</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Media Sosial</h5>
                        <ul>
                          <li>Instagram : @faterna.unand</li>
                          <li>Facebook : Faterna Unand</li>
                          <li>Youtube : Faterna UNAND</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Kontak</h5>
                        <ul>
                          <li>Telepon : 0751 71464</li>
                          <li>Email : Faterna Unand</li>
                          <li>Website : https://faterna.unand.ac.id</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Elemen konten lainnya -->
          </div>
        </div>


      </div>
    </section><!-- End Portfolio Section -->

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
                <a href="{{route('info-publik')}}">Selengkapnya</a>
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
                  <a href="{{route('info-setiap-saat')}}">Selengkapnya</a>
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
                  <a href="{{route('info-sertamerta')}}">Selengkapnya</a>
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
          <h1 style="font-weight: 700; color:#87566e"> Layanan Informasi</h1>
        </div>

        <div class="row content">
          <div class="col-lg-12 justify-content-center">
          <div class="faq-list mb-10">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <a style="color: white; font-weight:400; font-size:24px" href="https://forms.gle/WEie8wmF5abCCSnG6">Formulir Permohonan Informasi Publik</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://forms.gle/5yc7tXzK92nEf4SG9">Formulir Pengajuan Keberatan</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/tata-cara-permohonan-informasi/">Tata Cara Permohonan Informasi</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/kompetensi-pelaksanaan-petugas-layanan/">Kompetensi Pelaksanaan Petugas dan Layanan</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/hasil-survei-indeks-kepuasan/">Hasil Survei Indeks Kepuasan</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/laporan-layanan-informasi/">Laporan Layana Informasi</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/tata-cara-pengajuan-keberatan/">Tata Cara Pengajuan Keberatan</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/tata-cara-penyelesaian-sengketa-informasi/">Tata Cara Penyelesaian Sengketa Informasi</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://forms.gle/UZtyKA5QnpWYnPR36">Kritik,Saran, Masuk dan Pengaduan</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/tata-cara-pengaduan-penyalahgunaan-wewenang/">Tata Cara Penyelesaian Sengketa Informasi</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/faqs/">FAQs</a>
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
                            @foreach($sop as $s)
                                <tr>
                                    <td>{{ $s->judul }}</td>
                                    <td  width="25%">
                                        <a href="{{ asset('storage/sop/' . $s->file) }}" target="_blank" class="btn btn-success btn-sm mt">Download</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>

          </div>

        </div>
    </section>


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
              <a style="color: white; font-weight:400; font-size:24px" href="">Regulasi</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/peraturan-majelis-wali-amanat-mwa/">Peraturan Majelis Wali Amanat (MWA)</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/peraturan-rektor/">Peraturan Rektor</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="400">
              <a style="color: white; font-weight:400; font-size:24px" href="https://ppid.unand.ac.id/surat-edaran/">Surat Edaran</a>
            </li>
          </ul>
        </div>
            </div>
        </div>
    </section>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function () {
  const filterContainer = document.querySelector('.portfolio-isotope');
  const filterItems = filterContainer.querySelectorAll('.portfolio-flters li');

  // Hilangkan semua filter aktif
  filterItems.forEach(item => {
    item.classList.remove('filter-active');
  });

  // Temukan dan tambahkan kelas filter-active pada filter "S1 Padang"
  const s1PadangFilter = filterContainer.querySelector('[data-filter=".filter-visi-misi"]');
  if (s1PadangFilter) {
    s1PadangFilter.classList.add('filter-active');
  }

  // Tampilkan item yang sesuai dengan filter "S1 Padang"
  const isotopeGrid = document.querySelector('.portfolio-container');
  if (isotopeGrid && s1PadangFilter) {
    const iso = new Isotope(isotopeGrid, {
      itemSelector: '.portfolio-item',
      filter: '.filter-visi-misi'
    });
  }

  // Menghapus tab "All"
  const allFilter = filterContainer.querySelector('[data-filter="*"]');
  if (allFilter) {
    allFilter.remove();
  }
});

</script>


