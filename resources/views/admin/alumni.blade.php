@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Alumni</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addalumni')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah Daftar Alumni</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>Wisuda</th>
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allalumni as $alumni)
                            <tr>
                                <td>{{ $alumni->tahun }}</td>
                                <td>{{ $alumni->wisuda }}</td>
                                <td><a href="{{ asset('storage/alumni/' . $alumni->file) }}" target="_blank">{{ $alumni->file }}</a></td>
                                <td>
                                    <a href="{{ route('delete-alumni',['id'=>$alumni->id]) }}" class="btn btn-danger btn-sm">Hapus</a>
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

