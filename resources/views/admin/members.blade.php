@extends('layout.adminapp1')
@section('title')
Members || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">RSSOSA Members</h4>

                        <div class="page-title-right">

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
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fullame</th>
                                            <th>Email</th>
                                            <th>Nickname</th>
                                            <th>Passing Year</th>
                                            <th>gender</th>
                                            <th>Occupation</th>
                                            <th>Location</th>
                                            <th>DOB</th>
                                            <th>BIO</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($user as $use)
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
                                            <td>{{ $use->profile->first()->description }}</td>

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