@extends('layout.adminapp1')
@section('title')
Scholarship || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Scholarship Openings</h4>
                        <div class="page-title-right">
                            <button class="btn btn-success"><a href="{{ url('admin/jobs') }}" class="text-white">Back to Scholarships</a></button>
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
                            <h4 class="card-title">Scholarship Openings List</h4>
                            <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Scholarship Title</th>
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
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($submittedscholarship as $scholarship)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $scholarship->scholarship->title }}</td>
                                            <td>{{ $scholarship->fname }} {{ $scholarship->lname }}</td>
                                            <td>{{ $scholarship->email }}</td>
                                            <td>{{ $scholarship->phone }}</td>
                                            <td>{{ $scholarship->dob }}</td>
                                            <td>{{ $scholarship->sex }}</td>
                                            <td>{{ $scholarship->address }}</td>
                                            <td>{{ $scholarship->education_level }}</td>
                                            <td>{{ $scholarship->course }}</td>
                                            <td>{{ $scholarship->school_name }}</td>
                                            <td>{{ $scholarship->grade }}</td>
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