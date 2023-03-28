@extends('layout.master1')
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
<main>
    <!-- imageGalleryBlock -->
    <section class="shop-category-area pt-100px pb-100px">
        <div class="container-fluid">
            <div class="px-xlwd-17">
                <!-- isoContentHolder -->
                <div class="row isoContentHolder">
                    @foreach($gallery as $gal)
                    <div class="col-12 col-sm-4 col-xl-3 objects isoCol">
                        <!-- galFig -->
                        <figure class="galFig galFigII position-relative mx-auto mx-md-0 mb-6">
                            <a data-fancybox="gallery" href="../gallery/{{ $gal->galleryimage }}">
                                <img src="../gallery/{{ $gal->galleryimage }}" class="img-fluid img-thumbnail" style=" width: 100%;height: 200px;">
                            </a>
                            <!-- gafCaption -->
                            <div class="gafCaption inaccessible d-flex align-items-center justify-content-center text-center text-white w-100 h-100">
                                <div class="wrap w-100 p-4">
                                    <i class="rounded-circle icnWrap fa fa-search bg-brown d-flex align-items-center justify-content-center mx-auto mb-2"><span class="sr-only">icon</span></i>
                                </div>
                            </div>
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>

@endsection