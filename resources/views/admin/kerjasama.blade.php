@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kerjasama</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addkerjasama')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah Kerjasama</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Lembaga</th>
                                <th>Logo</th>
                                <th>Jenis Kerjasama</th>
                                <th>Tanggal Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allKerjasama as $kerjasama)
                            <tr>
                                <td>{{ $kerjasama->judul }}</td>
                                <td><a href="{{ asset('storage/kerjasama/' . $kerjasama->file) }}" target="_blank">{{ $kerjasama->file }}</a></td>
                                <td>{{ $kerjasama->jenis }}</td>
                                <td>{{ $kerjasama->created_at }}</td>
                                <td>
                                    <a href="{{route('delete-kerjasama',['id' => $kerjasama->id])}}" class="btn btn-danger btn-sm">Hapus</a>
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
