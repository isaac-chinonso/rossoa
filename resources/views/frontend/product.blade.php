@extends('layout.master2')
@section('title')
Market Place || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 style="font-size: 40px;color:#fff;font-weight:bolder;">Market Place</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!-- Shop Page Start  -->
<div class="shop-category-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area">

                    <!-- Tab Content Area Start -->
                    <div class="row">
                        <div class="col">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="shop-grid">
                                    <div class="row mb-n-30px">
                                        @foreach($products as $prod)
                                        <div class="col-md-4 col-sm-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                            <!-- Single Prodect -->
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="#" class="image">
                                                        <img src="product/{{ $prod->image }}" alt="Product" />
                                                        <img class="hover-image" src="product/{{ $prod->image }}" alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        <span class="new">{{ $prod->condition }}</span>
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <span class="ratings">
                                                        <span class="rating-num">{{ $prod->brand }} ( {{ $prod->location }} )</span>
                                                    </span>
                                                    <h5 class="title">{{ $prod->name }} </h5>
                                                    <span class="price">
                                                        <span class="new">₦{{ number_format($prod->price, 0, '.', ', ') }}</span>
                                                    </span>
                                                    <h6>{{ $prod->feature }}</h6><hr>
                                                    
                                                    <p style="font-size: 14px;">{{ $prod->description }}</p>
                                                    <button class="add-cart-button"><a href="https://api.whatsapp.com/send?phone=2349039129827&text={{ route('marketdetails', $prod->slug) }}" class="text-white"><i class="fa fa-whatsapp" style="font-size: 14px;"></i> Buy on Whatsapp</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Content Area End -->
                </div>
                <!-- Shop Bottom Area End -->
            </div>
        </div>
    </div>
</div>
<!-- Shop Page End  -->

@endsection