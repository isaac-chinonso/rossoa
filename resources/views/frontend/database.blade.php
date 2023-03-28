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
                        <h2>Now we have <strong class="funfact-count">{{ $allusers }}</strong> members </h2>
                        <div class="table-search-area">
                            <form action="{{ route('searchmember') }}" method="GET">
                                <input type="search" name="search" placeholder="Name">
                                <input type="search" name="search1" placeholder="Class Set">
                               
                                <button type="submit" class="btn btn-brand">Search</button>
                            </form>
                        </div>

                        <div class="directory-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>

                                        <th scope="col">Class Set</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td><img src="https://png.pngtree.com/png-vector/20191101/ourlarge/pngtree-male-avatar-simple-cartoon-design-png-image_1934458.jpg" alt="table">{{ $user->profile->first()->fname }} {{ $user->profile->first()->lname }}</td>

                                        <td>{{ $user->profile->first()->entryyear }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--== Directory Page Content End ==-->

@endsection