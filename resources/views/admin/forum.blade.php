@extends('layout.adminapp1')
@section('title')
Forum || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Forum</h4>

                        <div class="page-title-right">
                            <button class="btn btn-success"><a href="{{ url('admin/pending-forum-members') }}" class="text-white">Pending Request</a></button>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add New Forum</button>
                        </div>
                        <!-- sample modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add New Forum</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ url('admin/save-forum') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Forum Name</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Add Forum</button>
                                        </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
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
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Forum Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($forums as $forum)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $forum->name }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary waves-effect waves-light">
                                                    <i class="fa fa-edit font-size-16 align-middle me-2" data-bs-toggle="modal" data-bs-target="#responsive-modal1{{ $forum->id }}"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                                    <i class="fa fa-times font-size-16 align-middle me-2" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $forum->id }}"></i>
                                                </button>
                                                <button type="button" class="btn btn-info waves-effect waves-light">
                                                    <i class="fa fa-user-plus font-size-16 align-middle me-2" data-bs-toggle="modal" data-bs-target="#addmember{{ $forum->id }}"></i>
                                                </button>
                                                <button type="button" class="btn btn-success waves-effect waves-light">
                                                    <a href="{{ route('forummembers', $forum->id) }}" class="text-white">
                                                        <i class="fa fa-users font-size-16 align-middle me-2"></i>
                                                    </a>
                                                </button>
                                            </td>
                                            <!-- modal content -->
                                            <div id="responsive-modal2{{ $forum->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete Forum</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4><strong>Confirm Deletion</strong></h4>
                                                            <p>Are you sure you want to Delete {{ $forum->name }} forum</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('deleteforum',$forum->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete forum</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal -->

                                            <!-- modal content -->
                                            <div id="responsive-modal1{{ $forum->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Edit forum</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{ route('updateforum', $forum->id) }}">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">forum Name</label>
                                                                        <input type="text" class="form-control" name="name" value="{{ $forum->name }}">
                                                                    </div>
                                                                </div>
                                                                <div class=" modal-footer ">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Update forum</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal -->

                                            <!-- modal content -->
                                            <div id="addmember{{ $forum->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Add Member to Forum</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{ route('addforummember') }}">
                                                                @csrf
                                                                <input type="text" name="group_id" value="{{ $forum->id }}" hidden>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Forum Member</label>
                                                                        <select class="form-control" name="user_id">
                                                                            <option selected disabled>Select Users</option>
                                                                            @foreach($users as $use)
                                                                            <option value="{{ $use->id }}">{{ $use->profile->first()->fname }} {{ $use->profile->first()->lname }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=" modal-footer ">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Add Member to Forum</button>
                                                                </div>
                                                            </form>
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
</div>
</div>
<!-- END layout-wrapper -->

@endsection