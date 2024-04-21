@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Conference</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addconference')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah Conference</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Tanggal Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allConference as $conf)
                            <tr>
                                <td>{{ $conf->judul }}</td>
                                <td>{{ $conf->tanggal }}</td>
                                <td><a href="{{ asset('storage/conference/' . $conf->file) }}" target="_blank">{{ $conf->file }}</a></td>
                                <td>{{ $conf->created_at }}</td>
                                <td>
                                    <a href="{{route('delete-conference',['id' => $conf->id])}}" class="btn btn-danger btn-sm">Hapus</a>
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
