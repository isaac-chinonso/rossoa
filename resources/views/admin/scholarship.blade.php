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
                        <h4 class="mb-sm-0 font-size-18">Scholarship</h4>

                        <div class="page-title-right">
                            <button class="btn btn-success"><a href="{{ url('admin/submitted-scholarship') }}" class="text-white">Submitted Applications</a></button>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add New Scholarship</button>
                        </div>
                        <!-- sample modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add Scholarship</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ url('admin/save-scholarship') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Title</label>
                                                    <input type="text" name="title" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Closing Date</label>
                                                    <input type="date" name="closingdate" class="form-control">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Scholarship Requirement</label>
                                                    <input type="text" name="requirement" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Scholarship Image</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Additional Information</label>
                                                    <textarea class="form-control" rows="5" name="description" placeholder="Additional Information on Scholarship"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Add Scholarship</button>
                                        </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
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
                            <h4 class="card-title">Scholarship List</h4>
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <td>User</td>
                                            <th>Title</th>
                                            <th>Closing Date</th>
                                            <th>Requirement</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($scholarship as $schol)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $schol->user->profile->first()->fname }} {{ $schol->user->profile->first()->lname }}</td>
                                            <td>{{ $schol->title }}</td>
                                            <td>{{ $schol->closingdate }}</td>
                                            <td>{{ $schol->requirement }}</td>
                                            <td><img src="../scholarship/{{ $schol->scholarshipimage }}" width="120px" height="80px" alt=""></td>
                                            <td>{{ $schol->description }}</td>
                                            <td>
                                                @if($schol->status == 1)
                                                <span class="badge bg-success">Approved</span>
                                                @elseif($schol->status == 0)
                                                <span class="badge bg-danger">Pending</span>
                                                @endif
                                            </td>
                                            <td>

                                                <ul class="list-unstyled hstack gap-1 mb-0">
                                                    @if($schol->status == 0)
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                                                        <a href="{{ route('activatescholarship', $schol->id) }}" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-alert-circle-check-outline"></i></a>
                                                    </li>
                                                    @elseif($schol->status == 1)
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Deactivate">
                                                        <a href="{{ route('deactivatescholarship', $schol->id) }}" class="btn btn-sm btn-soft-warning"><i class="mdi mdi-alert-remove"></i></a>
                                                    </li>
                                                    @endif
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#responsive-modaledit{{ $schol->id }}" class="btn btn-sm btn-soft-info"><i class="mdi mdi-pencil-outline"></i></a>
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $schol->id }}" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <!-- modal content -->
                                            <div id="responsive-modal2{{ $schol->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete Scholarship</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4><strong>Confirm Deletion</strong></h4>
                                                            <p>Are you sure you want to Delete {{ $schol->title }} </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('deletescholarship',$schol->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Scholarship</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal -->

                                            <!-- sample modal content -->
                                            <div id="responsive-modaledit{{ $schol->id }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Edit Scholarship</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="{{ route('updatescholarship', $schol->id) }}" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Title</label>
                                                                        <input type="text" name="title" class="form-control" value="{{ $schol->title }}">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Closing Date</label>
                                                                        <input type="date" name="closingdate" class="form-control" value="{{ $schol->closingdate }}">
                                                                    </div>
                                                                </div><br>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Scholarship Requirement</label>
                                                                        <input type="text" name="requirement" class="form-control" value="{{ $schol->requirement }}">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Scholarship Image</label>
                                                                        <input type="file" name="image" class="form-control" value="{{ $schol->scholarshipimage }}">
                                                                        <img src="../scholarship/{{ $schol->scholarshipimage }}" width="60px" height="40px" alt="">
                                                                    </div>
                                                                </div><br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label>Additional Information</label>
                                                                        <textarea class="form-control" rows="5" name="description">{{ $schol->description }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success waves-effect waves-light">Update Scholarship</button>
                                                            </div>
                                                        </form>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

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