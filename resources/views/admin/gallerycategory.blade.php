@extends('layout.adminapp1')
@section('title')
Gallery Category || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Gallery Category</h4>

                        <div class="page-title-right">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add New Gallery Category</button>
                        </div>
                        <!-- sample modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add New Gallery Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ url('admin/save-gallery-category') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Gallery Category Name</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Cover Image</label>
                                                    <input name="image" type="file" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Add Gallery Category</button>
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
                            <h4 class="card-title">Gallery Category List</h4>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Cover Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($gallerycategory as $cat)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $cat->name }}</td>
                                            <td><img src="../gallery/{{ $cat->coverimage }}" width="120px" height="80px" alt=""></td>
                                            <td> <i class="fas fa-pencil-alt text-primary" data-bs-toggle="modal" data-bs-target="#responsive-modal1{{ $cat->id }}"></i> &nbsp;&nbsp;
                                                <i class="fas fa-trash text-danger" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $cat->id }}"></i>
                                            </td>
                                            <!-- modal content -->
                                            <div id="responsive-modal2{{ $cat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete Gallery Category</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4><strong>Confirm Deletion</strong></h4>
                                                            <p>Are you sure you want to Delete {{ $cat->name }} Category</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('deletegallerycategory',$cat->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Gallery Category</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal -->

                                            <!-- modal content -->
                                            <div id="responsive-modal1{{ $cat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Edit Gallery Category</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{ route('updategallerycategory', $cat->id) }}">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Category Name</label>
                                                                        <input type="text" class="form-control" name="name" value="{{ $cat->name }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Cover Image</label>
                                                                        <input name="image" type="file" class="form-control" value="{{ $cat->companylogo }}">
                                                                        <img src="../job/{{ $cat->coverimage }}" width="120px" height="80px" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class=" modal-footer ">
                                                                    <button type="button " class="btn btn-light " data-bs-dismiss="modal ">Close</button>
                                                                    <button type="submit" class="btn btn-primary ">Update Gallery Category</button>
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