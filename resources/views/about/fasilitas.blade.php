@extends('layout.menulayout')

@section('contentmenu')
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 class="fasilitas-header">Sarana & Prasarana</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Sarana & Prasarana</li>
                </ol>
                <section class="d-flex justify-content-center align-items-center" id="fasilitas-main">
                    <div class="row fasilitas-main">
                        <div class="col-md-6 d-flex justify-content-center fasilitas-img-main">
                            <div class="card fasilitas-card">
                                <div class="circle"></div>
                                <div class="circle"></div>
                                <div class="card-inner">
                                    <img style="border-radius:12px;" class="img-fluid" src="{{ asset('assets/img/faterna2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 d-flex justify-content-center flex-column align-items-center fasilitas-text-header">
                            <div class="row text1">
                                <h1 class="ml9">
                                    <span class="text-wrapper">
                                        <span class="letters">Sarana & Prasarana</span>
                                    </span>
                                </h1>
                            </div>
                            <div class="row text2">Fakultas Peternakan Universitas Andalas</div>
                        </div>
                    </div>
                </section>
                @php
                    $no = 1;
                @endphp
                @foreach($allSarana as $sarana)
                    @if($no % 2 != 0)
                        <section class="px-5" id="fasilitas-content{{ $no }}">
                            <div style="margin: 0" class="row  nama-fakultas">
                                Fakultas Peternakan
                            </div>
                            <div style="margin: 0" class="row  nama-fasilitas">
                                {{ $sarana->nama }}
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <div class="card d-flex justify-content-center align-items-center foto-fasilitas">
                                        <img class="img-fluid" src="{{ asset('storage/fasilitas/'.$sarana->file) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center flex-column fasilitas-desc">
                                    <p> {{ $sarana->deskripsi }}</p>
                                </div>
                            </div>
                        </section>
                    @else
                        <section class="px-5" id="fasilitas-content{{ $no }}">

                            <div style="margin: 0" class="row d-flex justify-content-end nama-fasilitas">
                                {{ $sarana->nama }}
                            </div>
                            <div class="row d-flex flex-row-reverse mt-3">
                                <div class="col-md-6 d-flex justify-content-center d-flex justify-content-end">
                                    <div class="card d-flex justify-content-center align-items-center foto-fasilitas">
                                        <img class="img-fluid" src="{{ asset('storage/fasilitas/'.$sarana->file) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center flex-column fasilitas-desc">
                                    <p> {{ $sarana->deskripsi }}</p>
                                </div>
                            </div>
                        </section>
                    @endif

                    @php
                        $no++;
                    @endphp
                @endforeach

{{--                <section class="px-5" id="fasilitas-content2">--}}

{{--                    <div style="margin: 0" class="row d-flex justify-content-end nama-fasilitas">--}}
{{--                        Fasilitas 2--}}
{{--                    </div>--}}
{{--                    <div class="row d-flex flex-row-reverse mt-3">--}}
{{--                        <div class="col-md-6 d-flex justify-content-center d-flex justify-content-end">--}}
{{--                            <div class="card d-flex justify-content-center align-items-center foto-fasilitas">--}}
{{--                                <img class="img-fluid" src="{{ asset('assets/img/labor-contoh.jpeg') }}" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 d-flex justify-content-center flex-column fasilitas-desc">--}}
{{--                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia consectetur quasi officiis--}}
{{--                                voluptate illo qui praesentium est facilis repudiandae reprehenderit provident nam soluta--}}
{{--                                maiores, eum omnis dignissimos esse tempore? Explicabo!--}}
{{--                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam itaque explicabo officia--}}
{{--                                sapiente quae odit exercitationem, fugit qui delectus placeat quidem nobis voluptate--}}
{{--                                pariatur necessitatibus nostrum perferendis inventore dolores corporis?</p>--}}
{{--                            <!-- <button class="btn btn-first" data-bs-toggle="modal"--}}
{{--                                data-bs-target="#exampleModal">Selengkapnya</button>--}}
{{--                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"--}}
{{--                                aria-hidden="true">--}}
{{--                                <div class="modal-dialog modal-lg modal-dialog-centered">--}}
{{--                                    <div class="modal-content daftar-labor">--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Fasilitas2 Faterna</h1>--}}
{{--                                            <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                                aria-label="Close"></button>--}}
{{--                                        </div>--}}
{{--                                        <div class="modal-body">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-4">Gambar fasilitas</div>--}}
{{--                                                <div class="col-md-4">2</div>--}}
{{--                                                <div class="col-md-4">3</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-4">4</div>--}}
{{--                                                <div class="col-md-4">5</div>--}}
{{--                                                <div class="col-md-4">6</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-4">7</div>--}}
{{--                                                <div class="col-md-4">8</div>--}}
{{--                                                <div class="col-md-4">9</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div> -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
            </div>
        </nav>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml9 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml9 .letter',
                scale: [0, 1],
                duration: 1500,
                elasticity: 600,
                delay: (el, i) => 45 * (i + 1)
            }).add({
                targets: '.ml9',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
    </script>
@endsection
