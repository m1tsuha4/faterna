@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">SOP Layanan Publik</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addsop-ppid')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah SOP Layanan Publik</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>File</th>
                                <th>Tanggal Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allSop as $sop)
                            <tr>
                                <td>{{ $sop->judul }}</td>
                                <td><a href="{{ asset('storage/sop/' . $sop->file) }}" target="_blank">{{ $sop->file }}</a></td>
                                <td>{{ $sop->created_at }}</td>
                                <td>
                                    <a href="{{route('delete-sop-ppid',['id' => $sop->id])}}" class="btn btn-danger btn-sm">Hapus</a>
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
