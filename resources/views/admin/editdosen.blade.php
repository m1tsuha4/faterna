@extends('layout.adminlayout')

@section('contentadmin')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Dosen</h1>
                    </div>

                    <div class="container">
                        <div class="col-sm-12">
                            <form action="/editdosen/{{ $dosen->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                              <!--Image-->
                              <div>
                                    <div class="mb-4 d-flex justify-content-center">
                                        @if($dosen->file)
                                            <img id="selectedImage" src="{{ asset('storage/dosen/'.$dosen->file) }}"
                                                 alt="example placeholder" style="width: 50%;" />
                                        @else
                                            <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                            alt="example placeholder" style="width: 25%;" />
                                        @endif
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
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="" value="{{ $dosen->nama }}">
                                </div>
                                <div class="mb-3">
                                    <label  for="" class="form-label">NIDN</label>
                                    <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label  for="" class="form-label">Departemen</label>
                                    <input type="text" name="departemen" class="form-control" id="exampleInputEmail1" aria-describedby="" value="{{ $dosen->departemen }}">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="" value="{{ $dosen->email }}">
                                </div>
                                <div class="input-group">
                                    <label class="input-group-text text-bg-primary"
                                        for="inputGroupSelect01">Jabatan Akademik</label>
                                    <select class="form-select"name="jabatan" id="inputGroupSelect01">
                                        <option selected>Select</option>
                                        <option value="Guru Besar">Guru Besar</option>
                                        <option value="Lektor Kepala">Lektor Kepala</option>
                                        <option value="Asisten Ahli">Asisten Ahli</option>
                                        <option value="Lektor">Lektor</option>
                                        <option value="Tendik">Tendik</option>
                                    </select>
                                </div><br>
                                <div class="mb-3">
                                    <label for="" class="form-label">Edukasi S1</label>
                                    <textarea class="form-control" id="deskripsi" name="edukasi" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Edukasi S2</label>
                                    <textarea class="form-control" id="deskripsi" name="edukasi2" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Edukasi S3</label>
                                    <textarea class="form-control" id="deskripsi" name="edukasi3" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Link Sinta</label>
                                    <textarea class="form-control" id="deskripsi" name="publikasi" rows="5">{{ $dosen->publikasi }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Link Scopus</label>
                                    <textarea class="form-control" id="deskripsi" name="penelitian" rows="5">{{ $dosen->edukasi }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Link Google Scholar</label>
                                    <textarea class="form-control" id="deskripsi" name="scholar" rows="5">{{ $dosen->penelitian }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

 @endsection
