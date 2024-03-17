@extends('layout.adminlayout')

@section('contentadmin')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Fasilitas</h1>
                    </div>

                    <div class="container">
                        <div class="col-sm-12">
                        <form action="/add-fasilitas" method="post" enctype="multipart/form-data">
                            @csrf
                              <!--Image-->
                              <div>
                                    <div class="mb-4 d-flex justify-content-center">
                                        <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                        alt="example placeholder" style="width: 50%;" />
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn btn-primary btn-rounded">
                                            <label class="form-label text-white m-1" for="customFile1">Gambar Fasilitas</label>
                                            <input type="file" name="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                        </div>
                                    </div>
                                  <div class="mb-3">
                                      <label  for="nama" class="form-label">Nama Fasilitas</label>
                                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="">
                                  </div>
                                  <div class="mb-3">
                                      <label for="" class="form-label">Deskripsi</label>
                                      <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
                                  </div>
                                </div>
                                <br>

                                <div class="container d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

 @endsection
