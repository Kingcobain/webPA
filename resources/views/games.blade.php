@extends('layouts.main')

@section('container')

<div class="container">
    <header class="text-center py-3">
        <h3>{{ $title }}</h3>
    </header>

    <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
        <div class="col">
            <div class="card h-100">
                <div class="container-game">
                    <img src="img/matrixgame.jpg" alt="postergame" class="image" style="width:100%">
                    <div class="middle">
                        <div class="btn-button-game">
                            <a href="/game" class="btn btn-outline-dark btn-lg "><i class="bi bi-play-circle " style="font-size: 6rem;"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <h5 class="card-title text-center">Imath</h5>
                
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="container-game">
                    <img src="img/game2.jpg" alt="postergame" class="image" style="width:100%">
                    <div class="middle">
                        <div class="btn-button-game">
                            <a href="/game" class="btn btn-outline-dark btn-lg"><i class="bi bi-play-circle" style="font-size: 6rem;"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <h5 class="card-title text-center">Tebak Peluang</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/game3.jpg" class="card-img-top" alt="postergame">
                <div class="card-body">
                <h5 class="card-title text-center">Coming Soon</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/game4.jpg" class="card-img-top" alt="postergame">
                <div class="card-body">
                <h5 class="card-title text-center">Coming Soon</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/game5.jpg" class="card-img-top" alt="postergame">
                <div class="card-body">
                <h5 class="card-title text-center">Coming Soon</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="img/game6.jpg" class="card-img-top" alt="postergame">
                <div class="card-body">
                <h5 class="card-title text-center">Coming Soon</h5>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection