@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Alumni</li>
        </ol>
      </div>
    </nav>
</div>
<div class="container">
  <div class="post-heading">
    <h2>Alumni</h2>
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
    <table width="100%">
      <tbody width="100%">
          <tr>
            <td width="10%" >No</td>
            <td width="20%" >Wisuda</td>
            <td width="10%" >Tahun</td>
            <td width="20%" >Link Download</td>
          </tr>
          <tr>
            <td width="10%" >1</td>
            <td width="20%" >Wisuda 1</td>
            <td width="10%" >2019</td>
            <td width="20%" ><a href="#">Download</a></td>
          </tr>
          <tr>
            <td width="10%" >2</td>
            <td width="20%" >Wisuda 1</td>
            <td width="10%" >2020</td>
            <td width="20%" ><a href="#">Download</a></td>
          </tr>
          <tr>
            <td width="10%" >2</td>
            <td width="20%" >Wisuda 1</td>
            <td width="10%" >2021</td>
            <td width="20%" ><a href="#">Download</a></td>
          </tr>
          <tr>
            <td width="10%" >3</td>
            <td width="20%" >Wisuda 1</td>
            <td width="10%" >2022</td>
            <td width="20%" ><a href="#">Download</a></td>
          </tr>
      </tbody>
    </table>
  </div>
</div>  
@endsection

