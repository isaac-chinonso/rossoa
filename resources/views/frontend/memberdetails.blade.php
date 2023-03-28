@extends('layout.master')
@section('title')
Members Directory || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Members Directory</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Directory Page Content Start ==-->
<section id="page-content-wrap">
    <div class="directory-page-content-warp section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="directory-text-wrap">
                        @if(isset($searchprofile))
                        @if(count($searchprofile) > 0)
                        @foreach($searchprofile as $profile)
                        <div class="directory-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Fullname</th>
                                        <th scope="col">Entry Year</th>
                                        <th scope="col">Nickname</th>
                                        <th scope="col">Occupation</th>
                                        <th scope="col">Gender</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $profile->fname }} {{ $profile->lname }}</td>
                                        <td>{{ $profile->entryyear }}</td>
                                        <td>{{ $profile->nickname }}</td>
                                        <td>{{ $profile->occupation }}</td>
                                        <td>{{ $profile->gender }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                        @else
                        <p>No Result Found</p>
                        <button class="btn btn-brand"><a href="{{ url('/members-directory') }}" class="text-white">Go back to Members</a></button>
                        @endif
                       
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--== Directory Page Content End ==-->

@endsection