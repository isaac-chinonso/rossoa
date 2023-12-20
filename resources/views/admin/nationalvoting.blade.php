@extends('layout.adminapp1')
@section('title')
National Voting || ROSSOA
@endsection
@section('content')
<link href="../assetsadmin/css/select2.min.css" rel="stylesheet" />

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
                        <h4 class="mb-sm-0 font-size-18">Vote Data</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('include.success')
            @include('include.warning')
            @include('include.error')
            <div class="row">
                <div class="col-md-4 d-grid gap-2">
                    <button class="btn btn-success btn-block waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#responsive-modal2">Add National Voting Positions</button>
                    <!-- modal content -->
                    <div id="responsive-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Add National Voting Positions</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form method="POST" action="{{ url('admin/save-vote-category') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Candidate Position</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success waves-effect waves-light">Add Position</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal -->
                </div>
                <div class="col-md-4 d-grid gap-2">
                    <button class="btn btn-success btn-block" data-bs-toggle="modal" data-bs-target="#responsive-modalcandidate">Add Candidate</button>
                    <!-- modal content -->
                    <div id="responsive-modalcandidate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Add National Voting Candidate</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form method="POST" action="{{ url('admin/save-vote-candidate') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Candidate Name</label>
                                                <select class="form-control" name="user_id" id="user-select">
                                                    @foreach($user as $use)
                                                    <option selected disabled>Select Users</option>
                                                    <option value="{{ $use->id }}">{{ $use->profile->first()->fname }} {{ $use->profile->first()->lname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Candidate Position</label>
                                                <select class="form-control" name="category_id">
                                                    <option selected disabled> Select Position</option>
                                                    @foreach($votecategory as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Candidate Picture</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success waves-effect waves-light">Add Candidate</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal -->
                </div>
                <div class="col-md-4 d-grid gap-2">
                    <button class="btn btn-success btn-block" data-bs-toggle="modal" data-bs-target="#responsive-modaldate">Set Vote Date/Time</button>
                    <!-- modal content -->
                    <div id="responsive-modaldate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Add National Voting Date/Time</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form method="POST" action="{{ url('admin/save-vote-date') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Category</label>
                                                <select class="form-control" name="category_id">
                                                    <option selected disabled> Select Position</option>
                                                    @foreach($votecategory as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Start Date</label>
                                                <input type="date" class="form-control" name="start">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>End Date</label>
                                                <input type="date" class="form-control" name="end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success waves-effect waves-light">Set Date/Time</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal -->
                </div>
            </div><br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">National Voting Categoriess</h4>
                            <p class="card-title-desc"> This table display the categories for National Voting
                            </p>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Voting Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($votecategory as $votecat)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $votecat->name }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" title="Edit National Voting Category" data-bs-toggle="modal" data-bs-target="#responsive-modal1{{ $votecat->id }}">
                                                    <i class="fa fa-edit font-size-16 align-middle me-2"></i> Edit Category
                                                </button>
                                                <button type="button" class="btn btn-success waves-effect waves-light" title="Voting Category Candidate">
                                                    <a href="{{ route('nationalvotingcandidate', $votecat->id) }}" class="text-white"> <i class="fa fa-users font-size-16 align-middle me-2"></i> Candidates</a>
                                                </button>
                                                <button type="button" class="btn btn-info waves-effect waves-light" title="Voting Category Result">
                                                    <a href="{{ route('voteresult', $votecat->id) }}" class="text-white"> <i class="fa fa-file-alt font-size-16 align-middle me-2"></i> Results</a>
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light" title="Voting Category Result">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete-category{{ $votecat->id }}" class="text-white"> <i class="fa fa-trash font-size-16 align-middle me-2"></i> Delete Category</a>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- modal content -->
                                        <div id="delete-category{{ $votecat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Voting Category</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete <strong>{{ $votecat->name }}</strong> Category</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('deletevotecategory',$votecat->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Voting Category</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                        <!-- modal content -->
                                        <div id="responsive-modal1{{ $votecat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Edit voting categoy</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('updatevotingcategory', $votecat->id) }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label class="form-label">voting Category Name</label>
                                                                    <input type="text" class="form-control" name="name" value="{{ $votecat->name }}">
                                                                </div>
                                                            </div>
                                                            <div class=" modal-footer ">
                                                                <button type="button " class="btn btn-light " data-bs-dismiss="modal ">Close</button>
                                                                <button type="submit" class="btn btn-primary ">Update Voting Category</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Voting Date</h4>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>StartDate</th>
                                            <th>EndDate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($votedate as $votedate)
                                        <tr>
                                            <td>{{ $votedate->category->name }}</td>
                                            <td>{{ $votedate->start }}</td>
                                            <td>{{ $votedate->end }}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger waves-effect waves-light" title="Delete Date/Time" data-bs-toggle="modal" data-bs-target="#responsive-modalvotedate{{ $votedate->id }}">
                                                    <i class="fa fa-trash font-size-16 align-middle me-2"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- modal content -->
                                        <div id="responsive-modalvotedate{{ $votedate->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Voting Date/Time</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete Voting Date/Time</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('deletevotedate', $votedate->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Voting Date/Time</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assetsadmin/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#user-select').select2();
    });
</script>

@endsection