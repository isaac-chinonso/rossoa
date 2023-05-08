@extends('layout.userapp')
@section('title')
Edit Profile || RSSOSA
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
                        <h3>Edit Profile</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li>Pages</li>
                        <li>Edit Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Profile Area -->
    <div class="profile-area">
        <div class="container-fluid">
            <div class="row">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="col-lg-8">
                    <div class="edit-profile-content card-box-style">
                        <h3>Edit Profile Info</h3>
                        <form method="POST" action="{{ route('updateprofile', Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="fname" value="{{ Auth::user()->profile->first()->fname }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="lname" value="{{ Auth::user()->profile->first()->lname }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" disabled value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phone" value="{{ Auth::user()->profile->first()->phone }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Alternative Phone Number</label>
                                        <input type="text" class="form-control" name="alt_phone" value="{{ Auth::user()->profile->first()->alt_phone }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <input type="text" class="form-control" name="occupation" value="{{ Auth::user()->profile->first()->occupation }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nickname in School</label>
                                        <input type="text" class="form-control" name="nickname" value="{{ Auth::user()->profile->first()->nickname }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="{{ Auth::user()->profile->first()->dob }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" name="location" value="{{ Auth::user()->profile->first()->location }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Year of Entry</label>
                                        <input type="text" class="form-control" name="entryyear" value="{{ Auth::user()->profile->first()->entryyear }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Gender</label>
                                    <div class="form-group">
                                        <select class="form-control form-select" tabindex="-1" aria-hidden="true" name="gender">
                                            <option selected value="{{ Auth::user()->profile->first()->gender }}">{{ Auth::user()->profile->first()->gender }}</option>
                                            <option disabled>Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Post Held While in School</label>
                                        <input type="text" class="form-control" name="post_held" value="{{ Auth::user()->profile->first()->post_held }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Post Held in Association</label>
                                        <input type="text" class="form-control" name="associate_post" value="{{ Auth::user()->profile->first()->associate_post }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name of Institution</label>
                                        <input type="text" class="form-control" name="institution" value="{{ Auth::user()->profile->first()->institution }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Course of Study</label>
                                        <input type="text" class="form-control" name="course" value="{{ Auth::user()->profile->first()->course }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Profile Image</label>
                                        <input type="file" name="pimage" class="form-control" value="{{ Auth::user()->profile->first()->pimage }}">
                                        <img src="../file/{{ Auth::user()->profile->first()->pimage }}" width="120px" height="80px" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Bio Data</label>
                                        <textarea class="form-control" cols="20" rows="10" name="description">{{ Auth::user()->profile->first()->description }}</textarea>
                                    </div>
                                </div>

                                <div class="save-update" align="right">
                                    <button class="btn btn-primary me-2">Update Profile Information</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="edit-profile-content card-box-style">
                        <h3>Change Password</h3>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="password" class="form-control" value="password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" value="password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" value="password">
                                    </div>
                                </div>

                                <div class="save-update">
                                    <button class="btn btn-primary me-2">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Profile Area -->

    <div class="flex-grow-1"></div>

    @endsection