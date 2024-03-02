@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Panduan dan SOP Tugas Akhir</li>
        </ol>
      </div>
    </nav>
</div>
<div id="sop" class="sop">
  <div class="container">
    <div class="post-heading">
      <h2>Panduan dan SOP Tugas Akhir</h2>
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
        <p style="text-align: justify">
          Panduan dan SOP Tugas Akhir merupakan dokumen atau informasi yang disusun dan disediakan 
          untuk memberikan pedoman, informasi, dan aturan - aturan terkait dengan Penyusunan Tugas Akhir Fakultas 
          Perternakan. 
        </p>
        <p>Berikut Panduan dan SOP Tugas Akhir Fakultas Perternakan</p>
        <table width="100%">
          <tbody width="100%">
              <tr>
                  <td width="15%" >No</td>
                  <td width="40%" >Nama Panduan dan SOP TA</td>
                  <td width="20%" >Link Download</td>
              </tr>
              <tr>
                  <td width="15%">1</td>
                  <td width="40%">Panduan Penulisan Tugas Akhir</td>
                  <td width="20%"><a href="">Download</a></td>
              </tr>
              <tr>
                <td width="15%">2</td>
                <td width="40%">SOP Pendaftaran Seminar Proposal</td>
                <td width="20%"><a href="">Download</a></td>
              </tr>
              <tr>
                <td width="15%">3</td>
                <td width="40%">SOP Pendaftaran Ujian Sarjana</td>
                <td width="20%"><a href="">Download</a></td>
              </tr>
              <tr>
                <td width="15%">4</td>
                <td width="40%">SOP Pra KRS</td>
                <td width="20%"><a href="">Download</a></td>
              </tr>
              <tr>
                <td width="15%">5</td>
                <td width="40%">SOP Seminar Hasil</td>
                <td width="20%"><a href="">Download</a></td>
              </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>  
@endsection

