<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="/" class="nav-link {{ ($active === "home") ? 'active' : '' }} px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="/about" class="nav-link {{ ($active === "about") ? 'active' : '' }} px-2 text-muted">Team</a></li>
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }} text-muted">Login</a>
          </li>
      @endauth
    </ul>
    <p class="text-center text-muted">&copy; 2022 Estudy</p>
  </footer>
</div>