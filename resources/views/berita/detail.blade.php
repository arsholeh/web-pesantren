@extends('layouts.layouts')

@section('content')
    <section id="detail" class="mt-5">
        <div class="container ">
            <div class="d-flex"><a href="/" class="text-decoration-none list-unstyled">Home</a><a href="/berita">/Berita</a></div>
            <img src="{{  asset('storage/artikel/' . $artikel->image) }}" alt="" class="mt-1" width="600px" height="450px">
            <div class="konten-berita">
              <p class="mb-3 text-secondary">{{ $artikel->created_at }}</p>
              <h4 class="fw-bold mb-3">{{ $artikel->judul }}</h4>
              <p class="text-secondary">#Pesantrenmodern</p>
              <p>{{ $artikel->desc }}</p>
            </div>  
        </div>
    </section>
@endsection