@extends('layout.adminapp1')
@section('title')
Jobs || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Jobs Openings</h4>
                        <div class="page-title-right">
                            <button class="btn btn-success"><a href="{{ url('admin/jobs') }}" class="text-white">Back to Jobs</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('include.success')
            @include('include.warning')
            @include('include.error')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Job Openings List</h4>
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-bordered  w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Job Title</th>
                                            <th>Fullname</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Level of Education</th>
                                            <th>Course of Study</th>
                                            <th>Name of Institution</th>
                                            <th>Passout Grade</th>
                                            <th>Previous Place of Work</th>
                                            <th>Duration</th>
                                            <th>Location of Job</th>
                                            <th>Designation</th>
                                            <th>Previous Salary </th>
                                            <th>Expected Salary</th>
                                            <th>CV </th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($submittedjobs as $job)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $job->job->title }}</td>
                                            <td>{{ $job->fname }} {{ $job->lname }}</td>
                                            <td>{{ $job->email }}</td>
                                            <td>{{ $job->phone }}</td>
                                            <td>{{ $job->dob }}</td>
                                            <td>{{ $job->sex }}</td>
                                            <td>{{ $job->address }}</td>
                                            <td>{{ $job->education_level }}</td>
                                            <td>{{ $job->course }}</td>
                                            <td>{{ $job->school_name }}</td>
                                            <td>{{ $job->grade }}</td>
                                            <td>{{ $job->last_work }}</td>
                                            <td>{{ $job->duration }}</td>
                                            <td>{{ $job->job_location }}</td>
                                            <td>{{ $job->designation }}</td>
                                            <td>{{ $job->old_salary }}</td>
                                            <td>{{ $job->new_salary }}</td>
                                            <td><a href="../file/{{ $job->cv }}" target="_blank">{{ $job->cv }}</a></td>
                                        </tr>
                                        <?php $number++; ?>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

            </div>
            <!--end row-->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Modal -->
    <div class="modal fade" id="jobDelete" tabindex="-1" aria-labelledby="jobDeleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body px-4 py-5 text-center">
                    <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="avatar-sm mb-4 mx-auto">
                        <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                            <i class="mdi mdi-trash-can-outline"></i>
                        </div>
                    </div>
                    <p class="text-muted font-size-16 mb-4">Are you sure you want to permanently erase the job.</p>

                    <div class="hstack gap-2 justify-content-center mb-0">
                        <button type="button" class="btn btn-danger">Delete Now</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © ROSSA.
                </div>

            </div>
        </div>
    </footer>
</div>
<!-- end main content-->


@endsection