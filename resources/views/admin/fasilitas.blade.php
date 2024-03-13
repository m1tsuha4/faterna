@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Fasilitas</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addfasilitas')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah Data</a>
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
                        @foreach($allFasilitas as $fasilitas)
                            <tr>
                                <td>{{ $fasilitas->nama }}</td>
                                <td>{{ $fasilitas->deskripsi }}</td>
                                <td><a href="{{ asset('storage/fasilitas/' . $fasilitas->file) }}" target="_blank">{{ $fasilitas->file }}</a></td>
                                <td>{{ $fasilitas->created_at }}</td>
                                <td>
                                    <a href="{{route('delete-fasilitas',['id' => $fasilitas->id])}}" class="btn btn-danger btn-sm">Hapus</a>
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
