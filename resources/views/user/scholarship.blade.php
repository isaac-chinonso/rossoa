@extends('layout.userapp')
@section('title')
Scholarship || ROSSOA
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
                        <h3>Posted Scholarships</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="page-title-list">
                        <li>
                            <button class="btn btn-success"><a href="{{ url('user/submit-scholarship') }}" class="text-white">Submit New Scholarship</a></button>
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
    <!-- Start Contact List Area -->
    <div class="contact-list-area">
        <div class="container-fluid">
            <div class="table-responsive" data-simplebar>
                <div class="others-title">
                    <h3>Scholarship</h3>
                </div>

                <table class="table align-middle mb-0">
                    <thead>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Closing Date</th>
                        <th>Requirement</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $number = 1; ?>
                        @foreach($scholarship as $schol)
                        <tr>
                            <td>{{ $number }}</td>
                            <td>{{ $schol->title }}</td>
                            <td>{{ $schol->closingdate }}</td>
                            <td>{{ $schol->requirement }}</td>
                            <td><img src="../scholarship/{{ $schol->scholarshipimage }}" width="120px" height="80px" alt=""></td>
                            <td>{{ $schol->description }}</td>
                            <td>
                                @if($schol->status == 1)
                                <span class="alert alert-success" style="padding: 5px;">Approved</span>
                                @elseif($schol->status == 0)
                                <span class="alert alert-danger" style="padding: 5px;">Pending</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edituserscholarship', $schol->id) }}" class="text-white"><i class="fa fa-edit text-primary"></i></a><br><br>
                                <a href="{{ route('deleteuserscholarship',$schol->id) }}" ><i class="fa fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                       

                        <?php $number++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Contact List Area -->

    <div class="flex-grow-1"></div>


    @endsection