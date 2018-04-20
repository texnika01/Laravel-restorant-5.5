@extends('frontend.layouts.app')

@section('content')

<!-- Background section -->
<div class="background">
    <!-- BS carousel slider -->
    <div id="st-slider" class="carousel slide">
        <!-- Preloader -->
        <div class="carousel-preloader">
            <span class="spinner"></span>
        </div>
        <!-- Progress bar -->
        <div class="carousel-progress">
            <span class="bar"></span>
        </div>
        
        <!-- Indicators nav -->
        <ol class="carousel-indicators">
            <li data-slide-to="0" data-target="#st-slider" class="active"></li>
            <li data-slide-to="1" data-target="#st-slider"></li>
            <li data-slide-to="2" data-target="#st-slider"></li>
            <li data-slide-to="3" data-target="#st-slider"></li>
            <li data-slide-to="4" data-target="#st-slider"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            
            <!-- Slide -->
            <div class="item active">
                <div class="slide-image" style="background-image: url('img/frontend/slide1.jpg');"></div>
                <div class="carousel-caption">
                    <div class="title-block animate short-delay">
                        <h2><a href="#">Welcome To The Loyale</a></h2>
                        <div class="carousel-nav">
                            <a class="left carousel-control" href="#st-slider" data-slide="prev">Previous</a>
                            <a class="right carousel-control" href="#st-slider" data-slide="next">Next</a>
                        </div>
                    </div>
                    <div class="subtitle-block animate medium-delay">
                        <h4>simple and elegant html5 template</h4>
                        <a href="#" class="carousel-link">Read More &#187;</a>
                    </div>
                </div>
                <div class="mask"></div>
            </div>
            
            <!-- Slide -->
            <div class="item">
                <div class="slide-image" style="background-image: url('img/frontend/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <div class="title-block animate short-delay">
                        <h2><a href="#">Join us for Italian Week</a></h2>
                        <div class="carousel-nav">
                            <a class="left carousel-control" href="#st-slider" data-slide="prev">Previous</a>
                            <a class="right carousel-control" href="#st-slider" data-slide="next">Next</a>
                        </div>
                    </div>
                    <div class="subtitle-block animate medium-delay">
                        <h4>short description goes here</h4>
                        <a href="#" class="carousel-link">Read More &#187;</a>
                    </div>
                </div>
                <div class="mask"></div>
            </div>
            
            <!-- Slide -->
            <div class="item">
                <div class="slide-image" style="background-image: url('img/frontend/slide3.jpg');"></div>
                <div class="carousel-caption">
                    <div class="title-block animate short-delay">
                        <h2><a href="#">Selected Indian spices</a></h2>
                        <div class="carousel-nav">
                            <a class="left carousel-control" href="#st-slider" data-slide="prev">Previous</a>
                            <a class="right carousel-control" href="#st-slider" data-slide="next">Next</a>
                        </div>
                    </div>
                    <div class="subtitle-block animate medium-delay">
                        <h4>botanical origin used in nutritionally</h4>
                        <a href="#" class="carousel-link">Read More &#187;</a>
                    </div>
                </div>
                <div class="mask"></div>
            </div>
            
            <!-- Slide -->
            <div class="item">
                <div class="slide-image" style="background-image: url('img/frontend/slide4.jpg');"></div>
                <div class="carousel-caption">
                    <div class="title-block animate short-delay">
                        <h2><a href="#">New Restaurant in Monaco</a></h2>
                        <div class="carousel-nav">
                            <a class="left carousel-control" href="#st-slider" data-slide="prev">Previous</a>
                            <a class="right carousel-control" href="#st-slider" data-slide="next">Next</a>
                        </div>
                    </div>
                    <div class="subtitle-block animate medium-delay">
                        <h4>Located in the hart of Monaco</h4>
                        <a href="#" class="carousel-link">Read More &#187;</a>
                    </div>
                </div>
                <div class="mask"></div>
            </div>
            
            <!-- Slide -->
            <div class="item">
                <div class="slide-image" style="background-image: url('img/frontend/slide5.jpg');"></div>
                <div class="carousel-caption">
                    <div class="title-block animate short-delay">
                        <h2><a href="#">Harvest Seasonal Grill</a></h2>
                        <!-- carousel nav -->
                        <div class="carousel-nav">
                            <a class="left carousel-control" href="#st-slider" data-slide="prev">Previous</a>
                            <a class="right carousel-control" href="#st-slider" data-slide="next">Next</a>
                        </div>
                    </div>
                    <div class="subtitle-block animate medium-delay">
                        <h4>Morbi tempor eget justo ac posuere</h4>
                        <a href="#" class="carousel-link">Read More &#187;</a>
                    </div>
                </div>
                <div class="mask"></div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile menu -->
<div class="mobile-overlay">
    <button class="mobile-toggle dismiss"><span></span></button>
    <div class="mobile-nav clearfix"></div>
</div>
<!-- To-top button -->
<button class="totop">&uarr;</button>
@endsection
