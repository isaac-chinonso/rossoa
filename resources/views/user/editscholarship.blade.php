@extends('layout.userapp1')
@section('title')
Edit Scholarship || RSSOSA
@endsection
@section('content')

<main class="main-content-wrap style-two">
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="page-title">
                        <h3>Edit Scholarship</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li><a href="{{ url('user/scholarship') }}">Scholarship</a></li>
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
                    <h3>Edit Scholarship</h3>
                </div>

                <form method="post" action="{{ route('updateuserscholarship', $schol->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $schol->title }}">
                        </div>
                        <div class="col-md-6">
                            <label>Closing Date</label>
                            <input type="date" name="closingdate" class="form-control" value="{{ $schol->closingdate }}">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Scholarship Requirement</label>
                            <input type="text" name="requirement" class="form-control" value="{{ $schol->requirement }}">
                        </div>
                        <div class="col-md-6">
                            <label>Scholarship Image</label>
                            <input type="file" name="image" class="form-control" value="{{ $schol->scholarshipimage }}">
                            <img src="../../scholarship/{{ $schol->scholarshipimage }}" width="60px" height="40px" alt="">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Additional Information</label>
                            <textarea class="form-control" rows="5" name="description">{{ $schol->description }}</textarea>
                        </div>
                    </div><br>
                    <div align="right">
                        <button class="btn btn-success">Update Scholarship</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- End Form Layouts Area -->

    <div class="flex-grow-1"></div>


    @endsection