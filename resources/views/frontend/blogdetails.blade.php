@extends('layout.master1')
@section('title')
{{ $blogdetails->title }}
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">{{ $blogdetails->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Blog Page Content Start ==-->
<div id="page-content-wrap">
    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <!-- Blog content Area Start -->
                <div class="col-lg-8">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <img src="../{{ $blogdetails->blog_image }}" class="img-fluid" alt="Blog">
                            </div>
                            <div class="single-blog-meta">
                                <h2>{{ $blogdetails->title }}</h2>
                                <div class="posting-info">
                                    <a href="#">{{ $blogdetails->created_at->format('d M Y ') }}</a> • {{ $blogdetails->category->name }}
                                </div>
                            </div>
                        </header>
                        <section class="blog-details">
                            <p>{{ $blogdetails->short_desc }}</p>
                            <p> {!! $blogdetails->long_desc !!}</p>
                        </section>
                        <footer class="post-share">
                            <div class="row no-gutters ">
                                <div class="col-8">
                                    <div class="shareonsocial">
                                        <span>Share:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </article>
                </div>
                <!-- Blog content Area End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4 order-first order-lg-last">

                    <div class="sidebar-area-wrap">

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar-wrap d-none d-lg-block">
                            <h4 class="sidebar-title">Recent Post</h4>
                            <div class="sidebar-body">
                                <ul class="brand-unorderlist">
                                    @foreach($blogpost as $blog)
                                    <li>
                                        <a href="{{ route('blogdetails', $blog->slug) }}">{{ $blog->title }} </a><br>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i>
                                            {{ $blog->created_at->format('d M Y ') }}
                                        </span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </div>
</div>
<!--== Blog Page Content End ==-->

@endsection