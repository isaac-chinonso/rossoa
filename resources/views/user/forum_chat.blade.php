@extends('layout.userapp1')
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

    <!-- Start Chat Area -->
    <div class="chat-content-area mt-20">
        <div class="container-fluid">
            <div class="row">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="col-md-8">
                    <div class="content-right">
                        <div class="chat-area">
                            <div class="chat-list-wrapper">
                                <div class="chat-list">
                                    <div class="chat-list-header d-flex align-items-center">
                                        <div class="header-left d-flex align-items-center me-2">
                                            <div class="avatar me-2">
                                                <img src="../../assetsuser/images/chat/chat-1.png" class="rounded-circle" alt="image">
                                                <!-- <span class="status-online"></span> -->
                                            </div>
                                            <div>
                                                <h6 class="mb-0 font-weight-bold">{{ $forums->forum->name }}</h6>
                                                <span>{{ $forums->forum->created_at->format('d M Y ') }}</span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-container" data-simplebar>
                                        <div class="chat-content">
                                            @foreach($forumconversation as $forumchat)
                                            @if($forumchat->user->role_id == 1)
                                            <div class="chat">
                                                <div class="chat-avatar">
                                                    <a href="#" class="d-inline-block">
                                                        <img src="../../assetsuser/images/chat/chat-6.png" width="50" height="50" class="rounded-circle" alt="image">
                                                    </a>
                                                </div>

                                                <div class="chat-body">
                                                    <div class="chat-message">
                                                        <small class="text-primary">{{ $forumchat->user->profile->first()->fname }} {{ $forumchat->user->profile->first()->lname }}</small>
                                                        <h5>{{ $forumchat->message }}</h5>
                                                        <small class="text-info">{{ $forumchat->created_at->diffForHumans() }}</small>
                                                    </div>
                                                </div>
                                            </div>

                                            @else
                                            <div class="chat chat-left">
                                                <div class="chat-avatar">
                                                    <a href="#" class="d-inline-block">
                                                        <img src="../../assetsuser/images/chat/chat-1.png" width="50" height="50" class="rounded-circle" alt="image">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-message">
                                                        <small class="text-primary">{{ $forumchat->user->profile->first()->fname }} {{ $forumchat->user->profile->first()->lname }}</small>
                                                        <h5>{{ $forumchat->message }}</h5>
                                                        <small class="text-info">{{ $forumchat->created_at->diffForHumans() }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="chat-list-footer">
                                        <form class="d-flex align-items-center" method="post" action="{{ route('sendmessage') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" value="{{ $forums->group_id }}" name="group_id" hidden>
                                                <input type="text" class="form-control" name="message" placeholder="Type your message...">

                                                <ul class="others-option-list">
                                                    <li>
                                                        <a href="#" class="second">
                                                            <img src="../../assetsuser/images/icon/gallery.svg" alt="gallery">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <button type="submit" class="send-btn d-inline-block">
                                                <span>Send</span>
                                                <img src="../../assetsuser/images/icon/send-2.svg" alt="send-2">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>{{ $forums->forum->name }} Members</h4>
                    <hr>
                    @foreach($forum as $members)
                    <li>{{ $members->user->profile->first()->fname }} {{ $members->user->profile->first()->lname }}</li><hr>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- End Chat Area -->

    <div class="flex-grow-1"></div>


    @endsection