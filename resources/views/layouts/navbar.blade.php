
<nav class="navbar text-dark navbar-expand-lg fixed-top bg-opacity-0 " id="navbar">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="assets/ic-logo.png" alt="nav-logo" height="55" width="55">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link"  href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Prestasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Kontak</a>
          </li>
        </ul>
        <div class="d-flex">
            @auth
              <form action="/logout" method="POST">
                @csrf
                  <button class="btn btn-outline-danger btn-danger text-white" type="submit">Logout</button>
              </form>
              @else   
                <button class="btn btn-outline-danger btn-danger text-white" type="submit">Register</button>
            @endauth
        </div>
      </div>
    </div>
  </nav>