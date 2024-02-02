@extends('layout.menulayout')

@section('contentmenu')
<div class="breadcrumbs">
    <nav>
      <div class="container">
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Visi Misi</li>
        </ol>

        <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6">

          <!-- Ubah Jadi selayang pandang -->
            <center><h1>Visi</h1></center>
            <p>
            Menjadi fakultas yang menghasilkan lulusan berdaya saing nasional menuju internasional dan berperan aktif dalam pembangunan bangsa
            </p>
            <center><h1>Misi</h1></center>
            <ul>
              <li><i class="ri-check-double-line"></i> Menyelenggarakan pendidikan untuk mengembangkan IPTEKS, membangun sikap dan meningkatkan keterampilan dalam bidang Peternakan, sehingga menghasilkan lulusan yang mandiri, mempunyai kompetensi di bidangnya dan berdedikasi tinggi.</li>
              <li><i class="ri-check-double-line"></i> Menyelenggarakan penelitian dasar maupun terapan dalam bidang peternakan serta mempublikasikannya dalam jurnal nasional dan internasional untuk menunjang pengembangan IPTEKS dan pembangunan.</li>
              <li><i class="ri-check-double-line"></i> Menyelenggarakan pengabdian kepada masyarakat untuk menyebarluaskan IPTEKS dalam bidang peternakan yang telah dikuasai maupun dihasilkan melalui penelitian.</li>
              <li><i class="ri-check-double-line"></i> Membangun jaringan kerjasama yang produktif dan berkelanjutan dengan lembaga pendidikan, pemerintah dan swasta baik dalam, maupun luar negeri dalam menunjang penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
              <li><i class="ri-check-double-line"></i> Membangun organisasi Fakultas Peternakan untuk menciptakan suasana yang kondusif untuk penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <center><h1>Tujuan</h1></center>
            <ul>
              <li><i class="ri-check-double-line"></i> Meningkatkan peran Fakultas Peternakan dalam hal peningkatan pemerataan dan akses pendidikan tinggi, sehingga lulusan dapat berkiprah di kancah nasional dan internasional baik di sektor swasta maupun pemerintahan</li>
              <li><i class="ri-check-double-line"></i> Meningkatkan peran serta sivitas akademika dalam menggali dan mengembangkan IPTEKS di bidang peternakan</li>
              <li><i class="ri-check-double-line"></i> Meningkatkan peran serta sivitas akademika dalam menyebarluaskan IPTEKS di bidang peternakan kepada masyarakat.</li>
              <li><i class="ri-check-double-line"></i> Memperluas dan meningkatkan jaringan kerjasama dengan berbagai institusi baik di dalam, maupun di luar negeri dalam rangka pengembangan IPTEKS di bidang peternakan.</li>
              <li><i class="ri-check-double-line"></i> Menerapkan organisasi yang efisien dalam menunjang suasana yang kondusif untuk pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
            </ul>
            <!-- Button trigger modal -->
        <a type="button" class="more-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Selengkapnya
        </a>

        <!-- Modal -->
        <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Visi Misi dan Tujuan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <strong>Visi</strong><br>Menjadi fakultas yang menghasilkan lulusan berdaya saing nasional menuju internasional dan berperan aktif dalam pembangunan bangsa <br> <br>
                <strong>Misi</strong><br>
                <ol>
                  <li>Menyelenggarakan pendidikan untuk mengembangkan IPTEKS, membangun sikap dan meningkatkan keterampilan dalam bidang Peternakan, sehingga menghasilkan lulusan yang mandiri, mempunyai kompetensi di bidangnya dan berdedikasi tinggi. </li>
                  <li>Menyelenggarakan penelitian dasar maupun terapan dalam bidang peternakan serta mempublikasikannya dalam jurnal nasional dan internasional untuk menunjang pengembangan IPTEKS dan pembangunan.</li>
                  <li>Menyelenggarakan pengabdian kepada masyarakat untuk menyebarluaskan IPTEKS dalam bidang peternakan yang telah dikuasai maupun dihasilkan melalui penelitian. </li>
                  <li>Membangun jaringan kerjasama yang produktif dan berkelanjutan dengan lembaga pendidikan, pemerintah dan swasta baik dalam, maupun luar negeri dalam menunjang penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat. </li>
                  <li>Membangun organisasi Fakultas Peternakan untuk menciptakan suasana yang kondusif untuk penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
                </ol>
                <br>
                <strong>Tujuan</strong><br>
                <ol>
                  <li>Meningkatkan peran Fakultas Peternakan dalam hal peningkatan pemerataan dan akses pendidikan tinggi, sehingga lulusan dapat berkiprah di kancah nasional dan internasional baik di sektor swasta maupun pemerintahan </li>
                  <li>Meningkatkan peran serta sivitas akademika dalam menggali dan mengembangkan IPTEKS di bidang peternakan </li>
                  <li>Meningkatkan peran serta sivitas akademika dalam menyebarluaskan IPTEKS di bidang peternakan kepada masyarakat.</li>
                  <li>Memperluas dan meningkatkan jaringan kerjasama dengan berbagai institusi baik di dalam, maupun di luar negeri dalam rangka pengembangan IPTEKS di bidang peternakan.</li>
                  <li>Menerapkan organisasi yang efisien dalam menunjang suasana yang kondusif untuk pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
                </ol>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>
    </section><!-- End About Us Section -->

      </div>
    </nav>
</div>  
@endsection

