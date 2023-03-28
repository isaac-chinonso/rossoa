@extends('layout.master')
@section('title')
Birthday Celebrants || Rssosa
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Birthday Celebrants</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<section id="page-content-wrap">
    <div class="committee-content-wrap section-padding">
        <div class="committee-member-list">
            <div class="container">
                <div class="row">

                    @if (empty($birthday)))
                    <div class="col-md-12">
                        <h1 class="text-danger text-center">No Celebrants Today</h1>
                    </div>
                    @else
                    @foreach($birthday as $birth)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-committee-member">
                            <img src="file/{{ $birth->pimage }}" class="img-fluid img-thumbnail" alt="Committee" />
                            <h3> {{ $birth->fname }} {{ $birth->lname }}<br><span style="font-size: 13px;line-height:30px;text-transform:none;">Celebrating you  today... your humor, your charm, and all the ways you make this world a better place. Happy birthday!</span>  
                                <span class="committee-deg">{{ $birth->dob }}</span><br>
                            </h3>
                        </div>
                    </div>
                    @endforeach

                    @endif

                </div>

            </div>
        </div>
    </div>
</section>

@endsection