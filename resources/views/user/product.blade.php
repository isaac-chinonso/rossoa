@extends('layout.userapp')
@section('title')
My Product || ROSSOA
@endsection
@section('content')

<!-- Start Main Content Area -->
<main class="main-content-wrap style-two">
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>My Products</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li>
                            <button class="btn btn-success"><a href="{{ url('user/submit-product') }}" class="text-white">Submit New Product</a></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    @include('include.success')
    @include('include.warning')
    @include('include.error')
    <!-- Start Blog Post Area -->
    <div class="blog-post-area ptb-100">
        <div class="container-fluid">
            <div class="card-box-style">
                <div class="row">
                    @foreach($product as $prod)
                    <div class="col-md-4">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="#">
                                    <img src="../product/{{ $prod->image }}" alt="">
                                </a>
                                <span class="date"> {{ $prod->condition }}</span>
                            </div>

                            <div class="blog-content">
                                <h3>
                                    <a href="#">{{ $prod->name }} </a>
                                </h3>
                                <small>Brand: {{ $prod->brand }} </small><br>
                                <h5 class="my-0"><span class="me-2 text-danger">₦{{ number_format($prod->price, 0, '.', ', ') }}</span> <span class="text-muted">( {{ $prod->location }} )</span></h5>

                                <p style="font-size: 14px;">{{ $prod->description }}</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $prod->id }}"><i class="fa fa-trash text-danger"></i></a>

                            </div>

                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $prod->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <h4><strong>Confirm Deletion</strong></h4>
                                    <p>Are you sure you want to Delete {{ $prod->name }} </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                    <a href="{{ route('deleteuserproduct',$prod->id) }}" class="btn btn-danger btn-sm">Delete Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12">
                        <div class="pagination-area text-center">
                            <a href="#" class="next page-numbers">
                                <i class="ri-arrow-left-line"></i>
                            </a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>

                            <a href="#" class="next page-numbers">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End blog-post Area -->

    <div class="flex-grow-1"></div>



    @endsection