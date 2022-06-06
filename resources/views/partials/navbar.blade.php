<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow-lg" style="--bs-bg-opacity: .9;">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/img/estudylogo.png" alt="" width="120" height="24" class="d-inline-block align-text-top">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "game") ? 'active' : '' }}" href="/game">Games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "category") ? 'active' : '' }}" href="/category">Category</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>