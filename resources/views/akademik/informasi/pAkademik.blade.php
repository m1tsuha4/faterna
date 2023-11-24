@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Panduan Akademik</li>
        </ol>
      </div>
    </nav>
</div>  
<div id="pakademik" class="pakademik">
  <div class="container">
    <div class="post-heading">
      <h2>Panduan Akademik</h2>
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
          Panduan Akademik merupakan dokumen atau informasi yang disusun dan disediakan 
          untuk memberikan pedoman dan informasi terkait dengan aspek akademik Fakultas 
          Perternakan. Ini termasuk aturan, tata cara, dan prosedur yang harus diikuti oleh 
          civitas akademik Fakultas Perternakan. Tujuan utama dari panduan akademik ini adalah 
          untuk memberikan panduan yang jelas dan terstruktur sehingga civitas akademik 
          Fakultas Perternakan dapat lebih mudah memahami dan mengikuti peraturan serta kebijakan 
          yang berlaku di Fakultas Perternakan.
        </p>
        <p>Berikut Panduan Akademik Fakultas Perternakan</p>
        <table width="100%">
          <tbody width="100%">
              <tr>
                  <td width="15%" >No</td>
                  <td width="40%" >Nama Panduan</td>
                  <td width="20%" >Link Download</td>
              </tr>
              <tr>
                  <td width="15%">1</td>
                  <td width="40%">Panduan Portal Akademik Mahasiswa</td>
                  <td width="20%"><a href="">Download</a></td>
              </tr>
              <tr>
                <td width="15%">2</td>
                <td width="40%">Panduan Akademik 2017/2019</td>
                <td width="20%"><a href="">Download</a></td>
              </tr>
              <tr>
                <td width="15%">3</td>
                <td width="40%">Panduan Farm 2016</td>
                <td width="20%"><a href="">Download</a></td>
              </tr>
              <tr>
                <td width="15%">4</td>
                <td width="40%">Panduan Akademik 2015</td>
                <td width="20%"><a href="">Download</a></td>
              </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>
@endsection

