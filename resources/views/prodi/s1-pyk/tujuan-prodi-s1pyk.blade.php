@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Tujuan Prodi</li>
        </ol>
      </div>
    </nav>
</div>  
<article class="single-post">
    <div class="container">
        <div class="post-heading">
            <h2>Tujuan</h2>
            <ul class="entry-meta">
                <li class="post-date"> <!-- data tanggal upload-->
                    <i class='bx bx-time-five'></i>
                    8 November 2023, 13.00
                </li>
                <li class="post-autor"> <!-- data admin yang upload dan terhubung ke admin-->
                    <i class='bx bxs-user'></i>
                    Oleh:
                    <a href="#">admin</a>
                </li>
            </ul>
        </div>
        <div class="post-content">
            <blockquote>
                <h4>
                    <span style="color:#87566e">
                        <strong>
                        Tujuan dari Prodi Peternakan Kampus II Payakumbuh
                        </strong>
                    </span>
                </h4>
            </blockquote>
        </div>
        <ol style="list-style-type: decimal;">
          <li>Menghasilkan sarjana peternakan yang unggul dan bermoral, memiliki kompetensi global yang berorientasi sumberdaya lokal.</li>
          <li>Menghasilkan karya penelitian dan inovasi teknologi berorientasi sumberdaya lokal secara optimal dan berkelanjutan.</li>
          <li>Meningkatnya kualitas dan kuantitas pengabdian kepada masyarakat untuk meningkatkan daya saing peternakan rakyat</li>
          <li>Meningkatkan minat masyarakat untuk mendalami ilmu dan teknologi dan membangun profesi bidang usaha yang terkait dengan peternakan untuk menciptakan peluang kerja dan ketahanan pangan.</li>
        </ol>

    </div>
</article>
@endsection
