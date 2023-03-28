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
                            <button class="btn btn-success"><a href="{{ url('admin/submitted-jobs') }}" class="text-white">Submitted Applications</a></button>
                            <button class="btn btn-success"><a href="{{ url('admin/add-job') }}" class="text-white">Add Job Opening</a></button>
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
                                            <th>User</th>
                                            <th>Title</th>
                                            <th>Company Logo</th>
                                            <th>Company</th>
                                            <th>location</th>
                                            <th>Experience</th>
                                            <th>Jop Type</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($jobs as $job)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $job->user->profile->first()->fname }} {{ $job->user->profile->first()->lname }}</td>
                                            <td>{{ $job->title }}</td>
                                            <td>{{ $job->company }}</td>
                                            <td><img src="../job/{{ $job->companylogo }}" width="120px" height="80px" alt=""></td>
                                            <td>{{ $job->location }}</td>
                                            <td>{{ $job->experience }}</td>
                                            <td>{{ $job->jobtype }}</td>
                                            <td>{{ $job->description }}</td>
                                            <td>
                                                @if($job->status == 1)
                                                <span class="badge bg-success">Approved</span>
                                                @elseif($job->status == 0)
                                                <span class="badge bg-danger">Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                <ul class="list-unstyled hstack gap-1 mb-0">
                                                    @if($job->status == 0)
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                                                        <a href="{{ route('activatejob', $job->id) }}" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-alert-circle-check-outline"></i></a>
                                                    </li>
                                                    @elseif($job->status == 1)
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Deactivate">
                                                        <a href="{{ route('deactivatejob', $job->id) }}" class="btn btn-sm btn-soft-warning"><i class="mdi mdi-alert-remove"></i></a>
                                                    </li>
                                                    @endif
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <a href="{{ route('editjob', $job->id) }}" class="btn btn-sm btn-soft-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $job->id }}" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <!-- modal content -->
                                            <div id="responsive-modal2{{ $job->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete Job</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4><strong>Confirm Deletion</strong></h4>
                                                            <p>Are you sure you want to Delete {{ $job->title }} </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('deletejob',$job->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Job</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal -->

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