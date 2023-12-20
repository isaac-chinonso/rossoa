@extends('layout.master')
@section('title')
Reset Password || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Reset Password</h1>

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
                                    <!-- Regsiter Form Area Start -->
                                    <div class="col-lg-12 col-md-12 ml-auto">
                                        <div class="register-form-wrap">
                                            <h3>Reset Password</h3>
                                            <p>Enter your email below to proceed.</p>
                                            <div class="register-form">
                                                <form method="POST" action="{{ route('forget.password.post') }}">
                                                    @csrf
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Email Address</label>
                                                                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                                                                        @if ($errors->has('email'))
                                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox float-lg-right">
                                                            <button type="submit" class="btn btn-reg">Reset Password</button>
                                                        </div>
                                                    </div>
                                                    <p class="reg-text mb-0">Not registered? <a href="{{ url('login') }}">Register Now</a></p>
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