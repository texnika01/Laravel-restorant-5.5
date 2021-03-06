@extends('frontend.layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="main">
        <div class="content category">

            @foreach($blogs as $result)
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
                        <h2><a href="blog-article.html">{{ $result->title }}</a></h2>

                        <!-- Meta -->
                        <div class="article-meta">
                            <ul class="article-info">
                                <li>Category <a href="#">{{$result->category_id}}</a></li>
                                <li>Author: <a href="#" rel="author">{{ $result->user->first_name }}</a></li>
                                <li><a href="#">comments (3)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Article Content -->
                <div class="article-content clearfix">
                    @if($result->image !== null)
                        <figure class="article-image">
                            <a href="blog-article.html">
                                <img src="upload/blog_image/{{ $result->image}}" alt="article image">
                                <span class="mask"></span>
                            </a>
                        </figure>
                    @endif
                    <p>{{ $result->text}}
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
            @endforeach
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