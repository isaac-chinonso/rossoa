@extends('layout.master')
@section('title')
Login || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Membership Form</h1>

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
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="signin-area-wrap">
                                                    <h4>Already a Member?</h4>
                                                    <div class="sign-form">
                                                        <form method="post" action="{{ url('sigin') }}">
                                                            @csrf
                                                            <input type="email" name="email" placeholder="Enter your Email ID">
                                                            <input type="password" name="password" placeholder="Password">
                                                            <button type="submit" class="btn btn-reg">Login</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Signin Area Content End -->

                                    <!-- Regsiter Form Area Start -->
                                    <div class="col-lg-7 col-md-6 ml-auto">
                                        <div class="register-form-wrap">
                                            <h3>Registration Form</h3>
                                            <div class="register-form">
                                                <form method="POST" action="{{ url('savelogin') }}">
                                                    @csrf
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>First Name</label>
                                                                        <input type="text" class="form-control" name="fname" value="{{ Request::old('fname')}}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Last Name</label>
                                                                        <input type="text" name="lname" class="form-control" value="{{ Request::old('lname')}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nickname while in school</label>
                                                                        <input type="text" class="form-control" name="nickname" value="{{ Request::old('nickname')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Class Set (Graduation Year)</label>
                                                                        <input type="text" class="form-control" name="entryyear" value="{{ Request::old('entryyear')}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Occupation</label>
                                                                        <input type="text" class="form-control" name="occupation" value="{{ Request::old('occupation')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input type="email" class="form-control" name="email" value="{{ Request::old('email')}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Phone Number (Whatsapp)</label>
                                                                        <input type="phone" class="form-control" name="phone" value="{{ Request::old('phone')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Alternative Number</label>
                                                                        <input type="phone" class="form-control" name="alt_phone" value="{{ Request::old('alt_phone')}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Post Held while in School</label>
                                                                        <input type="text" class="form-control" name="post_held" value="{{ Request::old('post_held')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Post held in Association</label>
                                                                        <input type="phone" class="form-control" name="associate_post" value="{{ Request::old('associate_post')}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Date of Birth</label>
                                                                        <input type="date" class="form-control" name="dob" value="{{ Request::old('dob')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Location (eg: Ogun, Nigeria)</label>
                                                                        <input type="text" class="form-control" name="location" value="{{ Request::old('location')}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="gender form-group">
                                                                        <label class="g-name d-block">Gender</label>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                            <input type="radio" id="register_gender_male" name="gender" value="Male" class="custom-control-input" />
                                                                            <label class="custom-control-label" for="register_gender_male">Male</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                            <input type="radio" id="register_gender_female" name="gender" value="Female" class="custom-control-input">
                                                                            <label class="custom-control-label" for="register_gender_female">Female</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Password</label>
                                                                        <input type="password" class="form-control" name="password" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Confirm Password</label>
                                                                        <input type="password" class="form-control" name="confirm_password" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="card">
                                                        <div class="card-header bg-success text-white">
                                                            <h6 class="card-title">Student Section</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p style="font-size: 13px;">Please fill the form correctly as a student, this will enable us share opportunities from the association to you regarding your choice of career.</p>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Name of Institution</label>
                                                                        <input type="text" class="form-control" name="institution" value="{{ Request::old('institution')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Course of Study</label>
                                                                        <input type="text" class="form-control" name="course" value="{{ Request::old('course')}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox float-lg-right">
                                                            <button type="submit" class="btn btn-reg">Create Account</button>
                                                        </div>
                                                    </div>
                                                </form>
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
<!--== Register Page Content End ==-->

@endsection