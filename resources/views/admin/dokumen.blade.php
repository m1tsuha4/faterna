@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dokumen</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addokumen')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah Dokumen</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal Upload</th>
                                <th>link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($alldokumen as $dokumen)
                            <tr>
                                <td>{{ $dokumen->judul }}</td>
                                <td>{{ $dokumen->tanggal }}</td>
                                <td><a href="{{ asset('storage/dokumen/' . $dokumen->file) }}" target="_blank">{{ $dokumen->file }}</a></td>
                                <td>
                                    <a href="{{route('delete-dokumen',['id' => $dokumen->id])}}" class="btn btn-danger btn-sm">Hapus</a>
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
