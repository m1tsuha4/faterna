@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Alumni</h2>
          <br>
          <h2>FATERNA UNAND</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Alumni</li>
      </ol>
    </div>
  </nav>
</div>
<section id="faq" class="faq" data-aos="fade-up">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Alumni FATERNA UNAND</h2>
    </div>
    <div class="post-content">
      <table width="100%">
        <tbody width="100%">
            <tr>
              <td width="5%" >No</td>
              <td width="20%" >Wisuda</td>
              <td width="10%" >Tahun</td>
              <td width="20%" >Link Download</td>
            </tr>
            <tr>
              <td width="5%" >1</td>
              <td width="20%" >Wisuda 1</td>
              <td width="10%" >2019</td>
              <td width="20%" ><a href="#">Download</a></td>
            </tr>
            <tr>
              <td width="5%" >2</td>
              <td width="20%" >Wisuda 1</td>
              <td width="10%" >2020</td>
              <td width="20%" ><a href="#">Download</a></td>
            </tr>
            <tr>
              <td width="5%" >2</td>
              <td width="20%" >Wisuda 1</td>
              <td width="10%" >2021</td>
              <td width="20%" ><a href="#">Download</a></td>
            </tr>
            <tr>
              <td width="5%" >3</td>
              <td width="20%" >Wisuda 1</td>
              <td width="10%" >2022</td>
              <td width="20%" ><a href="#">Download</a></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>  

  </div>
</section>
@endsection

