@extends('layouts.main')

@section('container')

    <div class="container-fluid">
        <div class="row py-3 text-center">
            <h2>{{ $title }}</h2>
        </div>
    </div>
    

    <div class="container-fluid">
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    @if ($posts->count())
    <section class="d-flex justify-content-center">
        <div class="card mb-3">
            {{-- @if ($posts[0]->image)
                <div style="max-height: 400px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/600x200?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif --}}
            @if ($posts[0]->video)
                <video height="300" controls>
                    <source src="{{ asset('storage/' . $posts[0]->video) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                </video>
            @else
                <img src="https://source.unsplash.com/600x200?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h4 class="card-title">{{ $posts[0]->title }}</h4>
                <p>
                    <small class="text-muted">
                        By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ optional($posts[0]->category)->slug }}" class="text-decoration-none">{{ optional($posts[0]->category)->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">View more..</a>

            </div>
        </div>
    </section>
    

    <div class="container mb-5">
        <div class="row">
            @foreach($posts->skip(1) as $post)
                <div class="col-md-4 mb-3 ">
                    <div class="card ">
                        <div class="position-absolute px-2 py-2 " style="background-color: rgba(0, 0, 0, 0.4)"><a href="/posts?category={{ optional($post->category)->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
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
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">View More...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>

    @else

    <p class="text-center fs-4">No Post Found.</p>

    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
    
@endsection