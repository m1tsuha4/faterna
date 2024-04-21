@extends('layout.adminlayout')

@section('contentadmin')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Dosen</h1>
                    </div>

                    <div class="container">
                        <div class="col-sm-12">
                            <form action="/addosen" method="post" enctype="multipart/form-data">
                                @csrf
                              <!--Image-->
                              <div>
                                    <div class="mb-4 d-flex justify-content-center">
                                        <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                        alt="example placeholder" style="width: 25%;" />
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn btn-primary btn-rounded">
                                            <label class="form-label text-white m-1" for="customFile1">Pilih Foto</label>
                                            <input type="file" name="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                        </div>
                                    </div>
                                </div>
                            <div class="mb-3">
                                <label  for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="">
                            </div>
                            <div class="mb-3">
                                <label  for="" class="form-label">NIDN</label>
                                <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="">
                            </div>
                            <div class="mb-3">
                                <label  for="" class="form-label">Departemen</label>
                                <input type="text" name="departemen" class="form-control" id="exampleInputEmail1" aria-describedby="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="">
                            </div>

                            <div class="input-group">
                                <label class="input-group-text text-bg-primary"
                                    for="inputGroupSelect01">Prodi</label>
                                <select class="form-select" name="prodi" id="inputGroupSelect01">
                                    <option value="S1-Padang" selected>S1-Padang</option>
                                    <option value="S1-Payakumbuh">S1-Payakumbuh</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div><br>

                            <div class="input-group">
                                <label class="input-group-text text-bg-primary"
                                    for="inputGroupSelect01">Jabatan Akademik</label>
                                <select class="form-select" name="jabatan_akademik" id="inputGroupSelect01">
                                    <option value="Guru Besar" selected>Guru Besar</option>
                                    <option value="Lektor Kepala">Lektor Kepala</option>
                                    <option value="Asisten Ahli">Asisten Ahli</option>
                                    <option value="Lektor">Lektor</option>
                                    <option value="Tendik">Tendik</option>
                                </select>
                            </div><br>
                            <div class="mb-3">
                                <label for="" class="form-label">Edukasi S1</label>
                                <textarea class="form-control" id="deskripsi" name="edukasi_s1" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Edukasi S2</label>
                                <textarea class="form-control" id="deskripsi" name="edukasi_s2" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Edukasi S3</label>
                                <textarea class="form-control" id="deskripsi" name="edukasi_s3" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Link Sinta</label>
                                <textarea class="form-control" id="deskripsi" name="publikasi" rows="1"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Link Scopus</label>
                                <textarea class="form-control" id="deskripsi" name="penelitian" rows="1"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Link Google Scholar</label>
                                <textarea class="form-control" id="deskripsi" name="scholar" rows="1"></textarea>
                            </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

 @endsection
