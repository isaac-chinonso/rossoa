@extends('layout.adminapp2')
@section('title')
Edit Blog Post || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Edit Blog Post</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">blog</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Blog Information</h4>

                            <form method="post" action="{{ route('adminupdateblog', $blogdetails->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Blog Title</label>
                                            <input name="title" type="text" class="form-control" value="{{ $blogdetails->title }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Blog Category</label>
                                            <select class="form-control" name="category_id">
                                                <option selected value="{{ $blogdetails->category->id }}">{{ $blogdetails->category->name }}</option>
                                                <option disabled>Select Other Category</option>
                                                @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Meta Description</label>
                                            <input name="short_desc" type="text" class="form-control" value="{{ $blogdetails->short_desc }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Blog Image</label>
                                            <input type="file" class="form-control" name="blog_image" value="{{$blogdetails->blog_image}}">
                                            <span><img src="{{asset($blogdetails->blog_image)}}" style="height: 50px; width: 50px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>Blog Content</label>
                                            <textarea class="form-control" id="editor" name="long_desc" rows="5">{!! $blogdetails->long_desc !!}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div align="right">
                                    <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Update Blog Post</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
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
                    </script> © ROSSA.
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