@extends('layout.menulayout')

@section('contentmenu')
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Informasi Yang Wajib Diberikan (Berkala)</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>PPID</li>
            <li>Informasi Publik</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs --> 

<section class="infopublik" id="infopublik">
  <div class="container-fluid">
    <div class="post-content">
      <p>
        Dalam Undang – Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik telah diatur bahwa tidak semua informasi wajib dibuka untuk publik. Sejumlah informasi kriteria tertentu dikategorikan informasi dikecualikan atau tidak wajib disediakan Badan Publik.
      </p>
    </div>
  </div>
</section>
@endsection

