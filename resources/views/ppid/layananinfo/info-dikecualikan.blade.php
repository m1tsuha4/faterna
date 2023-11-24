@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Informasi Yang Wajib Disediakan Secara Berkala</li>
        </ol>
      </div>
    </nav>
</div>  
<div class="infopublik" id="infopublik">
  <div class="container">
    <div class="post-heading">
      <h2>Informasi Yang Wajib Diberikan (Berkala)</h2>
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
            <th>No</th>
            <th>Kategori</th>
            <th>Subkategori</th>
            <th>Link Download</th>
        </tr>
        <tr>
            <th>1</th>
            <th>Pedoman Penyelenggaran Administrasi</th>
            <td>a. Pedoman Pengelolaan Organisasi</td>
            <td><a href="#">Download</a></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>b. Pedoman Pengelolaan Administrasi (Tata Naskah Dinas)</td>
            <td><a href="#">Download</a></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>c. Pedoman Pengelolaan Kepegawaian</td>
            <td><a href="#">Download</a></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>d. Pedoman Pengelolaan Keuangan</td>
            <td><a href="#">Download</a></td>
        </tr>
        <tr>
            <th>2</th>
            <th>Data Statistik</th>
            <td>a. Data Statistik Kemahasiswaan</td>
            <td><a href="#">Download</a></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>b. Data Statistik Kepegawaian</td>
            <td><a href="#">Download</a></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>c. Data Statistik Keuangan</td>
            <td><a href="#">Download</a></td>
        </tr>
        <tr>
          <th>3</th>
          <th>Kerjasama</th>
          <td>a. Daftar Mitra Kerjasama Nasional</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td>b. Daftar Mitra Kerjasama Internasional</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td>c. Dokumen Perjanjian Kerjasama (Nota Kesepahaman/Nota Kerjasama/Sejenisnya berikut Dokumen Pendukungnya)</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <th>4</th>
          <th>Dokumen Surat-Surat</th>
          <td>a. Dokumen Surat Menyurat Pimpinan atau Pejabat Institusi dalam Rangka Pelaksanaan Tugas Pokok dan Fungsi</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <th>5</th>
          <th>Pengelolaan Barang Milik Negara (BMN) dan Barang Milik IPB</th>
          <td>a. Pedoman Pengelolaan Barang Milik Negara (BMN) dan Barang Milik IPB (BMI)</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td>b. Laporan Barang Milik Negara (BMN) dan Barang Milik IPB (BMI)</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <th>6</th>
          <th>Pelanggaran Disiplin dan Penindakan</th>
          <td>a. Jumlah Pelanggaran Disiplin dan Penindakan Terhadap Pegawai</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <th>7</th>
          <th>Formulir Pelayanan Publik</th>
          <td>a. Formulir Permohonan Informasi</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td>b. Formulir Tanda Terima Permohonan Informasi</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td>c. Formulir Pengajuan Keberatan</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td>d. Rekap Register Permohonan Informasi</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <th>8</th>
          <th>Klasifikasi Arsip</th>
          <td>a. Klasifikasi Arsip Substansif</td>
          <td><a href="#">Download</a></td>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td>b. Klasifikasi Arsip Fasilitatif</td>
          <td><a href="#">Download</a></td>
      </tr>
    </table>
    </div>
  </div>
</div>
@endsection

