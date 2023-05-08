@extends('layout.master')
@section('title')
Authetication Confirmation
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Confirm Authetication</h1>

                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="row">
                                    <!-- Signin Area Content Start -->
                                    <div class="col-md-12">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="signin-area-wrap">
                                                    <h4>Confirm Authetication Details</h4>
                                                    <div class="sign-form">
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

                                                                <div class="justify-content-right">
                                                                    <button class="btn btn-primary">Continue to Dashboard</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Signin Area Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Register Page Content End ==-->

@endsection