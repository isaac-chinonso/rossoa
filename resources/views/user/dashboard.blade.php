@extends('layout.userapp')
@section('title')
Dashboard || ROSSOA
@endsection
@section('content')

<!-- Start Main Content Area -->
<main class="main-content-wrap style-two">
    <!-- Start Overview Back Area -->
    <div class="overview-content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(is_null(Auth::user()->profile->first()->dob))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Opps!! Profile not Completed. Please click <a href="{{ route('editprofile') }}">here</a> to Update Profile now
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-audience d-flex justify-content-between align-items-center">
                        <div class="audience-content">
                            <h5>Submitted Products</h5>
                            <h4>{{ $product }}</h4>
                        </div>
                        <div class="icon">
                            <i class='bx bx-cart'></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-audience d-flex justify-content-between align-items-center">
                        <div class="audience-content">
                            <h5>Submitted Job Openings</h5>
                            <h4>{{ $job }}</h4>
                        </div>
                        <div class="icon">
                            <i class='bx bx-briefcase'></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-audience d-flex justify-content-between align-items-center">
                        <div class="audience-content color-style-fe5957">
                            <h5>Submitted Scholarship</h5>
                            <h4>{{ $scholarship }}</h4>
                        </div>
                        <div class="icon">
                            <i class='bx bx-award'></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-audience d-flex justify-content-between align-items-center">
                        <div class="audience-content color-style-fe5957">
                            <h5>Total Dues Paid</h5>
                            <h4>₦0.00</h4>
                        </div>
                        <div class="icon">
                            <i class='bx bx-money'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Back Area -->

    <!-- Start Employees Info Chart Area -->
    <div class="employees-chart-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box-style">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="profile-info d-flex align-items-center">
                                    <img class="w-25 rounded-circle" src="https://png.pngtree.com/png-vector/20190114/ourlarge/pngtree-vector-avatar-icon-png-image_313572.jpg" alt="profile-img">
                                    <div class="profile-name ms-4">
                                        <h4>{{ Auth::user()->profile->first()->fname }} {{ Auth::user()->profile->first()->lname }}</h4>
                                        <span>Member Since: {{ Auth::user()->created_at->format('d M Y ') }}</span>
                                        <div class="text-end edit-massage">
                                            <a href="{{ url('/election') }}" class="btn btn-primary">
                                                Cast Vote
                                            </a>
                                            <a href="edit-profile.html" class="btn btn-secondary">
                                                Pay Dues
                                            </a>

                                        </div>
                                    </div>
                                </div><br>
                                <div class="biography">
                                    <h5>About Me:</h5>
                                    <p>{{ Auth::user()->profile->first()->description }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Employees Info Chart Area -->


    <div class="chat-content-area mt-20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sidebar-left">
                        <div class="sidebar">
                            <h5>Recent Notice</h5><hr>
                            <div class="sidebar-content d-flex chat-sidebar" data-simplebar>
                                <div class="chat-menu">
                                    <ul class="list-group list-group-user list-unstyled mb-0">
                                    @foreach($noticeboard as $notice)
                                        <li class="active">
                                            <div class="d-flex align-items-center">
                                                <div class="user-name">
                                                    <h6 class="font-weight-bold">{{ $notice->noticesubject }}</h6>
                                                    <span class="d-block">{{ $notice->notice }}</span>
                                                    <span class="date">{{ $notice->created_at->format('d M Y ') }}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="upcoming-interview-content card-box-style rounded rounded-30">
                        <div class="main-title border-style d-flex justify-content-between align-items-center">
                            <h3>Upcoming Events</h3>
                        </div>

                        <ul class="interviews-wrap">
                            @foreach($event as $event)
                            <li class="single-interview d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="../event/{{ $event->coverimage }}" alt="interview-1">
                                    <div class="interview-info ms-2">
                                        <h4>{{ $event->title }}</h4>
                                        <span>{{ $event->location }} &nbsp; &nbsp; {{ $event->date }}</span>
                                        <span>{{ $event->description }}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @endsection