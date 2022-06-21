@extends('layouts.main')

@section('container')

<main>

  <section class="py-5 text-start container mb-5">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 clearfix">
        <div class="w-50 float-end start-50 position-absolute top-50 end-0 translate-middle-y row py-sm-6 d-none d-lg-block ">
          <picture>
            <img src="img/saly.png" class="img-fluid border-0 mt-5 " alt="saly">
          </picture>
        </div>
        <h1 class="fw-semibold fs-1">Easy learning with eSTUDY</h1>
        <h2 class="fw-semibold">You can use it anywhere easily accessible.</h2>
        <p class="lead text-muted">Fast, Interactive & Effective.</p>
        <p>
          <a href="/menu" class="btn btn-primary my-2" style="color: black">Get Started</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
        
        <div class="col">
          <div class="card shadow-sm">
            <div class="bd-placeholder-img card-img-top" width="100%" height="225" role="video" focusable="false">
              <video width="100%" height="100%" controls>
                <source src="{{ asset('storage/post-videos/0VsivuzgjkS9amR8K2ZjtKF759DR9WfYLmOviQnW.mp4') }}" alt="" class="img-fluid">
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
              <video width="100%" height="100%" controls>
                <source src="{{ asset('storage/post-videos/uzuzIHvOxQZga8DInjTICf6daLA2zxZIu8SDODdj.mp4') }}" alt="" class="img-fluid">
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
              <video width="100%" height="100%" controls>
                <source src="{{ asset('storage/post-videos/vis6qHNnPKzSlp5FtTeUZo0QYFV9Jnm0BczTW4yK.mp4') }}" alt="" class="img-fluid">
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
              <video width="100%" height="100%" controls>
                <source src="{{ asset('storage/post-videos/0VsivuzgjkS9amR8K2ZjtKF759DR9WfYLmOviQnW.mp4') }}" alt="" class="img-fluid">
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
              <video width="100%" height="100%" controls>
                <source src="{{ asset('storage/post-videos/0VsivuzgjkS9amR8K2ZjtKF759DR9WfYLmOviQnW.mp4') }}" alt="" class="img-fluid">
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
              <video width="100%" height="100%" controls>
                <source src="{{ asset('storage/post-videos/0VsivuzgjkS9amR8K2ZjtKF759DR9WfYLmOviQnW.mp4') }}" alt="" class="img-fluid">
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
        
      </div>
    </div>
  </div>

  

</main>

@endsection