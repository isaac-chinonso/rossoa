@extends('layout.master')
@section('title')
Blog || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Blog List</h1>

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
                <div class="col-lg-12">
                    <div class="blog-page-contant-start">
                        <div class="row">
                            <!--== Single Blog Post start ==-->
                            @foreach($blogpost as $blog)
                            <div class="col-lg-4 col-md-4">
                                <article class="single-blog-post">
                                    <figure class="blog-thumb">
                                        <div class="blog-thumbnail">
                                            <img src="{{ $blog->blog_image }}" alt="Blog" class="img-fluid" />
                                        </div>
                                        <figcaption class="blog-meta clearfix">
                                            <a href="{{ route('blogdetails', $blog->slug) }}" class="author">
                                                <div class="author-info">
                                                    <p>{{ $blog->created_at->format('d M Y ') }}</p>
                                                </div>
                                            </a>
                                            <div class="like-comm pull-right">
                                                <a href="#"><i class="fa fa-comment-o"></i>{{ $blog->category->name }}</a>
                                            </div>
                                        </figcaption>
                                    </figure>

                                    <div class="blog-content">
                                        <h3><a href="{{ route('blogdetails', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                        <p>{{ $blog->short_desc }}</p>
                                        <a href="{{ route('blogdetails', $blog->slug) }}" class="btn btn-brand">More</a>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            <!--== Single Blog Post End ==-->
                        </div>

                        <!-- Pagination Start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pagination-wrap text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">50</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination End -->
                    </div>
                </div>
                <!-- Blog content Area End -->
            </div>
        </div>
    </div>
</div>
<!--== Blog Page Content End ==-->

@endsection