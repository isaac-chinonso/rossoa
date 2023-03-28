@extends('layout.userapp')
@section('title')
Forum || ROSSOA
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
                        <h3>Forum</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Calendar Area -->
    <div class="calendar-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="performance-date">
                        <div class="main-title d-flex justify-content-between align-items-center">
                            <h3>Forum</h3>
                        </div>

                        <ul class="performance-date-list">
                            @foreach($forum as $forum)
                            <li>
                                <h3>{{ $forum->name }} Forum <span>( Date Created: {{ $forum->created_at->format('d M Y ') }} )</span></h3>
                                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal{{ $forum->id }}" style="padding: 7px;">Request Entry</button>
                                @foreach($forummember as $member)
                                @if($member->group_id == $forum->id && $member->status == 0)
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal{{ $forum->id }}" style="padding: 7px;color:#fff;">Request Pending</button>
                                @elseif($member->group_id == $forum->id && $member->status == 1)
                                <button class="btn btn-success" style="padding: 7px;"><a href="{{ route('userforumchat', $member->group_id) }}" class="text-white">Open Forum</a></button>
                                @endif
                                @endforeach
                            
                            </li>
                            <!-- sample modal content -->
                            <div id="myModal{{ $forum->id }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Request Forum Entry</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="{{ url('user/join-forum') }}">
                                            @csrf
                                            <div class="modal-body">
                                                <h4><strong>Confirm Request</strong></h4>
                                                <p>Are you sure you want to Join <strong>{{ $forum->name }}</strong> Forum</p>
                                                <input type="text" name="group_id" value="{{ $forum->id }}" hidden>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Request Access</button>
                                            </div>
                                        </form>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Calendar Area -->

    <div class="flex-grow-1"></div>


    @endsection