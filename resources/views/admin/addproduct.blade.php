@extends('layout.adminapp1')
@section('title')
Add Product || ROSSOA
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
                        <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Ecommerce</li>
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

                            <h4 class="card-title">Product Information</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <form method="post" action="{{ url('admin/save-product') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Product Name</label>
                                            <input name="name" type="text" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Brand Name</label>
                                            <input name="brand" type="text" class="form-control" placeholder="Brand Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Location</label>
                                            <input name="location" type="text" class="form-control" placeholder="location">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Price</label>
                                            <input name="price" type="text" class="form-control" placeholder="Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">Condition</label>
                                            <select class="form-control select2" name="condition">
                                                <option selected disabled>Select Product Condition</option>
                                                <option value="New">Brand New</option>
                                                <option value="Used">Fairly Used</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label">Features</label>
                                                <input name="feature" type="text" class="form-control" placeholder="Enter Product Features">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Product Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>Product Description</label>
                                            <textarea class="form-control" rows="5" name="description" placeholder="Product Description"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div align="right">
                                    <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Add Product</button>
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