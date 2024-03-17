@extends('layout.adminlayout')

@section('contentadmin')

     <!-- Begin Page Content -->
     <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Faterna Dalam Angka</h1>
            </div>

            <div class="container">
                <div class="col-sm-12">
                    <form action="/edit-overview" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="mahasiswa" class="form-label">Jumlah Mahasiswa</label>
                            <input type="number" name="jumlah_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="mahasiswa" class="form-label">Jumlah Prodi</label>
                            <input type="number" name="jumlah_prodi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="mahasiswa" class="form-label">Jumlah Dosen</label>
                            <input type="number" name="jumlah_dosen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="mahasiswa" class="form-label">Jumlah Laboratorium</label>
                            <input type="number" name="jumlah_lab" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection
