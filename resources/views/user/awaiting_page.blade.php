@extends('layout.userapp2')
@section('title')
Waiting Admin Approva || RSSOSA
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
                        <h3>Authetication</h3>
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
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="performance-date">

                        <ul class="performance-date-list">

                            <li>
                                <h3 style="font-size: 18px;"> Welcome to Rssosa <span style="font-size: 18px;">{{ Auth::user()->profile->first()->fname }}</span></h3>
                                <p style="font-size: 16px;">We are proud ALUMNI of Remo Secondary School.<br> Our goal is promoting the spirit of fellowship, mutual love, and cooperation among all members. </p>
                                <span class="text-info">We are currently reviewing your account and would be approved once verified.</span><br><br>
                                @if(Auth::user()->status == 0)
                                <span class="badge bg-danger text-white">Pending Approval</span><br><br><br>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Calendar Area -->

    <div class="flex-grow-1"></div>


    @endsection