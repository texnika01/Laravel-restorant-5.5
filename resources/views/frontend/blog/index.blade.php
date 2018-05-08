@extends('frontend.layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="main">
        <div class="content category">

            <!-- Article -->
            <article>
                <!-- Article Header -->
                <div class="article-header clearfix">
                    <!-- Time Box -->
                    <time datetime="2016-08-14" class="time pull-left">
                        <span class="day">14</span>
                        <span class="month-year">Aug '16</span>
                    </time>
                    <div class="title-block">

                        <!-- Article Title -->
                        <h2><a href="blog-article.html">Health Basics: How are vegetable oils really made?</a></h2>

                        <!-- Meta -->
                        <div class="article-meta">
                            <ul class="article-info">
                                <li>Published in <a href="#">Food & Drinks</a></li>
                                <li>Written by <a href="#" rel="author">Susan Amanda</a></li>
                                <li><a href="#">comments (3)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Article Content -->
                <div class="article-content clearfix">
                    <figure class="article-image">
                        <a href="blog-article.html">
                            <img src="img/frontend/article.jpg" alt="article image">
                            <span class="mask"></span>
                        </a>
                    </figure>

                    <p>Fruitcake dessert tootsie roll chupa chups wafer tart. Cheesecake toffee tart liquorice gummi bears chupa chups. Gummi bears liquorice caramels carrot cake soufflé liquorice. Tart jujubes pie. Sugar plum tart halvah croissant cotton
                        candy.
                    </p>
                </div>

                <!-- Tags -->
                <div class="tags clearfix">
                    <i class="fa fa-tags"></i>
                    <span><a href="#">Blog</a></span>
                    <span><a href="#">Loyale</a></span>
                    <span><a href="#">Food</a></span>
                </div>

                <a class="read-more" href="blog-article.html">read more ...</a>
            </article>

            <!-- Article -->
            <article>
                <!-- Article Header -->
                <div class="article-header clearfix">
                    <!-- Time Box -->
                    <time datetime="2016-08-12" class="time pull-left">
                        <span class="day">12</span>
                        <span class="month-year">Aug '16</span>
                    </time>
                    <div class="title-block">

                        <!-- Article Title -->
                        <h2><a href="blog-article.html">Grilled Halloumi with Watermelon and Basi Oil</a></h2>

                        <!-- Meta -->
                        <div class="article-meta">
                            <ul class="article-info">
                                <li>Published in <a href="#">Food & Drinks</a></li>
                                <li>Written by <a href="#" rel="author">Susan Amanda</a></li>
                                <li><a href="#">comments (4)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Article Content -->
                <div class="article-content clearfix">
                    <figure class="article-image">
                        <a href="blog-article.html">
                            <img src="img/frontend/article-2.jpg" alt="article image">
                            <span class="mask"></span>
                        </a>
                    </figure>

                    <p>Jelly-o cake pie carrot cake gummies gummies brownie. Caramels muffin danish pie. Tart ice cream jujubes tart tart lemon drops powder caramels powder. Powder ice cream dragée cupcake sweet roll lollipop.</p>
                </div>

                <!-- Tags -->
                <div class="tags clearfix">
                    <i class="fa fa-tags"></i>
                    <span><a href="#">Grill</a></span>
                    <span><a href="#">Food</a></span>
                    <span><a href="#">Spices</a></span>
                </div>

                <a class="read-more" href="blog-article.html">read more ...</a>
            </article>

            <!-- Article -->
            <article>
                <!-- Article Header -->
                <div class="article-header clearfix">
                    <!-- Time Box -->
                    <time datetime="2016-08-11" class="time pull-left">
                        <span class="day">11</span>
                        <span class="month-year">Aug '16</span>
                    </time>
                    <div class="title-block">

                        <!-- Article Title -->
                        <h2><a href="blog-article.html">The Best Cooking Tricks We’ve Picked Up Over the Years</a></h2>


                        <!-- Meta -->
                        <div class="article-meta">
                            <ul class="article-info">
                                <li>Published in <a href="#">Food & Drinks</a></li>
                                <li>Written by <a href="#" rel="author">Susan Amanda</a></li>
                                <li><a href="#">comments (3)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Article Content -->
                <div class="article-content clearfix">
                    <figure class="article-image">
                        <a href="blog-article.html">
                            <img src="img/frontend/article-3.jpg" alt="article image">
                            <span class="mask"></span>
                        </a>
                    </figure>

                    <p> Dragée sugar plum icing apple pie cheesecake. Gummies sweet croissant toffee fruitcake tart cookie cake. Pie apple pie chocolate. Sweet topping powder biscuit soufflé chocolate bar.</p>
                </div>

                <!-- Tags -->
                <div class="tags clearfix">
                    <i class="fa fa-tags"></i>
                    <span><a href="#">Tricks</a></span>
                    <span><a href="#">Drinks</a></span>
                    <span><a href="#">Cooking</a></span>
                </div>

                <a class="read-more" href="blog-article.html">read more ...</a>
            </article>
            <!--Pagination -->
            <div class="pagination clearfix">
                <p class="counter"> Page 1 of 3</p>
                <ul>
                    <li class="disabled"><a>«</a></li>
                    <li class="disabled"><a>‹</a></li>
                    <li class="active"><a>1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Next</a></li>
                    <li><a href="#">End</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Main Container -->
    </div>

    <!-- Background Section -->
    <div class="background">
        <div class="background-image" style="background-image: url('img/frontend/background/spices.jpg');">
            <div class="mask"></div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div class="mobile-overlay">
        <button class="mobile-toggle dismiss"><span></span></button>
        <div class="mobile-nav clearfix"></div>
    </div>

    <!-- To Top Button -->
    <button class="totop">&uarr;</button>

@endsection