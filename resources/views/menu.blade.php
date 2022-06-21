@extends ('layouts.main')

@section('container')

    {{-- <section class="bg-white">
        <div class="container">
            <div class="row my-5">
                <h2 class="mt-0 mb-4 text-center">Menu</h2>
                <div class="row row-cols-1 row-cols-md-4 g-3 justify-content-md-center">

                    <div class="col">
                        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                            <img src="img/rubik.png" class="card-img-top" width="30" alt="game">
                            <div class="card-body">
                            <h5 class="card-title text-center">Game</h5>
                                <div class="text-center mt-3">
                                    <a class="btn btn-primary btn-lg" href="/game">Play</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                            <img src="img/info.png" class="card-img-top" width="30" alt="info">
                            <div class="card-body">
                                <h5 class="card-title text-center">Post</h5>
                                <div class="text-center mt-3">
                                    <a class="btn btn-primary btn-lg" href="/posts">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> --}}

    <div class="row featurette container-fluid">
        <div class="col-md-7">
            <div class="row justify-content-center text-center">
                <h2 class="" style="margin-top: 9rem">Game</h2>
                <p class="lead">Play Now</p>
            </div>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-5" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
    </div>

    <hr class="featurette-divider container">

    <div class="row featurette container-fluid">
        <div class="col-md-7 order-md-2">
            <div class="row justify-content-center text-center">
                <h2 class="featurette-heading">Videos</h2>
                <p class="lead">Browse Videos</p>
            </div>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-5" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
    </div>

    <hr class="featurette-divider container">

    <div class="row featurette container-fluid">
        <div class="col-md-7 mx-auto col-lg-6 col-md-8">
            <h2 class="featurette-heading">ABOUT US</h2>
            <p class="lead">We are S1 Multimedia Engineering Technology students who have taken a step forward to create interactive learning video media with websites and know how far our capabilities are in meeting the needs of the Multimedia Engineering Technology S1 major, therefore we continue to innovate to create more interactive learning video media in the future.</p>
        </div>
        <div class="col-md-5">
            <img src="/img/badrun.png" alt="badrun.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" focusable="false">
        </div>
    </div>

    <hr class="featurette-divider container">

    <div class="row featurette container-fluid">
        <div class="col-md-7 order-md-2 col-lg-6 col-md-8">
            <h2 class="featurette-heading">MISSION</h2>
            <p class="lead">Our mission is to make interactive learning videos with a special website for multimedia engineering technology undergraduate students, to make it easier for students to study multimedia engineering technology undergraduate courses and improve student learning abilities</p>
        </div>
        <div class="col-md-5">
            <img src="/img/roket.png" alt="roket.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" focusable="false">
        </div>
    </div>

    <hr class="featurette-divider container">

    <div class="row featurette container-fluid">
        <div class="col-md-7 text-center">
            <h2 class="featurette-heading">VISION</h2>
            <p class="lead">BEYOND THE LIMITS</p>
        </div>
        <div class="col-md-5">
            <img src="/img/earth.png" alt="earth.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" focusable="false">
        </div>
    </div>


@endsection