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


      <div class="container mb-5">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-3 ">
                    <div class="card ">
                        {{-- @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif --}}
                        @if ($post->video)
                            <video controls>
                                <source src="{{ asset('storage/' . $post->video) }}" class="img-fluid">
                            </video>
                        @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                        <div class="card-body">
                            <p class="card-title fw-bold">{{ $post->title }}</p>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                                    <br>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">View More...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>

    

</main>

@endsection




