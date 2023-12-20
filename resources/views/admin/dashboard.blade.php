@extends('layout.adminapp')
@section('title')
Dashboard || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>


                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Admin Dashboard</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assetsadmin/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($event as $event)
                    <div class="card">
                        <img class="card-img-top img-fluid" src="../event/{{ $event->coverimage }}" alt="Card image cap">
                        <div class="card-body">

                            <h2 class="card-title" style="font-size:30px;">{{ $event->title }}</h2>
                            <p class="card-text">
                            <h4> {{ $event->location }}</h4><br>
                            <h5 class="text-danger"> {{ $event->created_at->format('d M Y ') }}</h5>
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Total Members</p>
                                            <h4 class="mb-0">{{ $user }}</h4>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                <span class="avatar-title">
                                                    <i class="fa fa-users font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Total Blog Post</p>
                                            <h4 class="mb-0">{{ $blogpost }}</h4>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center ">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="fa fa-blog font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Total Products</p>
                                            <h4 class="mb-0">{{ $product }}</h4>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-secondary mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-secondary">
                                                    <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Total Dues Paid</p><br>
                                            <h4 class="mb-0">₦0.00</h4>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-info">
                                                <span class="avatar-title bg-info">
                                                    <i class="fa fa-wallet font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Total Forum Created</p>
                                            <h4 class="mb-0">{{ $forum }}</h4>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center ">
                                            <div class="avatar-sm rounded-circle bg-warning mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-warning">
                                                    <i class="fa fa-handshake font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Open Scholarship</p>
                                            <h4 class="mb-0">{{ $scholarship }}</h4>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-success mini-stat-icon">
                                                <span class="avatar-title rounded-circle bg-success">
                                                    <i class="fas fa-award font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex flex-wrap">
                                <h4 class="card-title mb-4">Recent Job Post</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Company</th>
                                            <th>location</th>
                                            <th>Experience</th>
                                            <th>Jop Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($job as $job)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $job->title }}</td>
                                            <td>{{ $job->company }}</td>
                                            <td>{{ $job->location }}</td>
                                            <td>{{ $job->experience }}</td>
                                            <td>{{ $job->jobtype }}</td>
                                        </tr>
                                        <?php $number++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Pending Users</h4>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Fullame</th>
                                                <th>Email</th>
                                                <th>Nickname</th>
                                                <th>Passing Year</th>
                                                <th>gender</th>
                                                <th>Occupation</th>
                                                <th>Location</th>
                                                <th>DOB</th>
                                                <th>Phone </th>
                                                <th>Alternative Phone</th>
                                                <th>Post Held While in School</th>
                                                <th>Post Held in Association</th>
                                                <th>Name of Institution</th>
                                                <th>Course of Study</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 1; ?>
                                            @foreach($users as $use)
                                            <tr>
                                                <td>{{ $number }}</td>
                                                <td>{{ $use->profile->first()->fname }}{{ $use->profile->first()->lname }}</td>
                                                <td>{{ $use->email }}</td>
                                                <td>{{ $use->profile->first()->nickname }}</td>
                                                <td>{{ $use->profile->first()->entryyear }}</td>
                                                <td>{{ $use->profile->first()->gender }}</td>
                                                <td>{{ $use->profile->first()->occupation }}</td>
                                                <td>{{ $use->profile->first()->location }}</td>
                                                <td>{{ $use->profile->first()->dob }}</td>
                                                <td>{{ $use->profile->first()->phone }}</td>
                                                <td>{{ $use->profile->first()->alt_phone }}</td>
                                                <td>{{ $use->profile->first()->post_held }}</td>
                                                <td>{{ $use->profile->first()->associate_post }}</td>
                                                <td>{{ $use->profile->first()->institution }}</td>
                                                <td>{{ $use->profile->first()->course }}</td>
                                                <td>
                                                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#activate{{ $use->id }}"> Approve </button>
                                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#decline{{ $use->id }}"> Decline </button>
                                                </td>
                                                <!--Approve modal content -->
                                                <div id="activate{{ $use->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Approve User</h4>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4><strong>Approve Registration</strong></h4>
                                                                <p>Are you sure you want to Approve Registration of <strong>{{ $use->profile->first()->fname }}{{ $use->profile->first()->lname }}</strong></p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <a href="{{ route('approveuserauth',$use->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Approve Registration</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal -->
                                                <!--Decline modal content -->
                                                <div id="decline{{ $use->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Decline User</h4>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4><strong>Decline Registration</strong></h4>
                                                                <p>Are you sure you want to Decline Registration of <strong>{{ $use->profile->first()->fname }}{{ $use->profile->first()->lname }}</strong></p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <a href="{{ route('declineuserauth',$use->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Decline Registration</a>
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
                                <!-- end table-responsive -->
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

                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

@endsection