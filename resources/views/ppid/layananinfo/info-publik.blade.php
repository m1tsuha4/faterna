@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Informasi Yang Tersedia Setiap Saat</li>
        </ol>
      </div>
    </nav>
</div>  
<div class="infopublik" id="infopublik">
  <div class="container">
    <div class="post-heading">
      <h2>Informasi Yang Wajib Tersedia Setiap Saat</h2>
      <ul class="entry-meta">
          <li class="post-date"> <!-- data tanggal upload-->
              <i class='bx bx-time-five'></i>
              6 November 2023, 13.00
          </li>
          <li class="post-autor"> <!-- data admin yang upload dan terhubung ke admin-->
              <i class='bx bxs-user'></i>
              Oleh:
              <a href="#">admin</a>
          </li>
      </ul>
    </div>
    <div class="post-content">
      <table>
        <tr>
          <th>1. Profil Institusi</th>
          <td>
            <a href="#">a. Alamat Lengkap</a><br>
            <a href="#">b. Visi Misi</a><br>
            <a href="#">c. Struktur Organisasi</a><br>
            <a href="#">d. Tugas dan Fungsi Unit Kerja</a><br>
            <a href="#">e. Alamat Lengkap Satuan Unit Kerja</a><br>
            f. Rencana Strategis<br>
            &nbsp;&nbsp;&nbsp;Tahun 2016-2020 <a href="#">Download</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2021-2025 <a href="#">Download</a>
          </td>
        </tr>
        <tr>
          <th>2. Profil Pimpinan</th>
          <td>
            <a href="#">Profil Singkat Pimpinan dan Pejabat Struktural Perguruan Tinggi Tiga Level ke Bawah</a>
          </td>
        </tr>
        <tr>
          <th>3. Kegiatan dan Kinerja Institusi</th>
          <td>
            a. Daftar Isian Pelaksanaan Rencana Kerja Anggaran dan Tahunan (RKAT)<br>
            &nbsp;&nbsp;&nbsp;Tahun 2021 <a href="#">Download</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Download</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Download</a><br>
            b. Laporan Akuntabilitas Kinerja<br>
            &nbsp;&nbsp;&nbsp;Tahun 2021 <a href="#">Download</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Download</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Download</a><br>
            c. Perjanjian Kinerja Rektor dan Dekan<br>
            &nbsp;&nbsp;&nbsp;Tahun 2021 <a href="#">Download</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Download</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Download</a><br>
            <a href="#">d. Program Kerja Strategis (Tahun 2023) dan Unit Kerja Terkait</a><br>
          </td>
        </tr>
        <tr>
          <th>4. Penerimaan Mahasiswa Baru</th>
          <td>
            a. Jenis dan Jenjang Pendidikan<br>
            &nbsp;&nbsp;&nbsp;Program Sarjana (S1) <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Program Pascasarjana (S2) <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Program Doktor (S3) <a href="#">Klik disini</a><br>
            b. Jalur Penerimaan<br>
            &nbsp;&nbsp;&nbsp;Program Sarjana (S1)<br>
            &nbsp;&nbsp;&nbsp;1. Seleksi Nasional Berbasis Prestasi (SNBP) <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;2. Seleksi Nasional Berbasis Tes (SNBT) <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;3. Ujian Tulis Mandiri Berbasis Komputer <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Program Pascasarjana (S2) <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Program Doktor (S3) <a href="#">Klik disini</a><br>
            c. Program Studi dan Daya Tampung<br>
            &nbsp;&nbsp;&nbsp;Program Sarjana (S1) <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Program Pascasarjana (S2) <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Program Doktor (S3) <a href="#">Klik disini</a><br>
            <a href="#">d. Biaya Pendidikan</a>
          </td>
        </tr>
        <tr>
          <th>5. Administrasi Pendidikan</th>
          <td>
            <a href="#">Kalender Akademik</a>
          </td>
        </tr>
        <tr>
          <th>6. Kemahasiswaan</th>
          <td>
            <a href="#">a. Fasilitas Kampus</a> <br>
            <a href="#">b. Organisasi Mahasiswa</a> <br>
            <a href="#">c. Beasiswa</a> <br>
            <a href="#">d. Program Penyangga Kesehatan Mahasiswa</a> <br>
            <a href="#">e. Pembinaan Prestasi Mahasiswa</a> <br>
            <a href="#">f. Pengembangan Karir</a> <br>
            <a href="#">g. Pusat Layanan Mahasiswa (Student Service Centre)</a> 
          </td>
        </tr>
        <tr>
          <th>7. Kepegawaian</th>
          <td>
            <a href="#">Pengumuman Rekrutmen Pegawai dan Hasilnya</a> 
          </td>
        </tr>
        <tr>
          <th>8. Penelitian dan Pengabdian kepada Masyarakat</th>
          <td>
            <a href="#">a. Profil Lembaga Penelitian dan Pengabdian Kepada Masyarakat</a> <br>
            <a href="#">b. Daftar Hasil-Hasil Penelitian Tahun 2019-2023</a> <br>
            <a href="#">c. Kegiatan Pengabdian Kepada Masyarakat</a> <br>
            <a href="#">d. Seminar-seminar Hasil Penelitian</a> <br>
            <a href="#">e. Publikasi Ilmiah:</a><br>
            &nbsp;&nbsp;&nbsp;<a href="#">Klinik Publikasi</a> <br>
            &nbsp;&nbsp;&nbsp;<a href="#">Repository Ilmiah</a> <br>
            &nbsp;&nbsp;&nbsp;<a href="#">Jurnal Ilmiah</a> 
          </td>
        </tr>
        <tr>
          <th>9. Keuangan dan Institusi</th>
          <td>
            a. Laporan Keuangan (Audited)<br>
            &nbsp;&nbsp;&nbsp;Tahun 2021 <a href="#">Download</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Download</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Download</a><br>
            b. Pedoman Pengelolaan Keuangan <a href="#">Download</a>
          </td>
        </tr>
        <tr>
          <th>10. Produk Hukum</th>
          <td>
            Peraturan Rektor Unand <a href="#">Download</a>
          </td>
        </tr>
        <tr>
          <th>11. Pengelolaan Informasi Publik</th>
          <td>
            a. Daftar Informasi Publik <a href="#">Klik disini</a><br>
            b. Daftar Informasi yang Dikecualikan <a href="#">Klik disini</a><br>
            c. Standard Operating Procedure (SOP) Pengelolaan Permohonan Informasi <a href="#">Klik disini</a><br>
            d. Standard Operating Procedure (SOP) Pengelolaan Keberatan atas Informasi <a href="#">Klik disini</a><br>
            e. Standard Operating Procedure (SOP) Penanganan Sengketa Informasi Publik <a href="#">Klik disini</a><br>
            f. Standard Operating Procedure (SOP) Penetapan dan Pemutakhiran Daftar Informasi Publik <a href="#">Klik disini</a><br>
            g. Standard Operating Procedure (SOP) Pengujian tentang Konsekuensi <a href="#">Klik disini</a><br>
            h. Standard Operating Procedure (SOP) Pendokumentasian Informasi Publik <a href="#">Klik disini</a><br>
            i. Standard Operating Procedure (SOP) Pendokumentasian Informasi yang Dikecualikan <a href="#">Klik disini</a><br>
            j. Tata Cara Permohonan Informasi Publik <a href="#">Klik disini</a><br>
            k. Kegiatan Pelayanan yang Telah dan Sedang Dalam Pelaksanaan <a href="#">Klik disini</a><br>
            l. Sarana dan Prasarana Layanan yang Dimiliki beserta Kondisinya <a href="#">Klik disini</a><br>
            m. Sumberdaya yang Menangani Layanan <a href="#">Klik disini<br>
            n. Jadwal Pelayanan <a href="#">Klik disini</a><br>
            o. Maklumat Pelayanan <a href="#">Klik disini</a><br>
            p. Standar Biaya Layanan <a href="#">Klik disini</a>
          </td>
        </tr>
        <tr>
          <th>12. Tata Cara Pengaduan Penyalahgunaan Wewenang atau Pelanggaran</th>
          <td>
            a. Tata Cara Pengaduan Penyalahgunaan Wewenang Pejabat Institusi <a href="#">Klik disini</a><br>
            b. Tata Cara Pengaduan Pelanggaran Disiplin Pegawai <a href="#">Klik disini</a>
          </td>
        </tr>
        <tr>
          <th>13. Panduan Keselamatan, Kesehatan Kerja, Lindungan Lingkungan, Peringatan Dini dan Evakuasi Keadaan Darurat</th>
          <td>
            a. Panduan Keselamatan, Kesehatan Kerja dan Lindungan Lingkungan <a href="#">Klik disini</a><br>
            b. Prosedur Peringatan Dini dan Evakuasi Keadaan Darurat <a href="#">Klik disini</a>
          </td>
        </tr>
        <tr>
          <th>14. Laporan Akses Informasi Publik</th>
          <td>
            a. Ringkasan Permohonan Informasi Publik:<br>
            &nbsp;&nbsp;&nbsp;Tahun 2021 <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Klik disini</a><br>
            b. Ringkasan Keberatan Informasi Publik :<br>
            &nbsp;&nbsp;&nbsp;Tahun 2021 <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Klik disini</a><br>
            c. Jumlah Pemohon Informasi Publik yang Diterima :<br>
            &nbsp;&nbsp;&nbsp;Tahun 2021 <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Klik disini</a><br>
            d. Waktu yang Diperlukan dalam Memenuhi Setiap Permohonan Informasi Publik :<br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Klik disini</a><br>
            e. Jumlah Permohonan Informasi Publik, Baik yang Dikabulkan Sebagian Maupun Seluruhnya :<br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Klik disini</a><br>
            f. Alasan Penolakan Permohonan Informasi Publik :<br>
            &nbsp;&nbsp;&nbsp;Tahun 2022 <a href="#">Klik disini</a><br>
            &nbsp;&nbsp;&nbsp;Tahun 2023 <a href="#">Klik disini</a>
          </td>
        </tr>
        <tr>
          <th>15. Laporan Layanan Informasi</th>
          <td>
            PPID Tahun 2023 <a href="#">Klik disini</a>
          </td>
        </tr>
        <tr>
          <th>16. Laporan Kinerja</th>
          <td>
            Tahun 2021 <a href="#">Klik disini</a><br>
            Tahun 2022 <a href="#">Klik disini</a><br>
            Tahun 2023 <a href="#">Klik disini</a>
          </td>
        </tr>
        <tr>
          <th>17. Berita Institusi</th>
          <td>
            <!-- Tambahkan konten berita atau link berita institusi -->
          </td>
        </tr>
        <tr>
          <th>18. Agenda Kegiatan Institusi</th>
          <td>
            <!-- Tambahkan konten agenda kegiatan atau link agenda -->
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
@endsection

