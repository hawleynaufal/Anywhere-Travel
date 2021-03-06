@extends('layouts.app')
@section('content')

<!-- Home -->
<div id="header" style="margin-top: -22px;">
    <div class="flexslider">
        <ul class="slides">
            <li class="slider-item" style="background-image: url('{{ asset('images/item-1.png') }}')">
                <div class="intro container">
                    <div class="inner-intro">   
                        <h1 class="header-title">
                            <span>traveling</span> always "good idea"
                        </h1>
                        <p class="header-sub-title">
                            it leaves you speecless, then turns your into a storyteller.
                        </p>
                        <button class="btn custom-btn">
                            book now
                        </button>
                    </div>
                </div>
            </li> <!-- /.slider-item -->
            <li class="slider-item" style="background-image: url('{{ asset('images/item-2.png') }}')">
                <div class="intro">
                    <div class="inner-intro">
                        <h1 class="header-title">
                            to <span>travel</span> is to <span>live</span>
                        </h1>
                        <p class="header-sub-title">
                            it leaves you speecless, then turns your into a storyteller.
                        </p>
                        <button class="btn custom-btn">
                            book now
                        </button>
                    </div>
                </div>
            </li> <!-- /.slider-item -->
        </ul> <!-- /.slides -->
    </div> <!-- /.flexslider -->
</div> <!-- /#header -->
<!-- Find a Tour -->
<div style="background-color: white;">
    <section class="tour section-wrapper container" >
        <h2 class="section-title">
            Find a Tour
        </h2>
        <p class="section-subtitle">
            Where would you like to go?
        </p>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <form role="form" class="form-dropdown">
                    <div class="form-group">
                        <label for="sel1">How many seat do u want to book ?</label>
                        <select class="form-control border-radius" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="input-group">
                    <input type="text" class="form-control border-radius border-right" placeholder="Keberangkatan"/>
                    <span class="input-group-addon border-radius custom-addon">
                        <i class="ion-ios-calendar"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="input-group">
                    <input type="text" class="form-control border-radius border-right" placeholder="Destination"/>
                    <span class="input-group-addon border-radius custom-addon">
                        <i class="ion-ios-calendar"></i>
                    </span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="input-group">
                    <input type="text" class="form-control border-radius border-right" placeholder="Date"/>
                    <span class="input-group-addon border-radius custom-addon">
                        <i class="ion-ios-calendar"></i>
                    </span>
                </div>
            </div>

            
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="btn btn-default border-radius custom-button">
                    Search
                </div>
            </div>
        </div>
    </section> <!-- /.tour -->
</div>


<!-- Our Blazzing offers -->
<section class="offer section-wrapper">
    <div class="container">
        <h2 class="section-title">
            Our Blazzing offers
        </h2>
        <p class="section-subtitle">
            Lorem Ipsum is simply dummy text of the industry.
        </p>
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="offer-item">
                    <div class="icon">
                        <i class="ion-social-euro"></i>
                    </div>
                    <h3>
                        Affordable Pricing
                    </h3>
                    <p>
                        Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
                    </p>
                </div>
            </div> <!-- /.col-md-3 -->

            <div class="col-sm-3 col-xs-6">
                <div class="offer-item">
                    <div class="icon">
                        <i class="ion-ios-home"></i>
                    </div>
                    <h3>
                        High class Hotels
                    </h3>
                    <p>
                        Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
                    </p>
                </div>
            </div> <!-- /.col-md-3 -->

            <div class="col-sm-3 col-xs-6">
                <div class="offer-item">
                    <div class="icon">
                        <i class="ion-android-bus"></i>
                    </div>
                    <h3>
                        Luxury Transport
                    </h3>
                    <p>
                        Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
                    </p>
                </div>
            </div> <!-- /.col-md-3 -->

            <div class="col-sm-3 col-xs-6">
                <div class="offer-item">
                    <div class="icon">
                        <i class="ion-ios-locked"></i>
                    </div>
                    <h3>
                        Highest Security
                    </h3>
                    <p>
                        Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
                    </p>
                </div>
            </div> <!-- /.col-md-3 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.offer -->


<!-- Top place to visit -->
<div style="background-color: white;">
    <section class="visit section-wrapper">
        <div class="container">
            <h2 class="section-title">
                Top place to visit
            </h2>
            <p class="section-subtitle">
                Lorem Ipsum is simply dummy text of the industry.
            </p>

            <div class="owl-carousel visit-carousel" id="">
                <div class="item">

                    <img src="{{ asset('images/visit-1.png') }}" alt="visit-image" class="img-responsive visit-item">
                </div>
                <div class="item">
                    <img src="{{ asset('images/visit-2.png') }}" alt="visit-image" class="img-responsive visit-item">
                </div>
                <div class="item">
                    <img src="{{ asset('images/visit-3.png') }}" alt="visit-image" class="img-responsive visit-item">
                </div>
                <div class="item">
                    <img src="{{ asset('images/visit-1.png') }}" alt="visit-image" class="img-responsive visit-item">
                </div>
                <div class="item">
                    <img src="{{ asset('images/visit-2.png') }}" alt="visit-image" class="img-responsive visit-item">
                </div>
                <div class="item">
                    <img src="{{ asset('images/visit-3.png') }}" alt="visit-image" class="img-responsive visit-item">
                </div>
            </div>
        </div> <!-- /.container -->
    </section> <!-- /.visit -->
</div>

<div class="offer-cta">
    <div class="container">
        <div class="offering">
            <div class="percent">
                <span>15%</span> off
            </div>
            <div class="FTour">
                for <strong>Family Tour</strong>
            </div>
            <a class="btn btn-default price-btn" href="#">
                see our price
            </a>
        </div> <!-- /.offering -->
    </div> <!-- /.container -->
</div> <!-- /.offer-cta -->

<div style="background-color: white;">
    <section class="additional-services section-wrapper">
        <div class="container">
            <h2 class="section-title">
                Additional services
            </h2>
            <p class="section-subtitle">
                Lorem Ipsum is simply dummy text of the industry.
            </p>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="custom-table">
                        <img src="{{ asset('images/add-srvc-1.png') }}" alt="" class="add-srvc-img">
                        <div class="add-srvc-detail">
                            <h4 class="add-srvc-heading">
                                Photography
                            </h4>
                            <p class="add-srvc">
                                Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                            </p>
                        </div> <!-- /.add-srvc-detail -->
                    </div> <!-- /.custom-table -->
                </div> <!-- /.col-md-4 col-sm-6 -->

                <div class="col-md-4 col-sm-6">
                    <div class="custom-table">
                        <img src="{{ asset('images/add-srvc-2.png') }}" alt="" class="add-srvc-img">
                        <div class="add-srvc-detail">
                            <h4 class="add-srvc-heading">
                                Cycling
                            </h4>
                            <p class="add-srvc">
                                Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                            </p>
                        </div> <!-- /.add-srvc-detail -->
                    </div> <!-- /.custom-table -->
                </div> <!-- /.col-md-4 col-sm-6 -->

                <div class="col-md-4 col-sm-6">
                    <div class="custom-table">
                        <img src="{{ asset('images/add-srvc-3.png') }}" alt="" class="add-srvc-img">
                        <div class="add-srvc-detail">
                            <h4 class="add-srvc-heading">
                                Waking
                            </h4>
                            <p class="add-srvc">
                                Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                            </p>
                        </div> <!-- /.add-srvc-detail -->
                    </div> <!-- /.custom-table -->
                </div> <!-- /.col-md-4 col-sm-6 -->

                <div class="col-md-4 col-sm-6">
                    <div class="custom-table">
                        <img src="{{ asset('images/add-srvc-4.png') }}" alt="" class="add-srvc-img">
                        <div class="add-srvc-detail">
                            <h4 class="add-srvc-heading">
                                Skiing
                            </h4>
                            <p class="add-srvc">
                                Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                            </p>
                        </div> <!-- /.add-srvc-detail -->
                    </div> <!-- /.custom-table -->
                </div> <!-- /.col-md-4 col-sm-6 -->

                <div class="col-md-4 col-sm-6">
                    <div class="custom-table">
                        <img src="{{ asset('images/add-srvc-5.png') }}" alt="" class="add-srvc-img">
                        <div class="add-srvc-detail">
                            <h4 class="add-srvc-heading">
                                Sea beach
                            </h4>
                            <p class="add-srvc">
                                Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                            </p>
                        </div> <!-- /.add-srvc-detail -->
                    </div> <!-- /.custom-table -->
                </div> <!-- /.col-md-4 col-sm-6 -->

                <div class="col-md-4 col-sm-6">
                    <div class="custom-table">
                        <img src="{{ asset('images/add-srvc-6.png') }}" alt="" class="add-srvc-img">
                        <div class="add-srvc-detail">
                            <h4 class="add-srvc-heading">
                                Hill tracking
                            </h4>
                            <p class="add-srvc">
                                Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                            </p>
                        </div> <!-- /.add-srvc-detail -->
                    </div> <!-- /.custom-table -->
                </div> <!-- /.col-md-4 col-sm-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.Additional-services -->
</div>

<div class="section-wrapper sponsor">
    <div class="container">
        <div class="owl-carousel sponsor-carousel">
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-1.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-2.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-3.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-4.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-5.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-6.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-1.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-2.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-3.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-4.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-5.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-6.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-1.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-2.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-3.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-4.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-5.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{ asset('images/sp-6.png') }}" alt="sponsor-brand" class="img-responsive sponsor-item">
                </a>
            </div>
        </div> <!-- /.owl-carousel -->
    </div> <!-- /.container -->
</div> <!-- /.sponsor -->

<div style="background-color: white;">
    <div class="subscribe section-wrapper">
        <a class="brand-logo" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> Euro <span>Travel</span></a>
        <p class="subscribe-now">
            Subscribe to our Newsletter
        </p>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <div class="input-group">
                        <input type="email" class="form-control border-radius" placeholder="Email address">
                        <span class="input-group-btn">
                            <button class="btn btn-default border-radius custom-sub-btn" type="button">DONE</button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>



        <ul class="social-icon">
            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
            <li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
        </ul>
    </div> <!-- /.subscribe -->
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <div class="text-left">
                    &copy; Copyright Euro Travels
                </div>
            </div>
            <div class="col-xs-4">
                Theme by <a href="http://www.themewagon.com">THEMEWAGON</a>
            </div>
            <div class="col-xs-4">
                <div class="top">
                    <a href="#header">
                        <i class="ion-arrow-up-b"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>      
</footer>





<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>






</body>
</html>

@endsection




