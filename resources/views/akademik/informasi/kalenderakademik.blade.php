@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Kalender Akademik</li>
        </ol>
      </div>
    </nav>
</div>  
<div class="container">
  <div class="post-heading">
    <h2>Kalender Akademik</h2>
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
    <iframe src="{{asset('assets/kalenderakademik.pdf')}}" frameborder="0" width="100%" height="500"></iframe>
  </div>
</div>
@endsection

