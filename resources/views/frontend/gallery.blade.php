@extends('layout.master2')
@section('title')
Gallery || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 style="font-size: 40px;color:#fff;font-weight:bolder;">Gallery</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Gallery Page Content Start ==-->
<section class="shop-category-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            @foreach($gallerycategory as $galcat)
            <div class="col-md-6 col-sm-12" style="padding-bottom:40px ;">
                <!-- ueEveColumn -->
                <article class="ueEveColumn d-sm-flex w-100 position-relative border mb-6 mb-lg-10">
                    <time datetime="2011-01-12" class="ueecTimeTag position-absolute text-uppercase d-flex bg-white text-secondary">
                        <span class="d-flex align-items-center px-2" style="background-color: #2FA138;color:#fff;">{{ $galcat->created_at->format('d M Y ') }}</span>
                    </time>
                    <div class="imgHolder">
                        <img src="gallery/{{ $galcat->coverimage }}" style=" width: 100%;height: 200px;">
                    </div>
                    <div class="descrWrap pt-5 pb-7 pl-5 pr-3">
                        <h2 class="h2Small h2SmallViv mb-2">
                            <a href="#">{{ $galcat->name }}</a>
                        </h2>
                        <button  class="add-cart-button"><a href="{{URL::to('gallery/'.$galcat->id.$galcat->slug)}}" class="text-white">See Photos</a></button>
                    </div>
                </article>
            </div> 
            @endforeach       
        </div>
        <!-- btnHolder -->
        
    </div>
</section>
<!--== Gallery Page Content End ==-->

@endsection