@extends('layout.menulayout')

@section('contentmenu')
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('assets/img/unand.png'); height: 40vh;  background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Kemahasiswaan FATERNA</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Kemahasiswaan</li>
                </ol>
            </div>
        </nav>

        <section id="about" class="about sections-bg ">
            <div class="container" data-aos="fade-up">

                <div style="margin-top: -50px;" class="row content">
                    <div class="col-lg-6 d-flex justify-content-start">

                        <img width="500" src="{{ asset('assets/img/kemahasiswaan.webp') }}" alt="image">

                    </div>
                    <div class="col-lg-6  pt-lg-0">
                        <div class="section-title ppid d-flex justify-content-start">
                            <h1>Kemahasiswaan Faterna</h1>
                        </div>
                        <p>
                            Dalam memberikan pelayanan kepada mahasiswa, fakultas Peternakan Universitas Andalas melalui
                            Bidang Akademik dan Kemahasiswaan memiliki berbagai program untuk pemberdayaan mahasiswa, baik
                            dalam bidang akademik maupun non akademik. Dengan kampus yang sangat luas dan dukungan almuni,
                            memiliki berbagai fasilitas untuk menunjang kreatifitas dan aktifitas mahasiswa.
                        </p>
                        <br>
                        <p>
                            Berbagai layanan kemahasiswaan dirancang untuk memberikan kenyamanan bagi mahasiswa selama
                            menempuh pendidikan di Fakultas Peternakan Universitas Andalas. Berbagai kegiatan kemahasiswaan
                            dalam bentuk Unit Kegiatan Mahasiswa dapat menjadi alternatif aktifitas mahasiswa selain dari
                            kegitan pembelajaran
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
        <section id="ormawa" class="about sections-bg ">
            <div class="container" data-aos="fade-up">

                <div style="margin-top: -50px;" class="row content">

                    <div class="col-lg-12  pt-lg-0">
                        <div class="section-title ppid d-flex justify-content-start">
                            <h1 class="w-100 text-center">Ormawa Faterna</h1>
                        </div>
                        <div class="row mb-3"><strong>1. DEWAN PERWAKILAN MAHASISWA (DPM)</strong></div>
                        <div class="row mb-3">

                            <div class="col-lg-6  pt-lg-0" style="text-align: justify">

                                <p >
                                    Dewan Perwakilan Mahasiswa (DPM) memiliki 3 komisi yaitu Komisi I, Komisi II dan Komisi
                                    III. Komisi I merupakan yang bertanggung jawab dalam merancang, mengesahkan, meninjau,
                                    mengevaluasi, membukukan serta mempublikasikan prihal legislasi yang bersifat umum
                                    maupun khusus. Komisi II merupakan suatu komisi yang mempunyai fungsi pengawasan
                                    terhadap pelaksanaan UUD NB KM Faterna Unand, pelaksanaan Undang-Undang NB KM Faterna
                                    Unand, dan perencanaan serta pelaksanaan keputusan Gubernur. Komisi III merupakan suatu
                                    komisi yang bergerak dalam fungsi aspirasi yakni menjaring aspirasi dari mahsiswa
                                    Faterna Unand dan mengakomodasikannya ke pihak yang terkait.
                                </p>

                            </div>
                            <div class="col-lg-6 d-flex justify-content-center align-items-center" >
                              <img width="270" src="{{ asset('assets/img/DPM.png') }}" alt="image">
                            </div>
                          
                        </div>
                        <div class="row mb-3"><strong>2.BADAN EKSEKUTIF MAHASISWA (BEM)</strong></div>
                        <div class="row mb-3">


                            <div class="col-lg-6 d-flex justify-content-center align-items-center">

                                <img width="500" src="{{ asset('assets/img/BEM.png') }}" alt="image">

                            </div>
                            <div class="col-lg-6  pt-lg-0" style="text-align: justify">

                                <p>
                                    Badan Eksekutif Mahasiswa (BEM) NB KM Faterna Unand adalah lembaga eksekutif dalam NB KM
                                    Faterna, yang mempunyai fungsi regulasi, fasilitasi, dinamisasi, koordinasi, dan
                                    distribusi. Wewenang BEM NB KM Faterna yaitu menciptakan kesejahteraan, kedamaian,
                                    keadilan, kestabilan, dan keamanan bagi warga negara dan lingkungan NB KM Faterna,
                                    memberikan cerminan nama baik mahasiswa NB KM Faterna Unand, baik di dalam maupun di
                                    luar lingkungan kampus, memberikan hak-hak bagi setiap warga negara sesuai dengan
                                    peraturan perundang-undangan yang berlaku. Tugas BEM NB KM Faterna Unand sebagia
                                    berikut: <br>
                                    a. Menyusun program kerja sesuai dengan amanat SU NB KM Faterna Unand, dengan tidak
                                    bertentangan dengan peraturan perundang-undangan yang berlaku <br>
                                    b. Meminta pengesahan program kerja kepada DPM NB KM Faterna Unand <br>
                                    c. Menyusun Rancangan Anggaran Pendapatan dan Belanja Negara (RAPBN) dengan
                                    memperhatikan pertimbangan DPM NB KM Faterna Unand <br>
                                    d. Melaksanakan program kerja yang telah disahkan oleh DPM NB KM Faterna <br>
                                    e. Mengatur jalannya kegiatan kemahasiswaan NB KM Faterna unand dengan tertib <br>
                                    f. Berkoordinasi dengan UKMF untuk memfasilitasi minat, bakat dan potensi positif yang
                                    dimiliki oleh mahasiswa NB KM Faterna Unand <br>
                                    g. Mempertaggungjawabkan tugasnya dalam SU NB KM Faterna Unand <br>

                                </p>

                            </div>
                        </div>
                        <div class="row mb-3"><strong>3. HIMPUNAN MAHASISWA PETERNAKAN (HIMAPET)</strong></div>
                        <div class="row mb-3">

                            <div class="col-lg-6  pt-lg-0" style="text-align: justify">

                                <p>
                                    Himpunan Mahasiswa Peternakan Fakultas Peternakan Universitas Andalas (HIMAPET)
                                    merupakan suatu himpunan didalam fakultas yang menjadi wadah untuk menghimpun seluruh KM
                                    Fakultas Peternakan Universitas Andalas. HIMAPET didirikan pada 27 Mei 2009,
                                    berkedudukan di Program Studi Peternakan, Fakultas Peternakan, Universitas Andalas
                                    Padang. HIMAPET bertujuan mewujudkan kondisi kemahasiswaan yang kondusif guna
                                    meningkatkan wawasan intelektual, kreatifitas, dan keterampilan di bidang peternakan
                                    khususnya dalam rangka terwujudnya cita-cita perguruan tinggi serta sebagai wadah
                                    aspirasi oleh mahasiswa peternakan dan civitas akademika.
                                </p>

                            </div>
                            <div class="col-lg-6 d-flex justify-content-center align-items-center">

                                <img width="270" src="{{ asset('assets/img/HIMA.png') }}" alt="image">

                            </div>
                        </div>
                        <div class="row mb-3"><strong>4. LEMBAGA KAJIAN ILMIAH MAHASISWA (LKIM)</strong></div>
                        <div class="row mb-3">
                            <div class="col-lg-6 d-flex justify-content-center align-items-center">

                                <img width="300" src="{{ asset('assets/img/LKIM.png') }}" alt="image">

                            </div>
                            <div class="col-lg-6  pt-lg-0" style="text-align: justify">

                                <p>
                                    Lembaga Kajian Ilmiah Mahasiswa adalah organisasi yang mewadahi kegiatan penalaran
                                    ilmiah dan non ilmiah sebagai forum komunikasi antar anggota dan mahasiwa peternakan.
                                    LKIM Faterna Unand berdiri pada tanggal 21 September 2005. LKIM Faterna Unand memiliki
                                    tujuan sebagai wadah pengembangan diri mahasiswa Fakultas Peternakan Universitas Andalas
                                    untuk dapat mengembangkan penalaran keilmuwan, serta pengabdian masyarakat.

                                </p>

                            </div>
                        </div>
                        <div class="row mb-3"><strong>5. MAPALA SVARNA DVIPA UNGU</strong></div>
                        <div class="row mb-3">

                            <div class="col-lg-6  pt-lg-0" style="text-align: justify">

                                <p>
                                    Mapala Svarna Dvipa Ungu yaitu organisasi yang dibentuk pada tanggal 10 November 1998.
                                    Organisasi ini memiliki tujuan meningkatkan ketaqwaan terhadap Tuhan Yang Maha Esa,
                                    mendidik anggotanya untuk percaya pada kekuatan diri sendiri, mendidik anggotanya untuk
                                    berani bertanggung jawab, ulet, tabah, mawas diri dan meningkatkan kedisiplinan anggota,
                                    mempererat tali persaudaraan baik sesama anggota maupun dengan orang lain tanpa
                                    membedakan agama, suku, ras, adat istiadat, serta status sosialnya, memberikan pandangan
                                    yang luas terhadap anggotanya, alam dan lingkungan agar tidak terbatas pada ilmu
                                    pengetahuan saja, serta meningkatkan kecintaan anggotanya terhadap tanah air pada
                                    umumnya dan alam khususnya. Fungsi Mapala Svarna Dvipa Ungu yaitu mengakomodir minat dan
                                    bakat kepecintaalaman, menaungi pengembangan bakat, nalar, dan ilmu keterampilan,
                                    melaksanakan tri darma perguruan tinggi, dan berperan aktif dalam menyikapi situasi
                                    kelestarian alam secara khususnya, bangsa dan Negara secara umumnya serta tanggap
                                    terhadap darurat bencana dan kemanusiaan.
                                </p>

                            </div>
                            <div class="col-lg-6 d-flex justify-content-center align-items-center">

                                <img width="400" src="{{ asset('assets/img/mapala.png') }}" alt="image">

                            </div>
                        </div>
                        <div class="row mb-3"><strong>6. UNIT KEGIATAN SENI (UKS)</strong></div>
                        <div class="row mb-3">
                            <div class="col-lg-6 d-flex justify-content-center align-items-center">

                                <img width="350" src="{{ asset('assets/img/UKS.png') }}" alt="image">

                            </div>
                            <div class="col-lg-6  pt-lg-0" style="text-align: justify">

                                <p>
                                    Unit Kegiatan Seni (UKS) memiliki tujuan yaitu menyiapkan anggota Sanggar Ungu UKS
                                    Faterna Unand agar menjadi civitas akademika yang mendapatkan pembinaan kesenian dan
                                    keorganisasian, menyalurkan minat dan bakat civitas akademika Fakultas Peternakan
                                    Universitas Andalas dibidang kesenian dan keorganisasian serta mengarahkannya guna
                                    membentuk kepribadian menuju tercapainya manusia seutuhnya, mengembangkan bakat dan
                                    minat mahasiswa dibidang kesenian dan keorganisasian, menumbuhkan dan mengembangkan
                                    apresiasi seni mahasiswa Fakultas Peternakan Universitas Andalas, dan menumbuhkan
                                    kecintaan dan kebanggaan kepada almamater Universitas Andalas dan melakukan sinergi
                                    dengan kehidupan kampus Universitas Andalas secara umum.

                                </p>

                            </div>
                        </div>
                        <div class="row mb-3"><strong>7. UNIT KEGIATAN OLAHRAGA (UKO)</strong></div>
                        <div class="row mb-3">

                            <div class="col-lg-6  pt-lg-0" style="text-align: justify">

                                <p>
                                    Unit Kegiatan Olahraga (UKO) merupakan unit kegiatan olahraga Fakultas Peternakan yang
                                    didirikan pada tanggal 10 November 2009. Tujuan organisasi ini adalah mewujudkan kondisi
                                    kemahasiswaan yang kondusif guna meningkatkan wawasan keolahragaan intelektual,
                                    kreativitas dan keterampilan dalam rangka terwujudnya cita-cita perguruan tinggi. Fungsi
                                    UKO adalah melaksanakan dan mengelola kegiatan kemahasiswaan dibidang keolahragaan
                                    Fakultas Peternakan dan sebagai wadah untuk menyalurkan bakat keolahragaan dalam rangka
                                    menciptakan rasa kebersamaan.
                                </p>

                            </div>
                            <div class="col-lg-6 d-flex justify-content-center align-items-center">

                                <img width="300" src="{{ asset('assets/img/UKO.png') }}" alt="image">

                            </div>
                        </div>
                        <div class="row mb-3"><strong>8. FORUM STUDI ISLAM (FSI)</strong></div>
                        <div class="row mb-3">
                            <div class="col-lg-6 d-flex justify-content-center align-items-center">

                                <img width="400" src="{{ asset('assets/img/FSI.png') }}" alt="image">

                            </div>
                            <div class="col-lg-6  pt-lg-0" style="text-align: justify">

                                <p>
                                    Forum Studi Islam (FSI) Faterna Unand merupakan sebuah organisasi intrafakultas yang
                                    berazaskan islam yang berprinsip menyebarkan fikrah-fikrah islam dan menegakkan amar
                                    makruf nahi munkar dalam menggapai ridha Allah. FSI Faterna Unand memiliki tujuan
                                    membentuk insan akademis yang professional, kritis, kreatif dan inovatif serta membentuk
                                    Aktivis Da’wah Kampus ( ADK ) yang berkualitas sesuai dengan kafaahnya demi terwujudnya
                                    kampus yang bernuansa islami yang merupakan bagian dari unit kegiatan mahasiswa fakultas
                                    perternakan. FSI Faterna Unand adalah unit kegiatan yang mewadahi seluruh mahasiswa
                                    muslim yang ada di fakultas peternakan. FSI Faterna Unand memiliki berbagai kegiatan
                                    dari skala harian, mingguan, bulanan, tahunan dan kondisional yang ditanggungjawabkan
                                    oleh 1 orang ketua umum, 1 orang ketua keputrian, 1 orang sekretaris, 1 orang bendahara,
                                    enam orang koordinator bidang, dan tujuh orang koordinator bidang putri.

                                </p>

                            </div>
                        </div>
                        <div class="row mb-3"><strong>9. ACADEMIA YOUNG ENTREPRENEUR (AYE)</strong></div>
                        <div class="row mb-3">

                            <div class="col-lg-6  pt-lg-0" style="text-align: justify">

                                <p>
                                  Academia Young Entrepreneur atau disingkat dengan nama AYE merupakan salah satu unit kegiatan mahasiswa yang berada di bawah naungan Fakultas Peternakan Universitas. UKMF ini bergerak dibidang Kewirausahaan. AYE menjadi salah satu wadah bagi mahasiswa untuk mengembangkan softskill dibidang bisnis dan wirausaha. AYE termasuk UKMF termuda di Fakultas Peternakan, yang dibentuk pada tahun 2019. Tujuan AYE yaitu sebagai wdah berhimpung seluruh mahasiswa wirausahawan/ti Fakultas Peternakan Universitas Andalas, mengembangkan minat wirausaha mahasiswa Fakultas Peternakan Universitas Andalas, membangun jiwa kekeluargaan sesama anggota dan mengatasi masalah ekonomi anggita, membina anggota untuk menjadi mahasiswa yang tekun dan ulet serta kritis terhadapa perekonomian masyarakat, khususnya dunia peternakan.
                                </p>

                            </div>
                            <div class="col-lg-6 d-flex justify-content-center align-items-center">

                                <img width="400" src="{{ asset('assets/img/aye.png') }}" alt="image">

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
    </div>
@endsection