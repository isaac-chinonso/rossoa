@extends('layout.userapp')
@section('title')
Profile || ROSSOA
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
                        <h3>Profile</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li>Pages</li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Profile Area -->
    <div class="profile-area">
        <div class="container-fluid">
            <div class="card-box-style">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="profile-info d-flex align-items-center">
                            <img class="w-25 rounded-4" src="../assetsuser/images/avatar/profile.jpg" alt="profile-img">
                            <div class="profile-name ms-4">
                                <h4>{{ Auth::user()->profile->first()->fname }} {{ Auth::user()->profile->first()->lname }}</h4>
                                <span>Member Since: {{ Auth::user()->created_at->format('d M Y ') }}</span>
                                <div class="follow-email">
                                    <button class="btn btn-primary">
                                        <a href="{{ url('user/edit-profile') }}" class="text-white">Edit Profile Details</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="profile-details card-box-style">
                <ul class="list-inline profile-menu">
                    <li>
                        <a href="#" class="active" style="font-size: 30px;">Profile Information</a>
                    </li>
                </ul>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="personal-info">
                            <ul class="list-inline">
                                <li>
                                    <span>Full Name :</span>
                                    {{ Auth::user()->profile->first()->fname }} {{ Auth::user()->profile->first()->lname }}
                                </li>
                                <li>
                                    <span>Email :</span>
                                    {{ Auth::user()->email }}
                                </li>
                                <li>
                                    <span>Phone :</span>
                                    {{ Auth::user()->profile->first()->phone }}
                                </li>
                                <li>
                                    <span>Occupation :</span>
                                    {{ Auth::user()->profile->first()->occupation }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="personal-info">
                            <ul class="list-inline">
                                <li>
                                    <span>Nickname :</span>
                                    <a href="#" target="_blank">{{ Auth::user()->profile->first()->nickname }}</a>
                                </li>
                                <li>
                                    <span>Entry Year :</span>
                                    <a href="#">{{ Auth::user()->profile->first()->entryyear }}</a>
                                </li>
                                <li>
                                    <span>Date of Birth :</span>
                                    <a href="#">{{ Auth::user()->profile->first()->dob }}</a>
                                </li>
                                <li>
                                    <span>Gender :</span>
                                    <a href="#">{{ Auth::user()->profile->first()->gender }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="biography">
                    <h3>Biography</h3>
                    <p>{{ Auth::user()->profile->first()->description }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Profile Area -->

    <div class="flex-grow-1"></div>

@endsection