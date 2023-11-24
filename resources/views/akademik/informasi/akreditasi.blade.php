@extends('layout.layoutmain')

@section('content')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Akreditasi Prodi</li>
        </ol>
      </div>
    </nav>
</div>  
<article class="single-post">
    <div class="container">
        <div class="post-heading">
            <h2>Akreditasi Program Studi</h2>
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
            <blockquote>
                <h4>
                    <span style="color:#87566e">
                        <strong>
                            Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT)
                        </strong>
                    </span>
                </h4>
            </blockquote>
            <p style="text-align: justify">
                Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) merupakan satu satunya badan akreditasi yang diakui oleh 
                pemerintah Republik Indonesia melalui Kementerian Riset Teknologi Dan Pendidikan Tinggi Republik Indonesia. 
                BAN-PT berdiri pada tahun 1994 memiliki fungsi penilaian mutu perguruan tinggi, meliputi Perguruan Tinggi 
                Negeri dan Swasta.
            </p>
            <p style="text-align: justify">
                Hasil akreditasi yang telah dilakukan BAN-PT terhadap program studi yang ada di Fakultas Peternakan Universitas Andalas sebagai berikut
            </p>
            <table width="100%">
                <tbody width="100%">
                    <tr>
                        <td width="15%">No</td>
                        <td width="16%">Jenjang</td>
                        <td width="17%">Program Studi</td>
                        <td width="25%">No. SK</td>
                        <td width="16%">Masa Berlaku</td>
                        <td width="17%">Peringkat</td>
                    </tr>
                    <tr>
                        <td width="5%">1</td>
                        <td width="16%"><a href="#">Sarjana (S1)</a></td>
                        <td width="17%">Perternakan</td>
                        <td width="25%">4624/SK/BAN-PT/Akred/S/XII/2017</td>
                        <td width="16%">5 - 12 - 2022</td>
                        <td width="17%"> A </td>
                    </tr>
                    <tr>
                        <td width="5%">2</td>
                        <td width="16%"><a href="#">Sarjana (S1)</a></td>
                        <td width="17%">Perternakan (Kampus II Payakumbuh)</td>
                        <td width="25%">4383/SK/BAN-PT/Akred/S/XI/2017</td>
                        <td width="16%">5 - 12 - 2022</td>
                        <td width="17%"> B </td>
                    </tr>
                    <tr>
                        <td width="5%">3</td>
                        <td width="16%"><a href="#">Magister (S2)</a></td>
                        <td width="17%">Ilmu Perternakan</td>
                        <td width="25%">2610/SK/BAN-PT/Akred/M/IX/2018</td>
                        <td width="16%">18 - 9 - 2023</td>
                        <td width="17%"> A </td>
                    </tr>
                    <tr>
                        <td width="5%">4</td>
                        <td width="16%"><a href="#">Doktor (S3)</a></td>
                        <td width="17%">Ilmu Perternakan</td>
                        <td width="25%">3493/SK/BAN-PT/Akred/D/X/2017</td>
                        <td width="16%">3 - 10 - 2022</td>
                        <td width="17%"> B </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</article>
@endsection