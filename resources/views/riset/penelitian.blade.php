@extends('layout.menulayout')

@section('contentmenu')
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Penelitian FATERNA UNAND</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Pengabdian FATERNA UNAND</li>
                </ol>
                <section id="penelitian-header">
                    <h1>Fakultas Peternakan Universitas Andalas</h1>
                    <p>Penelitian Fakultas Peternakan 2020-2024</p>
                </section>
                <section class="design-section">
                    <div class="timeline">

                        <!--Well, The reason for this div is to fill space.
            This space is technically used for keeping dates,
            but I didn't find the need for dates. However, I'll provide
            you the styling for dates, so that you can use it if you
            wanted to.-->
                        <div class="timeline-empty">
                        </div>

                        <!--This is the class where the timeline graphics are
            housed in. Note that we have timeline-circle
            here for that pointer in timeline.-->

                        <div class="timeline-middle">
                            <div class="timeline-circle"></div>
                        </div>
                        <div class="timeline-component timeline-content">
                            <h3>2020</h3>
                            <p>Judul Penelitian.</p>

                            <button class="btn-first" >Dokumentasi</button>
                        </div>
                        <div class="timeline-component timeline-content">
                            <h3>2021</h3>
                            <p>Judul Penelitian.</p>
                        </div>
                        <div class="timeline-middle">
                            <div class="timeline-circle"></div>
                        </div>
                        <div class="timeline-empty">
                        </div>

                        <div class="timeline-empty">
                        </div>

                        <div class="timeline-middle">
                            <div class="timeline-circle"></div>
                        </div>
                        <div class=" timeline-component timeline-content">
                            <h3>2022</h3>
                            <p>Judul Penelitian.</p>
                        </div>
                        <div class="timeline-empty">
                        </div>
                        <div class="timeline-empty">
                        </div>
                        <div class="timeline-middle">
                          <div class="timeline-circle"></div>
                      </div>
                      <div class=" timeline-component timeline-content">
                          <h3>2023</h3>
                          <p>Judul Penelitian.</p>
                      </div>
                      <div class="timeline-middle">
                        <div class="timeline-circle"></div>
                    </div>
                    <div class="timeline-empty">
                    </div>

                    <div class="timeline-empty">
                    </div>
                    <div class="timeline-middle">
                      <div class="timeline-circle"></div>
                  </div>
                  <div class=" timeline-component timeline-content">
                      <h3>2024</h3>
                      <p>Judul Penelitian.</p>
                  </div>
                  <div class="timeline-empty">
                  </div>
                  <div class="timeline-middle">
                    <div class="timeline-circle"></div>
                </div>
                </section>
            </div>
        </nav>
    </div>
@endsection
