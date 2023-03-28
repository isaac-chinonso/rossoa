@extends('layout.master')
@section('title')
Donate || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Donate</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Blog Area Start ==-->
<section id="blog-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent Projects</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Blog Content Wrapper ==-->
        <div class="row">
            <!--== Single Blog Post start ==-->
            @foreach($projects as $gal)
            <div class="col-lg-4 col-md-6">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="../project/{{ $gal->projectimage }}" alt="Blog" class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="#" class="author">
                                <div class="author-info">
                                    <p>Posted: {{ $gal->created_at->format('d M Y ') }}</p>
                                </div>
                            </a>
                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h2 style="font-size: 30px;"><a href="#">{{ $gal->title }}</a></h2>
                    </div>
                </article>
            </div>
            @endforeach
            <!--== Single Blog Post End ==-->
        </div>
        <!--== Blog Content Wrapper ==-->
    </div>
</section>
<!--== Blog Area EndBlog ==-->


<!--== FunFact Area Start ==-->
<section>
    <div class="container-fluid">
        <div class="row">
            <!--== Single FunFact Start ==-->
            <div class="col-md-12">
                <img class="img-thumbnail" src="assets/img/ad.jpg">
            </div>
            <!--== Single FunFact End ==-->
        </div>
    </div>
</section>
<!--== FunFact Area End ==-->

<section id="page-content-wrap" style="padding-bottom: 80px;">
    <div class="register-page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="row">

                                    <!-- Regsiter Form Area Start -->
                                    <div class="col-lg-12 col-md-12 ml-auto">
                                        <div class="register-form-wrap">
                                            <h3 class="text-center">SUPPORT <span style="color: #2fa138;">OUR MISSION</span></h3>
                                            <p>Your Donation today is an investment in RSSOSA Projects Development to help improve the lives and Society. You can donate using the account details below or pay using the donate button below.</p>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8 text-center">
                                                    <img src="assets/img/naira-2.png" width="120px" height="120px">
                                                    <h3 style="color: #2fa138;">Naira Account</h3>
                                                    <h4>REMO SECONDARY SCHOOL OLD STUDENTS ASSOCIATION (RSSOSA)</h4>
                                                    <h4>FCMB BANK</h4>
                                                    <h4>0201964012</h4>
                                                </div>
                                                <div class="col-md-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Regsiter Form Area End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection