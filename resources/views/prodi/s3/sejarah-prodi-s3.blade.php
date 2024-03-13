@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Sejarah Prodi Doktor</h2>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('s3') }}">S3 Ilmu Peternakan</a></li>
        <li>Sejarah Program Studi Doktor Perternakan</li>
      </ol>
    </div>
  </nav>
</div>
<div class="container">
  <div class="sejarah">
    <div class="sejarah" style="text-align: center">
      <img src="assets/img/sejarah3.png" alt="" width="50%" style="padding: 65px 0px 25px 0px;">
    </div>
    <div class="post-content">
            <blockquote>
                <h4>
                    <span style="color:#87566e">
                        <strong>
                        Sejarah Program Studi S3 Ilmu Peternakan
                        </strong>
                    </span>
                </h4>
            </blockquote>
        </div>
        <p style="text-align: justify">
        Sebagai salah satu negara yang memiliki sumber daya alam  sangat besar, Indonesia menyediakan banyak jenis ternak dan pakan ternak yang tidak ternilai harganya, seperti sapi dan unggas lokal. Semua ternak lokal ini merupakan sumber daya  genetik yang perlu dipertahankan dan dikembangkan sebagai plasma nutfah. Disamping itu potensi dari ternak crossbred yang berasal dari hasil persilangan dengan ternak unggul (impor) yang menghadapi kendala – kendala terutama dari aspek reproduksi dan fertilitas. Hal ini sangat dibutuhkan untuk diteliti dan ditemukan serta diterapkan teknologi akan meningkatan produktivitas ternak lokal.Potensi  yang tersimpan ini dapat diangkat untuk tujuan pelestarian lingkiungan maupun untuk kesejahteraan manusia.        </p>
        <p style="text-align: justify">
        Untuk mengantisipasi kemajuan ilmu dan teknologi yang sangat pesat, perlu disiapkan kemampuan ber­saing yang tinggi, maka pendidikan Peternakan harus menekankan penguasaan ilmu multidisiplin seperti biokimia, animal breeding, bioteknologi reproduksi dan mikrobiologi serta teknologi nutrisi dan pakan ternak maupun  perencanaan dan pengembangan peternakan . Kebijakan ini harus di­tempuh, karena ilmu – ilmu tersebut dengan penerapan teknologi mutakhir  akan menjadikan harapan ilmu masa depan. Untuk itu program studi S3 ilmu peternakan sangat dibutuhkan dalam rangka memenuhi kebutuhan tenaga peneliti peternakan.        </p>
       
       
        
    </div>

  </div>
</div>

</article>
@endsection

