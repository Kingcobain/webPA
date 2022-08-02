@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <div class="row my-5">
                <h2 class="text-center">{{ $post->title }}</h2>
            </div>

            <section class="bg-white">
                <div class="container">
        
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all posts </a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                    </form>

                    {{-- @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif --}}

                    @if ($post->video)
                        <div class="my-3" style="height:auto; width:100%">
                            <video controls>
                                <source src="{{ asset('storage/' . $post->video) }}" class="img-fluid">
                            </video>
                        </div>
                    {{-- @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> --}}
                    @endif
                    <div class="pt-5">
                        <p class="mt-3">By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }} " class="text-decoration-none">{{ $post->category->name }}</a></p>
            
    
                        <article class="my-3 fs-5">
                            {!! $post->body !!}
                        </article>
                    </div>
        
                </div>
            </section>

        </div>
    </div>
</div>

@endsection