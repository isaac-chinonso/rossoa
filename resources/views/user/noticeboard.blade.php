@extends('layout.userapp')
@section('title')
My Jobs || ROSSOA
@endsection
@section('content')

<!-- Start Main Content Area -->
<main class="main-content-wrap style-two">
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>Notice Board</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Calendar Area -->
    <div class="calendar-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="performance-date">
                        <div class="main-title d-flex justify-content-between align-items-center">
                            <h3>Notice</h3>
                        </div>

                        <ul class="performance-date-list">
                            @foreach($noticeboard as $notice)
                            <li>
                                <h3>{{ $notice->noticesubject }} <span>{{ $notice->created_at->format('d M Y ') }}</span></h3>
                                <p>{{ $notice->notice }}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Calendar Area -->

    <div class="flex-grow-1"></div>


    @endsection