@extends('layouts.app')
@section('content')  
 
 {{-- sliders --}}
    <div id="foodslider" class="carousel slide" data-ride="carousel">

        {{-- indicators of sliders  --}}
        <ol class="carousel-indicators">
            <li data-target="#foodslider" data-slide-to="0" class="active"></li>
            <li data-target="#foodslider" data-slide-to="1"></li>
            <li data-target="#foodslider" data-slide-to="2"></li>
        </ol>

        {{-- items of sliders --}}
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="3000">
                <img src="/image/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h4>Thakali Food</h4>
                    <h5>Dal bhat power, 24hr</h5>
                </div>
            </div>
            <div class="carousel-item" id="slider-item" data-interval="3000">
                <img src="/image/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Always the best!!</h4>
                </div>
            </div>
            <div class="carousel-item" id="slider-item" data-interval="3000">
                <img src="/image/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Newari khaja set. You would love it</h4>
                </div>
            </div>
        </div>

        {{-- control for sliders --}}
        <a class="carousel-control-prev" href="#foodslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#foodslider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- /sliders --}}

    {{-- cards --}}
    <div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 21rem;">
                    <img src="/image/noodle.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Instant noodle. quick and yummy</p>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card" style="width: 21rem;">
                    <img src="/image/street.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">love street food? </p>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card" style="width: 21rem;">
                    <img src="/image/sel.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Good food...</p>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
    {{-- /cards --}}

    <!-- START THE FEATURETTES -->
    <hr style="margin-top: 2rem; margin-bottom:2rem; " class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Lapphing<span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">The spicy dish. your taste bud will love it.</p>
    </div>
    <div class="col-md-5">
            <img style="max-height: 30rem" src="/image/lapphing.jpg" class="card-img-top" alt="...">
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">yamari<span class="text-muted">See for yourself.</span></h2>
        <p class="lead">It is elegant, delicate and delicious, the perfect newari dish for ever occasion.</p>
    </div>
    <div class="col-md-5 order-md-1">
            <img src="/image/yamari.jpg" class="card-img-top" alt="...">
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Chatamari <span class="text-muted">Hmm...</span></h2>
        <p class="lead">why not try newari pizza???</p>
    </div>
    <div class="col-md-5">
        <img src="/image/chatamari.jpg" class="card-img-top" alt="...">
    </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2019 Company, Inc. &middot; </p>
    </footer>

@endsection