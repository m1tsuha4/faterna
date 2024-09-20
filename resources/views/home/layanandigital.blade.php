@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Layanan Digital FATERNA UNAND</h2>
            </div>
          </div>
        </div>
    </div>
    <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Layanan Digital</li>
          </ol>
        </div>
    </nav>
</div>
<section id="faq" class="faq" data-aos="fade-up">
  <div class="container" data-aos="fade-up">
    <div style="margin-top: -50px;" class="row content">
        <div class="col-lg-6 d-flex justify-content-start">
          <img width="350" src="{{asset('assets/img/panduan2.png')}}" alt="image">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" style="margin-top: 80px">
          <div class="section-title ppid d-flex justify-content-start">
            <h1>Layanan Digital FATERNA UNAND</h1>
          </div>
          <p style="text-align: justify">Layanan Digital FATERNA merupakan layanan untuk memudahkan civitas akademika
            Fakultas Peternakan Universitas Andalas dalam pendaftaran pendaftaran secara online.</p>
        </div>
    </div>
    <div class="post-content">
      <table width="100%">
        <tbody width="100%">
            <tr>
              <td width="5%" style="font-weight: bold; text-align: center;">No</td>
              <td width="20%" style="font-weight: bold; text-align: center;">Nama Link Pendaftaran</td>
              <td width="20%" style="font-weight: bold; text-align: center;">Link Pendaftaran</td>
            </tr>
            <tr>
                <td width="5%" style="font-weight: bold; text-align: center;"> 1.</td>
                <td width="20%" > Pendaftaran TPA/Seminar Proposal</td>
                <td width="20%" style="text-align: center;"><a href="http://bit.ly/PendaftaranTPA_FaternaUNAND">Daftar</a></td>
            </tr>
            <tr>
                <td width="5%" style="font-weight: bold; text-align: center;"> 2.</td>
                <td width="20%" > Pendaftaran Seminar Hasil</td>
                <td width="20%" style="text-align: center;"><a href="http://bit.ly/PendaftaranSEMHAS_FaternaUNAND">Daftar</a></td>
            </tr>
            <tr>
                <td width="5%" style="font-weight: bold; text-align: center;"> 3.</td>
                <td width="20%" > Pendaftaran Ujian Sarjana</td>
                <td width="20%" style="text-align: center;"><a href="http://bit.ly/PendaftaranUJIANSARJANA_FaternaUNAND">Daftar</a></td>
            </tr>
            <tr>
                <td width="5%" style="font-weight: bold; text-align: center;"> 4.</td>
                <td width="20%" > Pembimbing Skripsi</td>
                <td width="20%" style="text-align: center;"><a href="http://bit.ly/PendaftaranPembimbingTA_FaternaUNAND">Daftar</a></td>
            </tr>
            <tr>
                <td width="5%" style="font-weight: bold; text-align: center;"> 5.</td>
                <td width="20%" > Pendaftaran Semester Pendek</td>
                <td width="20%" style="text-align: center;"><a href="http://bit.ly/PendaftaranSP2021_FaternaUNAND">Daftar</a></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

  </div>
</section>
@endsection

