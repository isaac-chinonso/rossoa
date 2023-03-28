@extends('layout.adminapp2')
@section('title')
Vote Result || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Vote Result</h4>
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
                            <h4 class="card-title">Vote Result</h4>
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Candidate</th>
                                            <th>Position</th>
                                            <th>Vote Count</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($voteresult as $vote)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $vote->candidate->user->profile->first()->fname  }} {{ $vote->candidate->user->profile->first()->lname  }}</td>
                                            <td>{{ $vote->candidate->category->name  }}</td>
                                            <td>{{ $voteresultcount }}</td>
                                            <td></td>
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