@extends('layout.adminlayout')

@section('contentadmin')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Beasiswa</h1>
                    </div>

                    <div class="container">
                        <div class="col-sm-12">
                            <form action="/addbeasiswa" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Link</label>
                                <input type="text" name="link" class="form-control" id="exampleInputEmail1" aria-describedby="">
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
