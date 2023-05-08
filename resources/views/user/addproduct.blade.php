@extends('layout.userapp')
@section('title')
Submit Product || RSSOSA
@endsection
@section('content')

<main class="main-content-wrap style-two">
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>Submit New Product</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li><a href="{{ url('user/product') }}">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <!-- Start Form Layouts Area -->
    <div class="form-layouts-area">
        <div class="container-fluid">
            <div class="card-box-style">
                <div class="others-title">
                    <h3>Submit Product for Approval</h3>
                </div>

                <form method="post" action="{{ url('user/save-product') }}" enctype="multipart/form-data">
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
                        <button class="btn btn-success">Submit Product</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- End Form Layouts Area -->

    <div class="flex-grow-1"></div>


    @endsection