@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-lg-8">
             <h4>Halaman Blog Artikel</h4>
            
             <a href="{{ route('blog.create') }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Photo</a>


             @if (session()->has('succes'))
                 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{ session('succes') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="close"></button>
                </div>

             @endif

             @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             @endif 
             <div class="table-responsive">
                <table class="table table-bordered py-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1 ;
                    @endphp
                    <tbody>
                        @foreach ($photos as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ asset('storage/photo/' . $item->image) }}" alt="" width="150px" height="100px">
                            </td>
                            <td>
                                {{ $item->judul }}
                            </td>
                            <td>
                                <a href="" class="btn btn-warning" data-bs-target="#editModal{{ $item->id }}" data-bs-toggle="modal">Edit</a>
                                <form action="{{ route('photo.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>   

                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="editModalLabel">Modal Edit</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('photo.update', $item->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                    
                                        <div class="form-group mb-3">
                                            <label for="">Pilih Photo</label>
                                            <div class="col-lg-4">
                                                <img src="{{ asset('storage/photo/' . $item->image) }}" alt="" width="150px" height="100px">
                                            </div>
                                            <input type="hidden" name="old_image" value="{{ $item->image }}">
                                            <input type="file" name="image" id="" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Nama Kegiatan</label>
                                            <input type="text" name="judul" id="" class="form-control" value="{{ $item->judul }}">
                                        </div>
                    
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    

                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </section>

    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Upload</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">Pilih Photo</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nama Kegiatan</label>
                        <input type="text" name="judul" id="" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection