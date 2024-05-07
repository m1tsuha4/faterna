@extends('layout.adminlayout')

@section('contentadmin')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Berita</h1>
                    </div>

                    <div class="container">
                        <div class="col-sm-12">
                            <form action="/editberita/{{ $berita->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                              <!--Image-->
                                <div>
                                    <div class="mb-4 d-flex justify-content-center">
                                        @if($berita->file)
                                            <img id="selectedImage" src="{{ asset('storage/berita/'.$berita->file) }}"
                                                 alt="example placeholder" style="width: 50%;" />
                                        @else
                                            <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                                 alt="example placeholder" style="width: 50%;" />
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn btn-primary btn-rounded">
                                            <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                            <input type="file" name="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                        </div>
                                    </div>
                                </div><br>
                                <!-- ini untuk kategori berita -->
                                <div class="input-group">
                                <label class="input-group-text text-bg-primary"
                                    for="inputGroupSelect01">Kategori</label>
                                    <select class="form-select" name="kategori" id="inputGroupSelect01">
                                        <option value="Berita" {{ $berita->kategori === 'Berita' ? 'selected' : '' }}>Berita</option>
                                        <option value="Informasi Event" {{ $berita->kategori === 'Informasi Event' ? 'selected' : '' }}>Informasi Event</option>
                                        <option value="Kiprah Civitas Akademika" {{ $berita->kategori === 'Kiprah Civitas Akademika' ? 'selected' : '' }}>Kiprah Civitas Akademika</option>
                                        <option value="Pengumuman" {{ $berita->kategori === 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                                        <option value="Duka Cita" {{ $berita->kategori === 'Duka Cita' ? 'selected' : '' }}>Duka Cita</option>
                                    </select>
                                </div> <br>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{ $berita->judul }}"">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="15">{{ $berita->deskripsi }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

 @endsection
