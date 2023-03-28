@extends('layout.adminapp1')
@section('title')
Gallery || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Gallery </h4>

                        <div class="page-title-right">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add New Gallery Image </button>
                        </div>
                        <!-- sample modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add New Gallery Image </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ url('admin/save-gallery') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Gallery Category</label>
                                                    <select class="form-control" name="category_id">
                                                        <option selected disabled>Select Blog Category</option>
                                                        @foreach($gallerycategory as $gallery)
                                                        <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Gallery Image</label>
                                                    <input type="file" class="form-control" name="galleryimage">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Add Gallery Image </button>
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
                            <h4 class="card-title">Gallery List</h4>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($galleries as $gallery)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $gallery->category->name }}</td>
                                            <td><img src="../gallery/{{ $gallery->galleryimage }}" width="80px" height="50px"></td>
                                            <td> 
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $gallery->id }}"><i class="fas fa-trash text-danger"></i></a>
                                            </td>
                                            <!-- modal content -->
                                            <div id="responsive-modal2{{ $gallery->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete Gallery </h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4><strong>Confirm Deletion</strong></h4>
                                                            <p>Are you sure you want to Delete {{ $gallery->name }} </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('deletegallery',$gallery->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Gallery </a>
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