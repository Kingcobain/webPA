@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="row my-5">
                <h2 class="text-center">{{ $post->title }}</h2>
            </div>

            <section class="bg-white">
                <div class="container">
        
                    <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }} " class="text-decoration-none">{{ $post->category->name }}</a></p>
        
                    {{-- @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif --}}

                    @if ($post->video)
                        <div style="max-height: 400px;">
                            <video height="400" controls>
                                <source src="{{ asset('storage/' . $post->video) }}" class="img-fluid">
                            </video>
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
        
                    <div class="mt-3">
                        <a href="/posts" class="text-decoration-none">Back To Posts</a>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

    


@endsection