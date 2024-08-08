  <section>
      <div class="top-header">
          <div class="content-1">
              <i class="ri-global-line"></i>
              <p>secrecrutingagencyuk.com</p>
          </div>
          <div class="content-2">
              <i class="ri-map-pin-2-fill"></i>
              <p>Brewery Road, London, United Kingdom</p>
          </div>
          <div class="content-3">
              <i class="ri-mail-fill"></i>
              <p>info@secrecrutingagencyuk.com</p>
          </div>

          <div class="socials">
              <i class="ri-twitter-fill"></i>
              <i class="ri-facebook-circle-fill"></i>
              <i class="ri-pinterest-fill"></i>
          </div>

      </div>
  </section>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
              aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#"><img src="{{ asset('frontend/images/logo.png') }}"
                      alt=""></a>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('about') }}">About Us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('services') }}">Services </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                  </li>
              </ul>
              <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Login</button>
              </form>
          </div>
      </div>
  </nav>
