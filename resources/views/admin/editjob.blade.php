@extends('layout.adminapp2')
@section('title')
Add Job || ROSSOA
@endsection
@section('content')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add New Job Opening</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Job</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Job Opening Information</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <form method="post" action="{{ route('updatejob', $editjob->id) }}" enctype="multipart/form-data">
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
                                </div>

                                <div align="right">
                                <button type="button" class="btn btn-secondary waves-effect waves-light"><a href="{{ url('admin/jobs') }}" class="text-white">Cancel</a></button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Update Job Opening</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © ROSSA.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Doneready Digital
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

@endsection