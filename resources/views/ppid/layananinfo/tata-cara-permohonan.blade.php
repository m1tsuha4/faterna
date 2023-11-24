@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Form Permohonan Informasi</li>
        </ol>
      </div>
    </nav>
</div>  
<div class="formpermohonan" id="formpermohonan">
  <div class="container">
    <div class="post-heading">
      <h2>Form Permohonan Informasi</h2>
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
      <iframe></iframe>
    </div>
  </div>
</div>
@endsection

