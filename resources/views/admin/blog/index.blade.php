@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-lg-8">
             <h4>Halaman Blog Artikel</h4>
            
             <a href="{{ route('blog.create') }}" class="btn btn-primary">Buat Artikel</a>


             @if (session()->has('succes'))
                 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{ session('succes') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="close"></button>
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
                        @foreach ($artikels as $artikel)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src = "{{ asset('storage/artikel/' . $artikel->image) }}" alt="" width="150px" height="100px">
                                </td>
                                <td>
                                    {{ $artikel->judul }}
                                </td>
                                <td>
                                    <a href="{{ route('blog.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('blog.destroy', $artikel->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </section>
@endsection