@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dosen</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addosen')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah Dosen</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Departemen</th>
                                <th>Email</th>
                                <th>Edukasi</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($alldosen as $dosen)
                            <tr>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->departemen }}</td>
                                <td>{{ $dosen->email }}</td>
                                <td>
                                    S1 {{ $dosen->edukasi_s1 }} <br>
                                    S2 {{ $dosen->edukasi_s2 }} <br>
                                    S3 {{ $dosen->edukasi_s3 }} <br>
                                </td>
                                <td>
                                    sinta : {{ $dosen->link_sinta }} <br>
                                    scopus : {{ $dosen->link_scopus }} <br>
                                    scholar : {{ $dosen->link_scholar }} <br>
                                </td>
                                <td>
                                    <a href="{{route('editdosen',['id' => $dosen->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{route('delete-dosen',['id' => $dosen->id])}}" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>

 @endsection
