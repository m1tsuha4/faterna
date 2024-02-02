
@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Informasi Beasiswa</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Informasi Beasiswa</li>
      </ol>
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
  </nav>
</div>
@endsection



