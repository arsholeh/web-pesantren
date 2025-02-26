 @extends('layouts.layouts')
 
 
 @section('content')
     
 <section id="hero">
  <div class="container text-center text-white">
    <div class="hero-title fs-1 fw-bold">Selamat Datang <br>di pesantren Al-Hijrah</div>
    <p>Pondok Pesantren Modern dengan konsep Islam Kaffah</p>
  </div>
</section>

<section id="program" style="margin-top: -30px">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="bg-white rounded-3 p-3 d-flex align-items-center shadow">
          <h4> Pendidikan Berkualitas</h4>
          <img src="{{ asset('assets/ic-book.png') }}" height="40" width="40" alt="">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="bg-white rounded-3 p-3 d-flex align-items-center shadow">
          <h4> Pendidikan Berakhlak</h4>
          <img src="{{ asset('assets/ic-globe.png') }}" height="40" width="40" alt="">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="bg-white rounded-3 p-3 d-flex align-items-center shadow">
          <h4> Pendidikan Muamalah</h4>
          <img src="{{ asset('assets/ic-neraca.png') }}" height="40" width="40" alt="">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="bg-white rounded-3 p-3 d-flex align-items-center shadow">
          <h4> Pendidikan Teknologi</h4>
          <img src="{{ asset('assets/ic-komputer.png')}}" height="40" width="40" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="berita">
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

<section id="join" class="py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-6">
        <div class="d-flex align-items-center">
          <div class="stripe me-2"></div>
          <h5 class="text-danger">Daftar Santri</h5>
        </div>
        <h1>Gabung bersama kami, mewujudkan generasi rabbani</h1>
        <p>Pesantren Al Hijrah merupakan pesantren terbaik di jawa barat, dengan meluluskan santri dan menjadi ustadz terkemuka mendakwahkan di pelosok nusantara</p>
        <button class="btn btn-outline-danger">Register</button>
      </div>
      <div class="col-lg-6">
        <img src="{{ asset('assets/il-photo-04.png') }}" width="400" height="350" class="rounded-3" alt="">
      </div>
    </div>
  </div>
</section>

<section id="video" class="py-5">
  <div class="container py-5">
    <div class="text-center">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/A927ale9-vI?si=1e8DgaZkliPDDx1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section>
  <div class="container py-5">
    <div class="header-berita-video text-center">
      <h2 class="fw-boldx">Video Kegiatan Pondok Pesantren</h2>
    </div>
    <div class="row py-5">
      <div class="col-lg-4">
        {{-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/A927ale9-vI?si=1e8DgaZkliPDDx1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
        <img src="{{ asset('assets/il-photo-04.png') }}" width="400" height="350" class="rounded-3" alt="">
      </div>
      <div class="col-lg-4">
        {{-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/A927ale9-vI?si=1e8DgaZkliPDDx1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
        <img src="{{ asset('assets/il-photo-04.png') }}" width="400" height="350" class="rounded-3" alt="">
      </div>
      <div class="col-lg-4">
        {{-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/A927ale9-vI?si=1e8DgaZkliPDDx1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
        <img src="{{ asset('assets/il-photo-04.png') }}" width="400" height="350" class="rounded-3" alt="">
      </div>
    </div>
    <div class="footer-berita text-center">
      <a href="" class="btn btn-outline-danger">Berita Lainya</a>
    </div>
  </div>
</section>

<section id="" class="section-foto paralax">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <div class="stripe-putih me-2"></div>
        <h5 class="fw-bold text-white">Foto Kegiatan</h5>
      </div>
      <div>
        <a href="" class="btn btn-outline-light">Foto lainya</a>
      </div>
    </div>
    <div class="row py-3">
      <div class="col-lg-3 col-md-6 col-6">
        <img src="{{ asset('assets/il-photo-01.png') }}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-6">
        <img src="{{ asset('assets/il-photo-02.png') }}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-6">
        <img src="{{ asset('assets/il-photo-03.png') }}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-6">
        <img src="{{ asset('assets/il-photo-04.png') }}" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="text-center mt-5">
      <h3>Fasilitas Pesantren</h3>
    </div>
  <div class="row py-5 d-flex justify-content-around ">
    <div class="col-lg-2">
      <img src="{{ asset("assets/rumman-amin-6yidLh6hsqc-unsplash.jpeg") }}" alt="" width="200px" height="150px" class="rounded-4">
    </div>
    <div class="col-lg-2">
      <img src="{{ asset("assets/three-girls-veils-school-uniforms-stand-smiling-using-laptop-together-while-carrying-backpacks_8595-24851.jpeg") }}" alt="" width="200px" height="150px" class="rounded-4 mt-5">
    </div>
    <div class="col-lg-2">
      <img src="{{ asset("assets/v-hlMjYlPGvrU-unsplash.jpeg") }}" alt="" width="200px" height="150px" class="rounded-4 xx">
    </div>
    <div class="col-lg-2">
      <img src="{{ asset("assets/haidan-RhkbHU14MoA-unsplash.jpeg") }}" alt="" width="200px" height="150px" class="rounded-4 mt-5">
    </div>
    <div class="col-lg-2">
      <img src="{{ asset("assets/mhrezaa-IzzJeU6I7FI-unsplash.jpeg") }}" alt="" width="200px" height="150px" class="rounded-4">
    </div>                      
  </div>
  <div class="text-center">
    <a href="" class="btn btn-outline-danger mb-4">Fasilitas Lainya</a>
  </div>
 </div>
</section>


 @endsection

  

     