@extends('layouts.layouts')

@section('content')
<section id="berita" class="mt-5">
    <div class="container py-5">
      <div class="header-berita">
        <h2 class="text-center">Berita Kegiatan Pondok Pesantren</h2>
      </div>
  
      <div class="row py-5">
        @foreach ($artikels as $item)
          <div class="col-lg-4">
            <div class="card border-0">
              <img src="{{  asset('storage/artikel/' . $item->image) }}" alt="">
              <div class="konten-berita">
                <p class="mb-3 text-secondary">{{ $item->created_at }}</p>
                <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                <p class="text-secondary">#Pesantrenmodern</p>
               <a href="/berita/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkanya</a>
             </div>
            </div>     
          </div>   
        @endforeach
      </div>
  
    </div>
  </section>
@endsection