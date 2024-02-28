@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Galeri</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addgallery')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah Foto</a>
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
                        @foreach($allGallery as $gallery)
                            <tr>
                                <td>{{ $gallery->judul }}</td>
                                <td>{{ $gallery->deskripsi }}</td>
                                <td><a href="{{ asset('storage/galeri/' . $gallery->file) }}" target="_blank">{{ $gallery->file }}</a></td>
                                <td>{{ $gallery->created_at }}</td>
                                <td>
                                    <a href="{{route('delete-galeri',['id' => $gallery->id])}}" class="btn btn-danger btn-sm">Hapus</a>
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
