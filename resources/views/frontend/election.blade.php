@extends('layout.master')
@section('title')
Election|| Rssosa
@endsection
@section('content')


<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Election</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<section id="page-content-wrap">
    <div class="event-page-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="all-event-list"><br><br>
                        @foreach($votedate as $votedate)
                        <!-- Single Event Start -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3><strong>RSSOSA {{ $votedate->category->name }} Election</strong></h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h6>STARTS</h6>
                                                                <div class="event-countdown">
                                                                    <div class="event-countdown-counter" data-date="{{ $votedate->start }}"></div>
                                                                    <p>Remaining</p> <br><br> <br>
                                                                </div>
                                                                <div class="up-event-thumb1">
                                                                    <h4 class="up-event-date">{{ \Carbon\Carbon::parse($votedate->start)->diffForHumans() }}</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h6>ENDS</h6>
                                                                <div class="event-countdown">
                                                                    <div class="event-countdown-counter" data-date="{{ $votedate->end }}"></div>
                                                                    <p>Remaining</p> <br><br> <br>
                                                                </div>
                                                                <div class="up-event-thumb1">
                                                                    <h4 class="up-event-date">{{ \Carbon\Carbon::parse($votedate->end)->diffForHumans() }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Event End -->
                        @endforeach
                    </div>
                </div>
            </div><br><br>
        </div>
    </div>
    <div class="committee-content-wrap section-padding">
        <div class="committee-member-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @include('include.success')
                        @include('include.warning')
                        @include('include.error')
                    </div>
                </div>
                <div class="row">

                    @if (empty($election)))
                    <div class="col-md-12">
                        <h1 class="text-danger text-center">No Ongoing Election</h1>
                    </div>
                    @else
                    @foreach($election as $elect)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-committee-member">
                            <img src="voting/{{ $elect->candidate_image }}" class="img-fluid img-thumbnail" alt="Committee" />
                            <h3>{{ $elect->user->profile->first()->fname }} {{ $elect->user->profile->first()->lname }}
                                <span class="committee-deg">{{ $elect->category->name }}</span><br>

                                @if (\Carbon\Carbon::parse($votedate->start) == now() )
                                <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#responsive-modal2{{ $elect->id }}" style="font-size: 20px;">Vote Candidate</button>
                                @elseif (\Carbon\Carbon::parse($votedate->end) == now() )
                                <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#responsive-modal2{{ $elect->id }}" style="font-size: 20px;">Vote Candidate</button>
                                @elseif (\Carbon\Carbon::parse($votedate->end) < now() ) <span class="text-warning">Not Active</span>

                                    @endif
                            </h3>
                        </div>
                    </div>
                    <!-- modal content -->
                    <div id="responsive-modal2{{ $elect->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Cast Vote</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form method="post" action="{{ url('/cast-vote') }}">
                                    @csrf
                                    <input type="text" name="candidate_id" value="{{ $elect->id }}" hidden>
                                    <input type="text" name="category" value="{{ $elect->category->id }}" hidden>
                                    <div class="modal-body">
                                        <h4><strong>Confirm Vote</strong></h4>
                                        <p>Are you sure you want to Vote <strong>{{ $elect->user->profile->first()->fname }} {{ $elect->user->profile->first()->lname }}</strong> as <strong>{{ $elect->category->name }}</strong></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>

                                        <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light">Vote {{ $elect->user->profile->first()->fname }} {{ $elect->user->profile->first()->lname }}</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal -->
                    @endforeach

                    @endif

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
                <img class="img-thumbnail" src="assets/img/ad.jpg">
            </div>
            <!--== Single FunFact End ==-->
        </div>
    </div>
</section>
<!--== FunFact Area End ==-->

@endsection