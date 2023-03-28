@extends('layout.adminapp1')
@section('title')
Event || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Event</h4>

                        <div class="page-title-right">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add New Event</button>
                        </div>
                        <!-- sample modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add New Event</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ url('admin/save-event') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Event Title</label>
                                                    <input type="text" name="title" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Cover Image</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Event Date</label>
                                                    <input type="date" name="date" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Event Location</label>
                                                    <input type="text" name="location" class="form-control">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Event Description</label>
                                                    <textarea class="form-control" name="description" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Add New Event</button>
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
                            <h4 class="card-title">Event List</h4>

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Location</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($event as $even)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td><img src="../event/{{ $even->coverimage }}" width="50px" height="50px"></td>
                                        <td>{{ $even->title }}</td>
                                        <td>{{ $even->created_at->format('d M Y ') }}</td>
                                        <td>{{ $even->location }}</td>
                                        <td>{{ $even->description }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $even->id }}">Delete</button>
                                            <!-- modal content -->
                                            <div id="responsive-modal2{{ $even->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete Event</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4><strong>Confirm Deletion</strong></h4>
                                                            <p>Are you sure you want to Delete {{ $even->title }} Event</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <a href="{{ route('deleteevent',$even->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Event</a>
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