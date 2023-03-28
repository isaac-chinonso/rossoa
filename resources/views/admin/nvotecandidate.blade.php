@extends('layout.adminapp2')
@section('title')
National Voting Candidate || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">RSSOSA National Voting Candidate</h4>

                        <div class="page-title-right">
                            <button class="btn btn-success"><a href="{{ url('admin/national-voting') }}" class="text-white">Go Back to Voting Category</a></button>
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
                            <h4 class="card-title">Rssosa Members List</h4>

                            <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Fullame</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                <?php $number = 1; ?>
                                    @foreach($votecandidate as $votecand)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $votecand->category->name }}</td>
                                        <td>{{ $votecand->user->profile->first()->fname }} {{ $votecand->user->profile->first()->lname }}</td>
                                        <td><img src="../../voting/{{ $votecand->candidate_image }}" width="80px" height="80px" alt=""></td>
                                        <td>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $votecand->id }}">Delete</button>
                                        </td>
                                    </tr>
                                    <?php $number++; ?>
                                    @endforeach

                                </tbody>
                            </table>

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