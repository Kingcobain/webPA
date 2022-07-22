@extends('layouts.main')

@section('container')

<main>

  <section>
    <div class="img-fluid position-absolute d-none d-lg-block top-0">
      <img src="img/vectorhome.png" alt="vectorhome.png" height="600px" width="1519px">
    </div>
  </section>

  <section class="py-3 text-start container-fluid mb-5 border rounded-end rounded-5 position-relative" style="background-color: #590696">
    <div class="row py-lg-5">
      <div>
        <div class="position-absolute end-0 top-0  d-none d-lg-block ">
          <picture>
            <img src="img/saly.png" class=" border-0 mt-5 " alt="saly" height="500px" width="600px">
          </picture>
        </div>
          
        <div class="container">
          <h1 class="fw-semibold fs-1 text-white">Easy learning with eSTUDY</h1>
          <h2 class="fw-semibold text-white">You can use it anywhere easily accessible.</h2>
          <p class="lead text-white">Fast, Interactive & Effective.</p>
          <p class="mt-5">
            <a href="/menu" class="btn btn-primary btn-lg mt-3" style="color: black">Get Started</a>
          </p>
        </div>
      </div>
    </div>    
  </section>

  <div class="album py-5 bg-white mb-3 ">
    <div class="container ">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
        <div class="col">
          <div class="card shadow-sm">
            <div class="bd-placeholder-img card-img-top" width="100%" height="225" role="video" focusable="false">
              <video width="100%" height="100%" poster="img/thumb.jpg" controls>
                <source src="{{ asset('storage/post-videos/VnD5jen2twnvuutS4QoD1oCiF1voWgFjZePjrluC.mp4') }}" alt="" class="img-fluid">
              </video>
            </div>
            <div class="card-body">
              <p class="card-text">Matriks Perkalian 3x3</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/posts" class="text-decoration-none btn btn-primary" style="color: black">View</a>
                </div>
                <small class="text-muted">10 views</small>
              </div>
            </div>
          </div>
        </div>

        

        <div class="col">
          <div class="card shadow-sm">
            <div class="bd-placeholder-img card-img-top" width="100%" height="225" role="video" focusable="false">
              <video width="100%" height="100%" poster="img/thumb2.jpg" controls>
                <source src="{{ asset('storage/post-videos/Nei4tlLxGnNUdf0MZzuMUsd6qGlLlPgOFprBUNIK.mp4') }}" alt="" class="img-fluid">
              </video>
            </div>
            <div class="card-body">
              <p class="card-text">Video Dummy</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/posts" class="text-decoration-none btn btn-primary" style="color: black">View</a>
                </div>
                <small class="text-muted">10 views</small>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card shadow-sm">
            <div class="bd-placeholder-img card-img-top" width="100%" height="225" role="video" focusable="false">
              <video width="100%" height="100%" poster="img/thumb3.jpg" controls>
                <source src="{{ asset('storage/post-videos/egflM4JlEVzfE2kz7K2Rp0A1fSYj6HZAixu7Aqee.mp4') }}" alt="" class="img-fluid">
              </video>
            </div>
            <div class="card-body">
              <p class="card-text">Video Dummy</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/posts" class="text-decoration-none btn btn-primary" style="color: black">View</a>
                </div>
                <small class="text-muted">10 views</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="bd-placeholder-img card-img-top" width="100%" height="225" role="video" focusable="false">
              <video width="100%" height="100%" poster="img/thumb4.jpg" controls>
                <source src="{{ asset('storage/post-videos/d5qkCPRiOz1EfEcKwix91MAl05Uqf0JdHq8ES7aK.mp4') }}" alt="" class="img-fluid">
              </video>
            </div>
            <div class="card-body">
              <p class="card-text">Video Dummy</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/posts" class="text-decoration-none btn btn-primary" style="color: black">View</a>
                </div>
                <small class="text-muted">10 views</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="bd-placeholder-img card-img-top" width="100%" height="225" role="video" focusable="false">
              <video width="100%" height="100%" poster="img/thumb5.jpg" controls>
                <source src="{{ asset('storage/post-videos/7n9T2XGO0NvziA4X7KuJTewFigDb7atUbv5tC8YF.mp4') }}" alt="" class="img-fluid">
              </video>
            </div>
            <div class="card-body">
              <p class="card-text">Video Dummy</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/posts" class="text-decoration-none btn btn-primary" style="color: black">View</a>
                </div>
                <small class="text-muted">10 views</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="bd-placeholder-img card-img-top" width="100%" height="225" role="video" focusable="false">
              <video width="100%" height="100%" poster="img/thumb6.jpg" controls>
                <source src="{{ asset('storage/post-videos/5pM5VJsSpvZdB7qiPTeVRqjrv4P5IzMymQeszd41.mp4') }}" alt="" class="img-fluid">
              </video>
            </div>
            <div class="card-body">
              <p class="card-text">Video Dummy</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/posts" class="text-decoration-none btn btn-primary" style="color: black">View</a>
                </div>
                <small class="text-muted">10 views</small>
              </div>
            </div>
          </div>
        </div>

        <br>
      </div>
    </div>
  </div>

</main>

@endsection




