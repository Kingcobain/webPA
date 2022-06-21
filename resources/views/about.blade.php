@extends('layouts.main')

@section('container')
<body>
    <section class="bg-cream">
        <div class="container">
            <div class="row my-5">
              <h2 class="mt-0 mb-4 text-center">OUR TEAM</h2>
              <div class="row row-cols-1 row-cols-md-4 g-3 justify-content-md-center">
                <div class="col">
                  <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <img src="img/h.png" class="card-img-top" alt="rafi">
                    <div class="card-body">
                      <h5 class="card-title text-center">Rafi Uletta Giovanni</h5>
                      <p class="card-text text-center">Web Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <img src="img/c.png" class="card-img-top" alt="rafi">
                    <div class="card-body">
                      <h5 class="card-title text-center">Cliff Anthony Tasliman</h5>
                      <p class="card-text text-center">Game Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <img src="img/a.png" class="card-img-top" alt="rafi">
                    <div class="card-body">
                      <h5 class="card-title text-center">Nabil Zain</h5>
                      <p class="card-text text-center">Content Designer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
</body>
@endsection