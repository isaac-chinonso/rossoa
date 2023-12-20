@extends('layout.adminapp2')
@section('title')
Forum Members || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Forum Members</h4>

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
                            <h4 class="card-title">Forum Members List</h4>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($forummembers as $members)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $members->user->profile->first()->fname }} {{ $members->user->profile->first()->lname }}</td>
                                            <td>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $members->id }}"><i class="fa fa-trash"></i></button>
                                                <!-- delete modal content -->
                                                <div id="responsive-modal2{{ $members->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Delete Member</h4>
                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4><strong>Confirm Deletion</strong></h4>
                                                                <p>Are you sure you want to Delete {{ $members->user->profile->first()->fname }} from forum</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <a href="{{ route('deleteforummembers',$members->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Member</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal -->
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