@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Profile PPID</li>
        </ol>
      </div>
    </nav>
</div>  
<div id="profilppid" class="profilppid">
  <div class="container">
    <div class="post-heading">
      <h2>Profil PPID</h2>
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
      <strong>Selamat Datang di Layanan Informasi Fakultas Perternakan Universitas Andalas</strong>
      <p style="text-align: justify">
        Sesuai amanat UU No. 14 Tahun 2008 Tentang Keterbukaan Informasi Publik (KIP), 
        UNAND sebagai badan publik memenuhi kebutuhan informasi dengan membuat Layanan Informasi Publik. 
        Pembentukan Pejabat Pengelola Informasi dan Dokumentasi (PPID) Universitas Andalas Pertama Kalinya 
        Tahun 2015 Melalui Surat Keputusan Rektor Universitas Andalas Nomor : 456/XIII/A/UNAND-2015. 
        Layanan Informasi Publik UNAND juga disediakan untuk memudahkan publik mendapatkan informasi tentang UNAND. 
        Publik berhak mengajukan informasi publik yang dikelola oleh UNAND sesuai ketentuan-ketentuan yang berlaku. 
        UNAND melayani seluruh permohonan informasi melalui Layanan Informasi Publik secara online, dan juga secara 
        offline (datang langsung, surat elektronik, telepon, dll).
      </p>
      <br>
      <table>
        <tbody>
          <tr>
              <th width="15%">Hari</th>
              <th Width="25%">Waktu Layanan</th>
              <th Width="25%">Waktu Istirahat</th>
          </tr>
          <tr>
              <td width="15%">Senin - Kamis</td>
              <td Width="25%">08.00 - 15.30 WIB</td>
              <td Width="25%">12.00 - 13.00 WIB</td>
          </tr>
          <tr>
              <td width="15%">Jumat</td>
              <td Width="25%">08.00 - 16.00 WIB</td>
              <td Width="25%">12.00 - 13.30 WIB</td>
          </tr>
        </tbody>
      </table>
      <br>
      <strong>Alamat dan Kontak </strong>
      <p>Kampus Unand Limau Manis, Padang - Fakultas Perternakan Unand Sumatera Barat - 25175</p>
      <p>Telepon : </p>
      <p>E-mail  : </p>
      <p>Website : faterna.unand.ac.id</p>
    </div>
  </div>
</div>
@endsection

