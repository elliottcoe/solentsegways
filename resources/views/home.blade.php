@extends('layout.master')

@section('body')
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">

            <div class="container">
                <div class="carousel-caption">
                    <img class="first-slide" src="{{asset('images/mainlogo.png')}}" alt="First slide" align="middle">
                    <p>Segway adventure in the heart of the solent</p>
                    <p><a class="btn btn-lg btn-primary" href="book" role="button">Book Today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>"Me and my boyfriend had an amazing time with Solent segways"</h1>
                    <p>- Paige Osbourne</p>

                    <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/examples/carousel/#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>"Everything was explained well and our safety came first. Did different courses so it was fun and challenging"</h1>
                    <p>- Karen Stook</p>
                    <p><a class="btn btn-lg btn-primary" href="https://www.facebook.com/Solent-Segways-1692520424295244" role="button">Find us on Facebook</a></p>
                </div>
            </div>
        </div>
        
    </div>
    <a class="left carousel-control" href="https://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="https://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="{{asset('images/logo.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Gear</h2>
            <p>Some information about the amazing and powerful Segway X2s</p>
            <p><a class="btn btn-default" href="https://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="{{asset('images/package.gif')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Experience</h2>
            <p>Check out what we have to offer</p>
            <p><a class="btn btn-default" href="https://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="{{asset('images/map.png')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Location</h2>
            <p>Based in titchfield, here is how to find us...</p>
            <p><a class="btn btn-default" href="https://getbootstrap.com/examples/carousel/#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Beautiful scenery</h2>
            <p class="lead">Based in 6 acres of beautiful woodland, with lots of challenging twists and turn to navigate through</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" height="500" alt="500x500" src="{{asset('images/image7.jpg')}}" >
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">15 minutes training</h2>
            <p class="lead">The instructor will spend 15 minutes making get you on the segways and making sure you are ready to hit the trail.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="{{asset('images/image4.jpg')}}" data-holder-rendered="true">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Safety</h2>
            <p class="lead">We are fully insured and you will wear a full face helmet and body armour to keep you safe</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="{{asset('images/image2.jpg')}}" data-holder-rendered="true">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="text-center">
            <a href="#" class="btn btn-success">Book Now</a>
            <br>
            <br>
            <div class="fb-like" data-href="https://www.facebook.com/Solent-Segways-1692520424295244" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>
    </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
    @endsection