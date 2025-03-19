@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-lg-8">
             <h4>Halaman Video Kegiatan</h4>
            
             <a href="{{ route('blog.create') }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahVideo">Tambah Video</a>


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
                            <th>Judul</th>
                            <th>Video</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1 ;
                    @endphp
                    <tbody>
                        @foreach ($videos as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                {{ $item->judul }}
                            </td>
                            <td>
                                <iframe width="250" height="150" 
                                src="https://www.youtube.com/embed/{{ $item->youtube_code }}" 
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </td>
                            <td>
                                <a href="" class="btn btn-warning" data-bs-target="#editVideo{{ $item->id }}" data-bs-toggle="modal">Edit</a>
                                <form action="{{ route('video.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>   

                        <div class="modal fade" id="editVideo{{ $item->id }}" tabindex="-1" aria-labelledby="editVideoLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="editModalLabel">Edit Video</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('video.update', $item->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_video" value="${{ $item->id }}">                  
                                        <div class="form-group mb-3">
                                            <label for="">Judul Video</label>
                                            <input type="text" name="judul" id="" class="form-control" value="{{ $item->judul }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Youtube Code</label>
                                            <input type="text" name="youtube_code" id="" class="form-control" value="{{ $item->youtube_code }}">
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

    <div class="modal fade" id="tambahVideo" tabindex="-1" aria-labelledby="tambahVideoLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="tambahVideoLabel">Modal Upload</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('video.store') }}" method="post" >
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Youtube_code</label>
                        <input type="text" name="youtube_code" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection