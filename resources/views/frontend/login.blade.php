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
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" class="form-control" name="fname" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" name="lname" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nickname while in school</label>
                                                                <input type="text" class="form-control" name="nickname" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Passing Year</label>
                                                                <input type="text" class="form-control" name="entryyear" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Occupation</label>
                                                                <input type="text" class="form-control" name="occupation" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" name="email" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="gender form-group">
                                                                <label class="g-name d-block">Gender</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="register_gender_male" name="gender" value="mail" class="custom-control-input" />
                                                                    <label class="custom-control-label" for="register_gender_male">Male</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="register_gender_female" name="gender" value="female" class="custom-control-input">
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