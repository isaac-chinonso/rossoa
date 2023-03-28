@extends('layout.adminapp2')
@section('title')
Pending Forum Members || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Pending Forum Member Request</h4>

                        <div class="page-title-right">
                            <button class="btn btn-success"><a href="{{ url('admin/forum') }}" class="text-white">Back to Forum</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pending Forum Member Request List</h4>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fullname</th>
                                            <th>Forum Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($pendingforummembers as $members)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $members->user->profile->first()->fname }} {{ $members->user->profile->first()->lname }}</td>
                                            <td>{{ $members->forum->name }}</td>
                                            <td>
                                                <span class="badge bg-warning">Pending</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-sm"><a href="{{ route('approvememberrequest', $members->id) }}" class="text-white">Approve Request</a></button>
                                                <button class="btn btn-danger btn-sm"><a href="{{ route('deletemember', $members->id) }}" class="text-white">Delete Request</a></button>
                                            </td>
                                        </tr>
                                        <?php $number++; ?>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
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
                    </script> © ROSSA
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