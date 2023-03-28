@extends('layout.master')
@section('title')
Career || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Job Opportunity</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Single Album Page Content Start ==-->
<section id="page-content-wrap">
    <div class="career-page-wrapper">
        <div class="career-page-topbg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <img src="assets/img/careerbg.png" class="img-fluid" alt="career">
                    </div>
                </div>
            </div>
        </div>

        <div class="career-page-content-wrap section-padding">
            <div class="container">

                <div class="job-opportunity-wrapper">
                    <div class="row">
                        @foreach($jobs as $job)
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="single-job-opportunity">
                                <div class="job-opportunity-text">
                                    <div class="job-oppor-logo">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <img src="../job/{{ $job->companylogo }}" alt="Job">
                                            </div>
                                        </div>
                                    </div>
                                    <h3><a href="#">{{ $job->title }}</a></h3>
                                    <span class="text-muted">{{ $job->location }} | {{ $job->experience }} | {{ $job->jobtype }}</span>
                                    <p>{{ $job->description }}</p>
                                </div>
                                <a href="{{ url('/job-application-form', $job->id) }}" class="btn btn-job">Apply now</a>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Single Album Page Content End ==-->

@endsection