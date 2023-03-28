@extends('layout.adminapp1')
@section('title')
Notice Board || ROSSOA
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
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Notice Board</h4>

                        <div class="page-title-right">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Add New Notice</button>
                        </div>
                        <!-- sample modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add New Notce</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ url('admin/save-notice-board') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Subject</label>
                                                    <input type="text" name="noticesubject" class="form-control">
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Notice</label>
                                                    <textarea class="form-control" name="notice"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Post to Notice Board</button>
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

            <div class="checkout-tabs">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">General Notice</h4>
                                <div class="faq-box d-flex mb-4">

                                    @foreach($noticeboard as $notice)
                                    <div class="flex-shrink-0 me-3 faq-icon">
                                        <i class="bx bx-help-circle font-size-20 text-success"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-35">{{ $notice->noticesubject }}</h5>
                                        <p class="text-muted">{{ $notice->notice }}</p>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#responsive-modal1{{ $notice->id }}"><i class="fa fa-edit"></i> Edit</a> |
                                        <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $notice->id }}"><i class="fa fa-trash"></i> Delete</a>
                                        <!-- modal content -->
                                        <div id="responsive-modal2{{ $notice->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete notice</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete {{ $notice->noticesubject }} notice</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('deletenotice',$notice->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete notice</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->

                                        <!-- modal content -->
                                        <div id="responsive-modal1{{ $notice->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Edit notice</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('updatenotice', $notice->id) }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label>Subject</label>
                                                                        <input type="text" name="noticesubject" class="form-control" value="{{ $notice->noticesubject }}">
                                                                    </div>
                                                                </div><br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label>Notice</label>
                                                                        <textarea class="form-control" name="notice">{{ $notice->notice }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=" modal-footer ">
                                                                <button type="button " class="btn btn-light " data-bs-dismiss="modal ">Close</button>
                                                                <button type="submit" class="btn btn-primary ">Update notice</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © RSSOSA.
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