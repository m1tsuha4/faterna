@extends('layout.adminlayout')

@section('contentadmin')

     <!-- Begin Page Content -->
     <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Kalender Akademik</h1>
            </div>

            <div class="container">
                <div class="col-sm-12">
                    <form action="/addkalender" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="file" name="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
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
