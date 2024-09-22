@extends('layout.menulayout')

@section('contentmenu')
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Informasi yang Wajib Disediakan (Berkala)</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>PPID</li>
            <li>Informasi Yang Wajib Disediakan (Berkala)</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs --> 

<section class="infopublik" id="infopublik">
  <div class="container">
    <div class="post-content">
      
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Profil Fakultas
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="">Alamat Lengkap Fakultas</a></li>
              <li><a href="{{route('visi-misi')}}">Visi - Misi Fakultas</a></li>
              <li><a href="{{route('struktur')}}">Struktur Organisasi Fakultas</a></li>
              <li><a href="{{route('selayang-pandang')}}">Tugas, Fungsi Fakultas</a></li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Profil Pimpinan Fakultas
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="{{route('struktur')}}">Profil Singkat Pemimpin Fakultas</a></li>
              <li><a href="">LHKPN/LHKASN pada Periode Tahun Sebelum Untuk Pemimpin Perguruan Tinggi hingga 3 Level ke Bawah</a></li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Kegiatan PTN yang bersifat Strategis sesuai Tugas dan Fungsi
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="">Program_program tahun 2023 PTN yang di umumkan di website sesuai dengan tugas dan fungsi</a></li>
              <li><a href="">Program_program PTN yang sedang dilaksanakan ditahun 2023 yang di umumkan melalui website</a></li>
              <li><a href="">Informasi ringkasan kinerja atas program/kegiatan yang telah dilaksanakan</a></li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
              Informasi Keuangan Perguruan Tinggi
            </button>
          </h2>
          <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="">Laporan Keuangan Perguruan Tinggi Tahun Sebelumnya yang telah diaudit.</a></li>
              <li><a href="">Laporan Realisasi Anggaran (LRA)</a></li>
              <li><a href="">Catatan Atas Laporan Keuangan (CALK)</a></li>
              <li><a href="">Daftar Aset dan Investasi</a></li>
              <li><a href="">Neraca</a></li>
              <li><a href="">Informasi Keuangan Berkaitan Hak & Kewajiban mahasiswa (UKT, Beasiswa, dll)</a></li>
              <li><a href="">Mengumumkan Informasi Realisasi Penggunaan Tahun Berjalan</a></li>
              <li>
                Informasi Keuangan Lainnya
                  <ul>
                    <li><a href="">Laporan Arus Kas</a></li>
                    <li><a href="">Laporan Auditor Independen</a></li>
                    <li><a href="">Realisasi Anggaran Kantor Humas, Protokoler, dan Layanan Informasi Publik UNAND Tahun 2023</a></li>
                  </ul>
              </li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
              Pengadaan Barang dan Jasa
            </button>
          </h2>
          <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="">Mengumumkan mekanisme pengadaan barang dan jasa melalui SIRUP, LPSE atau bentuk lainnya</a></li>
              <li><a href="">Mengumumkan paket-paket pengadaan barang dan jasa Tahun 2023 berkaitan program atau kegiatan sesuai tugas dan fungsi pokok  PTN yang telah dilakukan serah terima</a></li>
              <li><a href="">Mengumumkan paket-paket pengadaan barang dan jasa Tahun 2023 berkaitan program atau kegiatan sesuai tugas dan fungsi pokok PTN yang sedang berjalan (belum serah terima)</a></li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
              Informasi Publik Sesuai Fungsi Utama PTN
            </button>
          </h2>
          <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="">PTN menyediakan dan mengumumkan dan menetapkan informasi yang dikuasasi Tahun 2023 dalam Daftar Informasi Publik (DIP) sesuai standar Perki 1 Tahun 2021</a></li>
              <li><a href="">PTN telah mencantumkan informasi dikecualikan yang habis jangka waktu pengecualian sebagai informasi terbuka</a></li>
              <li><a href="">PTN menyediakan Informasi Publik lain yang telah dinyatakan terbuka bagi masyarakat berdasarkan mekanisme keberatan dan/atau penyelesaian sengketa</a></li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
              Informasi Kegiatan dan Kinerja Perguruan Tinggi
            </button>
          </h2>
          <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="">Program/Kegiatan yang Sedang Dijalankan Perguruan Tinggi di Tahun Berjalan yang bersifat Strategis sesuai tugas dan fungsi</a></li>
              <li><a href="">Agenda Terkait Pelaksanaan Tugas Perguruan Tinggi Tahun Berjalan</a></li>
              <li><a href="">Informasi Layanan Terkait Hak- Hak Masyarakat Tahun Berjalan</a></li>
              <li><a href="">Penerimaan Calon Pegawai (Tahun Penerimaan Terakhir)</a></li>
              <li><a href="">Laporan Akuntabilitas Kinerja Tahun Sebelumnya</a></li>
              <li><a href="">Pemilihan Dekan FATERNA UNAND</a></li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
              Ringkasan laporan akses Informasi Publik
            </button>
          </h2>
          <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              -
              {{-- <li><a href=""></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li> --}}
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapseThree">
              Informasi Laporan Akses Informasi Perguruan Tinggi
            </button>
          </h2>
          <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="">Ringkasan Laporan Permohonan Informasi Publik</a></li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapseThree">
              Informasi Laporan Tata Cara Permohonan Informasi Publik Perguruan Tinggi
            </button>
          </h2>
          <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="">Tata Cara Permohonan Informasi Publik</a></li>
              <li><a href="">Tata cara pengajuan keberatan dalam permohonan informasi</a></li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapseThree">
              Informasi Penerimaan Mahasiswa Baru
            </button>
          </h2>
          <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="https://pmb.unand.ac.id/">Jalur Penerimaan</a></li>
              <li><a href="https://pmb.unand.ac.id/">Persyaratan</a></li>
              <li><a href="https://pmb.unand.ac.id/">Jumlah penerimaan mahasiswa baru</a></li>
              <li><a href="https://pmb.unand.ac.id/">Penerimaan Mahasiswa Alih Jenjang (S1 intake D3)</a></li>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapseThree">
              Maklumat Pelayanan Informasi Publik
            </button>
          </h2>
          <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <li><a href="">Maklumat Pelayanan Informasi Publik </a></li>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

