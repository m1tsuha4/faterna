@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Beasiswa</li>
        </ol>
      </div>
    </nav>
</div>  
<div id="beasiswa" class="beasiswa">
  <div class="container">
      <div class="post-heading">
        <h2>Beasiswa</h2>
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
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 tpb-header">
          <div class="title">
            <h2><a href="#"><i class='bx bx-rss' style="color: #9a55da;"></i> Informasi Beasiswa</a></h2>
          </div>
          <div class="col-md-12 widget widget_rss">
            <ul>
              <li>
                <a class="rsswidget" href="#">PENERIMAAN BEASISWA BANK INDONESIA</a>
                <span class="rss-date">16 November 2023</span>
              </li>
              <li>
                <a class="rsswidget" href="#">PENERIMAAN BEASISWA KSE</a>
                <span class="rss-date">16 November 2023</span>
              </li>
              <li>
                <a class="rsswidget" href="#">PENERIMAAN BEASISWA LPS</a>
                <span class="rss-date">16 November 2023</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

