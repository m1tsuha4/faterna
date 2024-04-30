@extends('layout.adminlayout')

@section('contentadmin')

     <!-- Begin Page Content -->
     <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Faterna Dalam Angka</h1>
            </div>

            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('editoverview')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Perbarui Data</a>
            </div>
            <div class="card-body">
            <div class="mb-3">
                            <label for="mahasiswa" class="form-label">Jumlah Mahasiswa</label>
                            <input value="{{ $overview->mahasiswa ?? '1'}}" type="number" name="jumlah_mahasiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="mahasiswa" class="form-label">Jumlah Prodi</label>
                            <input value="{{ $overview->prodi ?? '1'}}" type="number" name="jumlah_prodi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="mahasiswa" class="form-label">Jumlah Dosen</label>
                            <input value="{{ $overview->dosen ?? '1'}}" type="number" name="jumlah_dosen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="mahasiswa" class="form-label">Jumlah Laboratorium</label>
                            <input value="{{ $overview->labor ?? '1'}}" type="number" name="jumlah_lab" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                        </div>
            </div>
        </div>


            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection
