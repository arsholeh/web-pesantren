@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-lg-8">
            <div class="d-flex">
                <a href="{{ route('blog') }}" class="text-decoration-none">Blog</a> 
             </div>
             <h4>Halaman Buat Artikel</h4>

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label for="judul">Masukan Judul Kegiatan</label>
                    <input type="text" class="form-control" @error('judul')
                        is-invalid
                    @enderror name="judul" id="judul" value="{{ old('judul') }}"> 

                    @error('judul')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="image">Pilih Foto Kegiatan</label>
                    <input type="file" class="form-control" @error('image')
                        is-invalid
                    @enderror name="image" id="image">

                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="desc">Artikel Berita</label>
                    <textarea name="desc" id="summernote">
                        {{ old('desc') }}
                    </textarea>

                    @error('desc')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mb-3   ">Simpan</button>
            </form>
        </div>
    </section>
@endsection