@extends('layout.master')
@section('title')
Homepage || Rssosa
@endsection
@section('content')


<div class="marquee">
    <p style="color: red;">
        @foreach($blogpost as $blog)
        <a href="{{ route('blogdetails', $blog->slug) }}">{{ $blog->short_desc }}</a>
        @endforeach
    </p>
</div>
<!--== Slider Area Start ==-->
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-left">
        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>We Are Proud</h2>
                            <h3>ALUMNI of <span>Remo Secondary School</span></h3>
                            <p>- Promoting the spirit of fellowship, mutual love, and cooperation among all members.</p>
                            <div class="slider-btn">
                                <a href="{{ url('/mission') }}" class="btn btn-brand smooth-scroll">our mission</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>We Are Proud</h2>
                            <h3>ALUMNI of <span>Remo Secondary School</span></h3>
                            <p>- Maintaining and enhancing the prestige and good name of Remo Secondary School</p>
                            <div class="slider-btn">
                                <a href="{{ url('/mission') }}" class="btn btn-brand">our mission</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>We Are Proud</h2>
                            <h3>ALUMNI of <span>Remo Secondary School</span></h3>
                            <p>- Providing guidance and support to present students in their endeavour to attain academic excellence.</p>
                            <div class="slider-btn">
                                <a href="{{ url('/mission') }}" class="btn btn-brand">our mission</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->
    </div>

    <!-- Social Icons Area Start -->
    <div class="social-networks-icon">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i> <span>3.2m Followers</span></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i> <span>7.2k Followers</span></a></li>
        </ul>
    </div>
    <!-- Social Icons Area End -->
</section>
<!--== Slider Area End ==-->


<!--== Upcoming Event Area Start ==-->
<section id="upcoming-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="upcoming-event-wrap">
                    <div class="up-event-titile">
                        <h3>Upcoming event</h3>
                    </div>
                    <div class="upcoming-event-content owl-carousel">
                        @foreach($event as $even)
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="../event/{{ $even->coverimage }}" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s happening {{ $even->date  }}</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    <div class="event-countdown-counter" data-date="{{ $even->date }}"></div>
                                                    <p>Remaining</p>
                                                </div>
                                                <h3><a href="#">{{ $even->title }}</a></h3>
                                                <p>{{ $even->description }}</p>
                                                <a href="{{ url('/events') }}" class="btn btn-brand btn-brand-dark">More Event</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Upcoming Event Area End ==-->

<!--== About Area Start ==-->
<section id="page-content-wrap">
    <div class="about-page-content-wrap section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <!-- Single about text start -->
                    <div class="single-about-text">
                        <img src="assets/img/about-bg.png" alt="About" class="img-fluid img-left">
                        <h2 class="h3">President's welcome address</h2>
                        <p style="text-align:justify;font-size:15px;">It gives me great joy and honour to welcome you to the official website of Remo Secondary School Old Students Association. This website was designed to facilitate active participation and growth of the association across the globe. Remo Secondary School Old Students Association was birthed from Remo Secondary School (First Co-educational Secondary School in West Africa), and borne out of a strategic vision to unite all old students for the development of the school community. The primary focus is to build a unified force for the development of our Alma Mater, individual growth, as well as the fulfillment of the students that pass through the formative environment of the school.</p>
                        <div class="slider-btn">
                            <a href="{{ url('/president') }}" class="btn btn-brand">Read More</a>
                        </div>
                    </div>
                    <!-- Single about text End -->

                </div>
            </div>
        </div>
    </div>

    <!--== FunFact Area Start ==-->
    <section id="funfact-area">
        <div class="container-fluid">
            <div class="row text-center">
                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets/img/fun-fact/user.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5 class="funfact-count">{{ $allusers }}</h5>
                            <p>Members</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->

                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets/img/fun-fact/picture.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5 class="funfact-count">{{ $allgalleries }}</h5>
                            <p>Photos</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->

                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets/img/fun-fact/event.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5><span class="funfact-count">{{ $allevent }}</span>+</h5>
                            <p>Events</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->

                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets/img/fun-fact/medal.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5><span class="funfact-count">{{ $allscholarship }}</span>+</h5>
                            <p>Scholarships</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->
            </div>
        </div>
    </section>
    <!--== FunFact Area End ==-->
</section>
<!--== About Area End ==-->
<!--== Our Responsibility Area Start ==-->
<section id="page-content-wrap">
    <div class="people-to-say section-padding">
        <div class="container">
            <!--== Section Title Start ==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Our Responsibility</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="people-to-say-wrapper owl-carousel">
                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="assets/img/responsibility/01.png" class="img-fluid" />
                            </div>
                            <h3 style="padding-top: 65px;font-weight:bolder;color: #008013;font-size:30px;">Scholarship</h3>
                            <p style="text-align: justify;font-size:15px">RSSOSA provides scholarship to exceptionally talented students and students in need of financial assistance who are seeking to attain the peak of their academic journey.</p><br><br>

                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="assets/img/responsibility/02.png" alt="" class="img-fluid">
                            </div>
                            <h3 style="padding-top: 65px;font-weight:bolder;color: #008013;font-size:30px;">Help Current Students</h3>
                            <p style="text-align: justify;font-size:15px">The Association is focused not only on building a strong and positive relationship among all members, but also on providing a support system (financial, moral and intellectual) for the current students who are still trying to discover
                                their paths.</p>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="assets/img/responsibility/03.png" alt="" class="img-fluid" />
                            </div>
                            <h3 style="padding-top: 65px;font-weight:bolder;color: #008013;font-size:30px;">Build our Community</h3>
                            <p style="text-align: justify;font-size:15px">Building the RSS community (The Alumni, the School and the Students) is the foundation on which RSSOSA was established. This will be achieved by developing progressive ideas for communal growth, mutual alignments and development.</p>

                        </div>
                        <!-- Single People Testimonial -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Our Responsibility Area End ==-->

<section id="page-content-wrap">
    <div class="committee-content-wrap section-padding">
        <div class="committee-member-list">
            <div class="container">
                <!--== Section Title Start ==-->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Birthday Celebrants</h2>
                        </div>
                    </div>
                </div>
                <!--== Section Title End ==-->
                <div class="row">

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                @foreach($birthday as $birth)
                                <div class="col-md-4">
                                    <div class="single-committee-member">
                                        <img src="file/{{ $birth->pimage }}" class="img-fluid img-thumbnail" alt="Committee" />
                                        <h3> {{ $birth->fname }} {{ $birth->lname }}<br><span style="font-size: 13px;line-height:30px;text-transform:none;">Celebrating you today... your humor, your charm, and all the ways you make this world a better place. Happy birthday!</span>
                                            <span class="committee-deg">{{ $birth->dob }}</span><br>
                                        </h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div><br><br>
                <div align="center">
                    <a href="{{ url('/events') }}" class="btn btn-brand btn-brand-dark" style="background-color: #008013;color:#fff;">Load Full Celebrants</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--== FunFact Area Start ==-->
<section>
    <div class="container-fluid">
        <div class="row">
            <!--== Single FunFact Start ==-->
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-thumbnail" src="assets/img/ad.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="img-thumbnail" src="assets/img/ad.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="img-thumbnail" src="assets/img/ad.jpg">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>

            </div>
            <!--== Single FunFact End ==-->
        </div>
    </div>
</section>
<!--== FunFact Area End ==-->

<!--== Job Opportunity Area Start ==-->
<section id="job-opportunity" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent Jobs</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Job opportunity Wrapper ==-->
        <div class="job-opportunity-wrapper">
            <div class="row">
                <!--== Single Job opportunity Start ==-->
                @foreach($jobs as $job)
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="../job/{{ $job->companylogo }}" alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">{{ $job->title }}</a></h3>
                            <span class="text-muted">{{ $job->location }} | {{ $job->experience }} | {{ $job->jobtype }}</span>
                            <p>{{ $job->description }}</p>
                        </div>
                        <a href="{{ url('/job-application-form', $job->id) }}" class="btn btn-job">Apply now</a>
                    </div>
                </div>
                @endforeach
                <!--== Single Job opportunity End ==-->
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('career') }}" class="btn btn-brand btn-loadmore">All job list</a>
                </div>
            </div>
        </div>
        <!--== Job opportunity Wrapper ==-->
    </div>
</section>
<!--== Job Opportunity Area End ==-->

<!--== Gallery Area Start ==-->
<section id="gallery-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our gallery</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Gallery Container Warpper ==-->
        <section id="page-content-wrap">
            <div class="committee-content-wrap">
                <div class="committee-member-list">
                    <div class="container">

                        <div class="row">
                            @foreach($galleries as $gallery)
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-committee-member">
                                    <img src="gallery/{{ $gallery->galleryimage }}" class="img-fluid" alt="Committee" />
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Gallery Container Warpper==-->
    </div>
</section>
<!--== Gallery Area Start ==-->

<!--== Scholership Promo Area Start ==-->
<section id="scholership-promo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="scholership-promo-text">
                    <h2>RSSOSA Provide <span>Scholarship</span> For Talented Student!</h2>
                    <p>RSSOSA is highly invested in the growth of the students of Remo Secondary School by providing scholarship opportunities for exceptional students. To apply for any of RSSOSA Scholarship opportunities, click the apply button below.
                    </p>
                </div><br>
                <!--== Job opportunity Wrapper ==-->
                <div class="job-opportunity-wrapper">
                    <div class="row">
                        <!--== Single Job opportunity Start ==-->
                        @foreach($scholarships as $scholarship)
                        <div class="col-lg-4 col-md-6">
                            <article class="single-blog-post">
                                <figure class="blog-thumb">
                                    <div class="blog-thumbnail">
                                        <img src="scholarship/{{ $scholarship->scholarshipimage }}" alt="Blog" class="img-fluid" />
                                    </div>
                                    <figcaption class="blog-meta clearfix">
                                        <div class="like-comm pull-right">
                                            <a href="#"><i class="fa fa-calendar-o"></i>Closing Date: {{ $scholarship->closingdate }}</a> &nbsp;
                                            <a href="#"><i class="fa fa-file"></i> {{ $scholarship->requirement }}</a>
                                        </div>
                                    </figcaption>
                                </figure>

                                <div class="blog-content">
                                    <h3><a href="#">{{ $scholarship->title }}</a></h3>
                                    <p>{{ $scholarship->description }}</p>
                                    <a href="{{ url('/scholarship-application-form', $scholarship->id) }}" class="btn btn-brand">Apply Now</a>
                                </div>
                            </article>
                        </div>
                        @endforeach
                        <!--== Single Job opportunity End ==-->
                    </div>
                </div>
                <!--== Job opportunity Wrapper ==-->
            </div>
        </div>
    </div>
</section>
<!--== Scholership Promo Area End ==-->

<!--== Blog Area Start ==-->
<section id="blog-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent News</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Blog Content Wrapper ==-->
        <div class="row">
            <!--== Single Blog Post start ==-->
            @foreach($blogpost as $blog)
            <div class="col-lg-4 col-md-6">
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
                                <a href="{{ route('blogdetails', $blog->slug) }}"><i class="fa fa-comment-o"></i>{{ $blog->category->name }}</a>
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
        <!--== Blog Content Wrapper ==-->
    </div>
</section>
<!--== Blog Area EndBlog ==-->


@endsection