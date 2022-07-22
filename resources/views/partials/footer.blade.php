

  {{-- <section>
    <div class="img-fluid position-absolute d-none d-lg-block bottom-0">
      <img src="img/vectorbawah.png" alt="vectorbawah.png" height="220px" width="1519px">
    </div>
  </section> --}}

<section class="container-fluid position-relative" style="background-color: #590696">

  
  {{-- <section class="container">
    <div class="card rounded-0" style="background-color:aqua">
      <div class="card-header"></div>
    </div>  
  </section> --}}

  <div class="container">
    <footer class="py-2 mt-3">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/" class="nav-link {{ ($active === "home") ? 'active' : '' }} px-2 text-white">Home</a></li>
        <li class="nav-item"><a href="/about" class="nav-link {{ ($active === "about") ? 'active' : '' }} px-2 text-white">Team</a></li>
        <li class="nav-item"><a class="nav-link {{ ($active === "menu") ? 'active' : '' }} px-2 text-white" href="/menu">About Us</a></li>
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }} text-white">Login</a>
            </li>
        @endauth
      </ul>
      <p class="text-center text-white">&copy; 2022 Estudy</p>
    </footer>
  </div>
</section>

