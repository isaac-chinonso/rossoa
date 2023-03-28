@extends('layout.adminapp1')
@section('title')
Products || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">RSSOSA Products</h4>

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
                            <h4 class="card-title">Rssosa Product List</h4>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Posted by</th>
                                            <th>Title</th>
                                            <th>Brand</th>
                                            <th>Price</th>
                                            <th>Location</th>
                                            <th>Condition</th>
                                            <th>Feature</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $number = 1; ?>
                                        @foreach($product as $prod)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td><img src="../product/{{ $prod->image }}" height="30px" width="30px"></td>
                                            <td>{{ $prod->user->profile->first()->fname }}{{ $prod->user->profile->first()->lname }}</td>
                                            <td>{{ $prod->name }}</td>
                                            <td>{{ $prod->brand }}</td>
                                            <td>{{ $prod->price }}</td>
                                            <td>{{ $prod->location }}</td>
                                            <td>{{ $prod->condition }}</td>
                                            <td>{{ $prod->feature }}</td>
                                            <td>{{ $prod->description }}</td>
                                            <td>
                                                @if($prod->status == 1)
                                                <span class="badge bg-success">Approved</span>
                                                @elseif($prod->status == 0)
                                                <span class="badge bg-danger">Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                <ul class="list-unstyled hstack gap-1 mb-0">
                                                    @if($prod->status == 0)
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                                                        <a href="{{ route('activateproduct', $prod->id) }}" class="btn btn-sm btn-soft-primary"><i class="mdi mdi-alert-circle-check-outline"></i></a>
                                                    </li>
                                                    @elseif($prod->status == 1)
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Deactivate">
                                                        <a href="{{ route('deactivateproduct', $prod->id) }}" class="btn btn-sm btn-soft-warning"><i class="mdi mdi-alert-remove"></i></a>
                                                    </li>
                                                    @endif
                                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $prod->id }}" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <!-- modal content -->
                                            <div id="responsive-modal2{{ $prod->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4><strong>Confirm Deletion</strong></h4>
                                                            <p>Are you sure you want to Delete {{ $prod->name }}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('deleteproduct',$prod->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Product</a>
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