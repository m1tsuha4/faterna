@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Berita</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addberita')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah Berita</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal Upload</th>
                                <th>Author</th>
                                <th>Kategori Berita</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allberita as $berita)
                            <tr>
                                    <td>{{ $berita->judul }}</td>
                                    <td>{{ $berita->tanggal }}</td>
                                    <td>{{ $berita->author }}</td>
                                    <td>{{ $berita->kategori }}</td>
                                    <td>
                                        <a href="{{route('editberita',['id' => $berita->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{route('delete-berita',['id' => $berita->id])}}" class="btn btn-danger btn-sm  ">Hapus</a>
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
