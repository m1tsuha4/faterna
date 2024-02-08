@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kalender Akademik</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addkalender')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Perbarui Kalender</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tahun Ajaran</th>
                                <th>Tanggal Upload</th>
                                <th>link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="" target="_blank"></a></td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>

 @endsection
