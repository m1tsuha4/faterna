@extends('layout.adminlayout')

@section('contentadmin')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Daftar Alumni</h1>
                    </div>

                    <div class="container">
                        <div class="col-sm-12">
                            <form action="/addalumni" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Tahun</label>
                                <input type="text" name="tahun" class="form-control" id="exampleInputEmail1" aria-describedby="">
                            </div>
                            <div class="mb-3">
                            <label  for="" class="form-label">Wisuda</label>
                            <div class="input-group">
                                <label class="input-group-text text-bg-primary"
                                    for="inputGroupSelect01">Wisuda</label>
                                <select class="form-select"name="wisuda" id="inputGroupSelect01">
                                    <option selected>Pilih Wisuda</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                    <option value="VI">VI</option>
                                    <option value="VII">VII</option>
                                    <option value="VIII">VIII</option>
                                </select>
                            </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Upload File</label>
                                <input type="file" name="file" class="form-control" id="inputGroupFile02">
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
