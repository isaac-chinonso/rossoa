@extends('layout.master1')
@section('title')
Job Application || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Job Application Form</h1>

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
                                            <h3>Job Application Form <small>(Complete the Form Below)</small></h3>
                                            <div class="register-form">
                                                <form method="POST" action="{{ url('/save-job-application') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <h6><strong>Personal Information</strong></h6>
                                                    <hr>
                                                    <div class="row">
                                                        <input type="text" name="job_id" value="{{ $jobs->id }}" hidden>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Firstname</label>
                                                                <input type="text" class="form-control" name="fname" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Lastname</label>
                                                                <input type="text" class="form-control" name="lname" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" name="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone</label>
                                                                <input type="phone" class="form-control" name="phone" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Gender</label>
                                                                <select class="form-control" name="sex">
                                                                    <option selected disabled>Select Gender</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Date of Birth</label>
                                                                <input type="date" class="form-control" name="dob" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <textarea class="form-control" name="address"></textarea>
                                                            </div>
                                                        </div>
                                                    </div><br><br>

                                                    <h6><strong>Educational Background</strong></h6>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Highest Level of Education *</label>
                                                                <select class="form-control" name="education_level">
                                                                    <option selected disabled>Select Highest Level of Education</option>
                                                                    <option value="SSCE">SSCE</option>
                                                                    <option value="OND">OND</option>
                                                                    <option value="HND">HND</option>
                                                                    <option value="B.SC">B.SC</option>
                                                                    <option value="M.A">M.A</option>
                                                                    <option value="M.SC">M.SC</option>
                                                                    <option value="PhD">PhD</option>
                                                                    <option value="Others">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Course of Study *</label>
                                                                <input name="course" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Name of Institution *</label>
                                                                <input name="school_name" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Passout Grade *</label>
                                                                <input name="grade" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                    </div><br><br>

                                                    <h6><strong>Work Experience</strong></h6>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Previous Place of Work *</label>
                                                                <input name="last_work" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Duration *</label>
                                                                <input name="duration" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Location of Job *</label>
                                                                <input name="job_location" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Designation *</label>
                                                                <input name="designation" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Previous Salary *</label>
                                                                <input name="old_salary" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Expected Salary *</label>
                                                                <input name="new_salary" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label><i class="fa fa-upload"></i>Upload Your CV</label>
                                                                <input type="file" name="cv" class="form-control" class="d-none" />
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="form-group">
                                                        <button class="btn btn-reg" type="submit">Apply for Opening Position</button>
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