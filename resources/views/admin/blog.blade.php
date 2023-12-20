@extends('layout.adminapp1')
@section('title')
Blog || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Blog Post</h4>

                        <div class="page-title-right">
                            <button class="btn btn-success"><a href="{{ url('admin/add-blog') }}" class="text-white">Add New Blog Post</a></button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                @foreach($blogpost as $blog)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="position-relative mb-3">
                                <img src="../{{ $blog->blog_image }}" alt="" class="img-thumbnail">
                            </div>
                            <h5 class="card-title"><a href="#" class="text-dark">{{ $blog->title }}</a></h5>
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-calendar align-middle text-muted me-1"></i> {{ $blog->created_at->format('d M Y ') }}
                                    </a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> {{ $blog->category->name }}
                                    </a>
                                </li>
                            </ul>
                            <p>{{ $blog->short_desc }}</p>

                            <div>
                                <a href="{{ route('blogview', $blog->slug) }}" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                            <div align="right">
                                <a href="{{ route('editblog', $blog->slug) }}"><i class="fas fa-pencil-alt text-primar"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $blog->id }}"><i class="fas fa-trash text-danger"></i></a>
                            </div>
                            <!-- modal content -->
                            <div id="responsive-modal2{{ $blog->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Delete Blog Post</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4><strong>Confirm Deletion</strong></h4>
                                            <p>Are you sure you want to Delete <strong>{{ $blog->title }}</strong> Post</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('deleteblog',$blog->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Blog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->

                        </div>


                    </div>
                </div>
                @endforeach
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