@extends('layout.userapp1')
@section('title')
Edit Job Opening || RSSOSA
@endsection
@section('content')

<main class="main-content-wrap style-two">
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>Edit Job Opening</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li><a href="{{ url('user/job') }}">Job Openings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <!-- Start Form Layouts Area -->
    <div class="form-layouts-area">
        <div class="container-fluid">
            <div class="card-box-style">
                <div class="others-title">
                    <h3>Edit Job Opening</h3>
                </div>

                <form method="post" action="{{ route('updateuserjob', $editjob->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Job Title</label>
                                <input name="title" type="text" class="form-control" value="{{ $editjob->title }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Company Name</label>
                                <input name="company" type="text" class="form-control" value="{{ $editjob->company }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Location</label>
                                <input name="location" type="text" class="form-control" value="{{ $editjob->location }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Experience</label>
                                <input name="experience" type="text" class="form-control" value="{{ $editjob->experience }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Job Type</label>
                                <select class="form-control select2" name="jobtype">
                                    <option selected value="{{ $editjob->jobtype }}">{{ $editjob->jobtype }}</option>
                                    <option disabled>Select another Job Type</option>
                                    <option value="Fulltime">Fulltime</option>
                                    <option value="Part-time">Part-time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Freelance">Freelance</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Company Logo</label>
                                <input name="image" type="file" class="form-control" value="{{ $editjob->companylogo }}">
                                <img src="../../job/{{ $editjob->companylogo }}" width="120px" height="80px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label>Job Description</label>
                                <textarea class="form-control" rows="5" name="description">{{ $editjob->description }}</textarea>
                            </div>
                        </div>
                    </div><br>
                    <div align="right">
                        <button class="btn btn-success">Update Job Opening</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- End Form Layouts Area -->

    <div class="flex-grow-1"></div>


    @endsection