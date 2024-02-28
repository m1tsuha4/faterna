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
                                <th>Judul</th>
                                <th>File</th>
                                <th>Tanggal Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allKalender as $kalender)
                            <tr>
                                <td>{{ $kalender->judul }}</td>
                                <td><a href="{{ asset('storage/kalender/' . $kalender->file) }}" target="_blank">{{ $kalender->file }}</a></td>
                                <td>{{ $kalender->created_at }}</td>
                                <td>
                                    <a href="{{route('delete-kalender',['id' => $kalender->id])}}" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        </div>

 @endsection
