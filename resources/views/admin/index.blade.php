@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-lg-8 py-5">
            <h3>Halama Dasboard Admin</h3>
            <p>Selamat Datang Di Halama Dasboard Admin</p>

            <div class="mb-2">
              <a href="/blog" class="text-decoration-none ">Kelola Artikel</a>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/haidan-RhkbHU14MoA-unsplash.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Blog Artikel</h5>
                          <p class="card-text">Atur dan kelola artikel kegiatan pesantren</p>
                          <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/haidan-RhkbHU14MoA-unsplash.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Foto Kegiatan</h5>
                          <p class="card-text">Atur dan kelola foto kegiatan pesantren</p>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                  <div class="card shadow-sm rounded-3 border-0">
                      <img src="{{ asset('assets/haidan-RhkbHU14MoA-unsplash.jpeg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Video Kegiatan</h5>
                        <p class="card-text">Atur dan kelola foto kegiatan pesantren</p>
                        <a href=" {{route('video') }}" class="btn btn-primary">Detail</a>
                      </div>
                    </div>
              </div>
            </div>
        </div>
    </section>
@endsection