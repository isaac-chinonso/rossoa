@extends('layout.master')
@section('title')
Event || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">All Event </h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Gallery Page Content Start ==-->
<section id="page-content-wrap">
    <div class="event-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="all-event-list">
                        <!-- Single Event Start -->
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Single Event End -->
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!--== Gallery Page Content End ==-->

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

@endsection