@extends('layout.adminlayout')

@section('contentadmin')

        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Beasiswa</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('addbeasiswa')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>   Tambah Daftar Beasiswa</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Link Beasiswa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allbeasiswa as $beasiswa)
                            <tr>
                                <td>{{ $beasiswa->judul }}</td>
                                <td>{{ $beasiswa->tanggal }}</td>
                                <td><a href="{{ $beasiswa->link }}" target="_blank">{{ $beasiswa->link }}</a></td>
                                <td>
                                    <a href="{{ route('delete-beasiswa',['id'=>$beasiswa->id]) }}" class="btn btn-danger btn-sm mt">Hapus</a>
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

