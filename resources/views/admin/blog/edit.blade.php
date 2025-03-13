@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-lg-8">
             <h4>Halaman Edit Artikel</h4>
             
             <form action="{{ route('blog.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label for="judul">Masukan Judul Kegiatan</label>
                    <input type="text" class="form-control" @error('judul')
                        is-invalid
                    @enderror name="judul" id="judul" value="{{ old('judul', $artikel->judul) }}"> 

                    @error('judul')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="image">Pilih Foto Kegiatan</label>
                    <input type="hidden" name="old_image" id="" value="{{ $artikel->image }}">
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
                        {{ $artikel->desc }}
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