@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Kalender Akademik FATERNA</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Kalender Akademik</li>
      </ol>
      <section class="d-flex align-items-center justify-content-center" id="kalender-pendidikan" >
        <div style="margin: 0" class="row d-flex align-items-center justify-content-center">
          <div class="col-md-6">
            <h1>Kalender Akademik</h1>
            <p>Fakultas Peternakan Universitas Andalas</p>
           </div>
           <div class="col-md-6">
            <img style="width:400px " src="{{asset('assets/img/kalender.png')}}" alt="">  
           </div>
        </div>
      
      </section>
      <div class="row d-flex justify-content-center text-center kalender-header mb-3">
        Kalender Akademik Faterna Unand <br> Genap T.A 2023/2024
         </div>
         <div class="row">
          <object data="{{asset("assets/kalenderakademik.pdf")}}" width="600" height="400"></object>
         </div>
        
      </div>
    </div>
  </nav>
</div>

@endsection

