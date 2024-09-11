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

      <div class="col-sm-12">
        <p>
          Informasi yang wajib di umumkan secara Serta-merta adalah suatu informasi yang dapat mengancam hajat hidup orang banyak dan ketertiban umum yang meliputi : Prosedur Evakuasi Keadaan Darurat. ( Undang-Undang No 14 Pasal 10 Tahun 2008)
        </p>
      </div>
      
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Pemberlakuan Sistem Contraflow
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Dengan hormat, mohon disampaikan informasi ini kepada dosen, tendik dan mahasiswa kita di Fakultas Bapak.
              Terima kasih banyak pak Dekan. <br><br>

              <img src="https://fekon.unand.ac.id/wp-content/uploads/2024/08/pemberlakuan-contraflow-203x300.jpg" alt="">
              <img src="https://fekon.unand.ac.id/wp-content/uploads/2024/08/Contraflow-unand-200x300.jpg" alt=""> <br><br>

              Sekretaris Universitas
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Panduan Pengisian Presensi Via SSO
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Info DTI Yth. Pimpinan dan Civitas Academica UNAND. Dengan Hormat. Bagi Bapak/Ibu Dosen yang ingin menggunakan Presensi Perkuliahan via sso berikut panduan penggunaan nya: <br>
              
              1. Panduan untuk Dosen <br>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/uRjxBpVRAWA?si=KpkU0N_yNlnhea70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      <br>
              
        

              2. Panduan untuk mahasiswa <br>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/KNVGqRdf9P0?si=LcyT28eFXgb6LdTK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Informasi e-office UNAND
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Info DTI <br><br>

              Yth. Pimpinan di Lingkungan UNAND<br><br>

              Dengan ini diinformasikan bahwa aplikasi e-office UNAND sudah dapat dipergunakan, untuk sementara pada saat ini aplikasi tersebut baru dapat diakses melalui jaringan lokal UNAND.
              Semua dokumen sebelum tanggal 19 Februari 2024 tidak dapat diakses, oleh karena itu mohon maaf atas ketidaknyaman ini.<br><br>

              Terimakasih banyak atas perhatiannya.<br><br>

              Salam Hormat,<br>
              Direktorat Teknologi Informasi. <br><br>

              <img width="500" src="https://ppid.unand.ac.id/wp-content/uploads/2024/03/WhatsApp-Image-2024-03-15-at-11.07.01.jpeg" alt="">
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
              Informasi Gangguan Jaringan
            </button>
          </h2>
          <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <img width="500" src="https://ppid.unand.ac.id/wp-content/uploads/2024/03/Info-DTI-Yth.-Pimpinan-di-Lingkungan-UNAND-Dengan-ini-diinformasikan-bahwa-aplikasi-e-office-UNAND-sudah-dapat-dipergunakan-untuk-sementara-pada-saat-ini-aplikasi-tersebut-baru-dapat-diakses-mela.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

