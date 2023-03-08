@extends('layouts.layout')
@section('content')
<?php
    use Carbon\carbon;
 ?>
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        @foreach ($banners as $banner)
                            <li>
                                <div class="seq-model">
                                    <img data-seq src="{{ $banner->photo }}" alt="" width="1920px"
                                        height="700px" />
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->

    <!-- banner section -->
    <section id="aa-banner" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            <a href="#"><img src="{{ url('upload') }}/parking-1.jpg" alt="fashion banner img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end banner section -->
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">tickets</a></li>
                                <li><a href="#featured" data-toggle="tab">food</a></li>
                                <li><a href="#latest" data-toggle="tab">zones</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        @foreach ($product_tickets as $product)
                                            <!-- start single product item -->
                                            <li style="height:350px;">
                                                <figure>
                                                    <form action="{{ url('cart/add-cart') }}" method="post" id="add-to-cart-form">
                                                        @csrf
                                                        <input type="hidden" value="1" name="quantity">
                                                        <input type="hidden" name="id"
                                                            value="{{ $product->product_id }}">
                                                        <a class="aa-product-img"
                                                            href="{{ url('tickets/detail/' . $product->product_id) }}"><img
                                                                src="{{ $product->photo }}"
                                                                style="width: 100%;height:250px"></a>
                                                        <button class="aa-add-card-btn" type="submit"><span
                                                                class="fa fa-shopping-cart" ></span>Add To Cart</button>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="#">{{ $product->name }}</a></h4>

                                                                    @foreach($promotions as $promotion)

                                                                    <?php
                                                                        $today = Carbon::now()->toDateString();
                                                                        if($today >= $promotion->start_date && $today <= $promotion->end_date) {
                                                                            if($promotion->menu == $product->menu){

                                                                                $today = Carbon::now()->dayOfWeek;
                                                                                if($today >= Carbon::MONDAY && $today <= Carbon::FRIDAY) { ?>
                                                                                    <span class="aa-product-price"><?= $sale_off ='$'. $product->price * (100 - $promotion->sale_off)/100;?></span>
                                                                                    <span class="aa-product-price"><del>${{ $product->price }}</del></span>

                                                                                <?php break;} ?>

                                                                                {{-- <span class="aa-product-price"><?= $sale_off ='$'. $product->price * (100 - $promotion->sale_off)/100;?></span>
                                                                                <span class="aa-product-price"><del>${{ $product->price }}</del></span> --}}

                                                                            <?php } ?>

                                                                        <?php } ?>

                                                                                <span class="aa-product-price">${{ $product->price }}</span>


                                                                    @endforeach

                                                                    <?php
                                                    if(!isset($promotion)){?>
                                                        <span class="aa-product-price">${{ $product->price }}</span>
                                                   <?php }
                                                        ?>
                                                        </figcaption>

                                                    </form>
                                                </figure>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                        @endforeach
                                    </ul>

                                    <a class="aa-browse-btn" href="{{url('tickets/index')}}">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular product category -->

                                <!-- start featured product category -->
                                <div class="tab-pane fade" id="featured">
                                    <div class="aa-latest-blog-single">
                                        <ul class="aa-product-catg aa-popular-slider">
                                            @foreach ($product_food as $product)
                                                <!-- start single product item -->
                                                <li style="height:350px;">
                                                    <figure class="aa-blog-img">
                                                        <a class="aa-product-img"
                                                            href="{{ url('food/detail/' . $product->product_id) }}"><img
                                                                src="{{ $product->photo }}"
                                                                style="width: 100%;height:250px"></a>
                                                    </figure>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                href="#">{{ $product->name }}</a></h4>
                                                        <span><a href="{{ url('food/detail/' . $product->product_id) }}"
                                                                style="color:#ff6666;">Read more </a></span>
                                                    </figcaption>

                                                </li>
                                                <!-- start single product item -->
                                            @endforeach
                                        </ul>

                                    </div>

                                    <a class="aa-browse-btn" href="{{url('food/index')}}">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>

                                <!-- / featured product category -->

                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <div class="aa-latest-blog-single">
                                        <ul class="aa-product-catg  aa-latest-slider">
                                            @foreach ($product_zones as $product)
                                                <!-- start single product item -->
                                                <li style="height:350px;">
                                                    <figure class="aa-blog-img">
                                                        <div style="height:250px">
                                                            <a class="aa-product-img"
                                                                href="{{ url('zones/detail/' . $product->product_id) }}"><img
                                                                    src="{{ $product->photo }}"
                                                                    style="width: 100%;height:250px"></a>
                                                        </div>
                                                    </figure>
                                                    <figcaption>
                                                        <h4 class="aa-product-title" style="font-weight:bold;" ><a
                                                                href="#" >{{ $product->name }}</a></h4>
                                                        <span><a href="{{ url('zones/detail/' . $product->product_id) }}"
                                                                style="color:#ff6666;">Read more </a></span>
                                                    </figcaption>
                                                </li>
                                                <!-- start single product item -->
                                            @endforeach
                                        </ul>

                                    </div>

                                    <a class="aa-browse-btn" href="{{url('zones/index')}}">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->

    <!-- Latest Blog -->
    <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>LATEST BLOG</h2>
                        <div class="row">
                            <!-- single latest blog -->
                            @foreach ($blogs_home as $blog)
                                <div class="col-md-4 col-sm-4">
                                    <div class="aa-latest-blog-single">
                                        <div class="card ">
                                            <div class="card-body">
                                                <figure class="aa-blog-img">
                                                    <a href="{{ url('news-details/' . $blog->id) }}"><img
                                                            src="{{ $blog->photo }}"></a>
                                                </figure>
                                            </div>
                                            <div class="card-footer aa-blog-info ">
                                                <div style="padding:10px 0; vertical-align: middle; ">
                                                    <p class="aa-blog-title" style="font-weight:bold; max-height:30px  ">
                                                        <a
                                                            href="{{ url('news-details/' . $blog->id) }}">{{ $blog->topic }}</a>
                                                    </p>
                                                </div>
                                                <a href="{{ url('news-details/' . $blog->id) }}"
                                                    class="aa-read-mor-btn">Read more <span
                                                        class="fa fa-long-arrow-right"></span></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest Blog -->
@endsection
