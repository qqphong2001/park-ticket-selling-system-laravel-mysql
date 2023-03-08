@extends('layouts.layout')
@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        @foreach($banners as $banner)
        <img src="{{ $banner->photo }}" alt="">
        @endforeach
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Zones</h2>
                    {{-- <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Women</li>
                    </ol> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->


    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">keansburg park</a></li>
                                <li><a href="#featured" data-toggle="tab">runaway rapids</a></li>
                                <li><a href="#latest" data-toggle="tab">go-karts</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <div class="aa-latest-blog-single">
                                        <ul class="aa-product-catg ">
                                            @foreach ($product_zones_1 as $product)
                                                <!-- start single product item -->
                                                <li style="height:350px;">
                                                    <figure class="aa-blog-img">
                                                        <a class="aa-product-img"
                                                            href="{{ url('zones/detail/'. $product->product_id) }}"><img
                                                                src="{{ $product->photo }}"
                                                                style="width: 100%;height:250px"></a>
                                                    </figure>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                href="#">{{ $product->name }}</a></h4>
                                                        <span><a href="{{ url('zones/detail/' . $product->product_id) }}"
                                                                style="color:#ff6666;">Read more </a></span>
                                                    </figcaption>

                                                </li>
                                                <!-- start single product item -->
                                            @endforeach
                                        </ul>

                                    </div>


                                </div>
                                <!-- / popular product category -->

                                <!-- start featured product category -->
                                <div class="tab-pane fade" id="featured">
                                    <div class="aa-latest-blog-single">
                                        <ul class="aa-product-catg ">
                                            @foreach ($product_zones_2 as $product)
                                                <!-- start single product item -->
                                                <li style="height:350px;">
                                                    <figure class="aa-blog-img">
                                                        <a class="aa-product-img"
                                                            href="{{ url('zones/detail/' . $product->product_id) }}"><img
                                                                src="{{ $product->photo }}"
                                                                style="width: 100%;height:250px"></a>
                                                    </figure>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                href="#">{{ $product->name }}</a></h4>
                                                        <span><a href="{{ url('zones/detail/' . $product->product_id) }}"
                                                                style="color:#ff6666;">Read more </a></span>
                                                    </figcaption>

                                                </li>
                                                <!-- start single product item -->
                                            @endforeach
                                        </ul>

                                    </div>


                                </div>

                                <!-- / featured product category -->

                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <div class="aa-latest-blog-single">
                                        <ul class="aa-product-catg  ">
                                            @foreach ($product_zones_3 as $product)
                                                <!-- start single product item -->
                                                <li style="height:350px;">
                                                    <figure class="aa-blog-img">
                                                        <a class="aa-product-img"
                                                            href="{{ url('zones/detail/' . $product->product_id) }}"><img
                                                                src="{{ $product->photo }}"
                                                                style="width: 100%;height:250px"></a>
                                                    </figure>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                href="#">{{ $product->name }}</a></h4>
                                                        <span><a href="{{ url('zones/detail/' . $product->product_id) }}"
                                                                style="color:#ff6666;">Read more </a></span>
                                                    </figcaption>

                                                </li>
                                                <!-- start single product item -->
                                            @endforeach
                                        </ul>

                                    </div>


                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / product category -->

@endsection
