@extends('layouts.layouts')

@section('content')
<section id="berita" class="mt-5">
    <div class="container py-5">
      <div class="header-berita">
        <h2 class="text-center">Berita Kegiatan Pondok Pesantren</h2>
      </div>
  
      <div class="row py-5">
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="{{ asset('assets/il-berita-01.png') }}" alt="">
            <div class="konten-berita">
              <p class="mb-3 text-secondary">21-04-2024</p>
              <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al Hijrah</h4>
              <p class="text-secondary">#Pesantrenmodern</p>
              <a href="" class="text-decoration-none text-danger">Selengkanya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="{{ asset('assets/il-berita-01.png') }}" alt="">
            <div class="konten-berita">
              <p class="mb-3 text-secondary">21-04-2024</p>
              <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al Hijrah</h4>
              <p class="text-secondary">#Pesantrenmodern</p>
              <a href="" class="text-decoration-none text-danger">Selengkanya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="{{ asset('assets/il-berita-01.png') }}" alt="">
            <div class="konten-berita">
              <p class="mb-3 text-secondary">21-04-2024</p>
              <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al Hijrah</h4>
              <p class="text-secondary">#Pesantrenmodern</p>
              <a href="" class="text-decoration-none text-danger">Selengkanya</a>
            </div>
          </div>
        </div>
      </div>
  
      <div class="footer-berita text-center">
        <a href="" class="btn btn-outline-danger">Berita Lainya</a>
      </div>
    </div>
  </section>
@endsection