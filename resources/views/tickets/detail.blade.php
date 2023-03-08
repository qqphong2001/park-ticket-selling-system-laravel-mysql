@extends('layouts.layout')
@section('content')
<?php use Carbon\carbon;?>
    <section id="aa-catg-head-banner">
        @foreach($banners as $banner)
            <img src="{{ $banner->photo }}" width="100%" height="300px">
        @endforeach
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>FOOD</h2>
                    {{-- <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ol> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div class="simpleLens-container">
                                                <div class="simpleLens-big-image-container"><a data-lens-image=""
                                                        class="simpleLens-lens-image"><img src="{{ $product->photo }}" style="
                                                        width: inherit;
                                                    "></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">

                                        <h3>{{ $product->name }}</h3>
                                        @foreach($promotions as $promotion)

                                        <?php
                                            $today = Carbon::now()->toDateString();
                                            if($today >= $promotion->start_date && $today <= $promotion->end_date) {
                                                if($promotion->menu == $product->menu){

                                                    $today = Carbon::now()->dayOfWeek;
                                                    if($today >= Carbon::MONDAY && $today <= Carbon::FRIDAY) { ?>
                                                        <span class="aa-product-price" style="color: red"><?= $sale_off ='$'. $product->price * (100 - $promotion->sale_off)/100;?></span>
                                                        <span class="aa-product-price" style="color: red"><del>${{ $product->price }}</del></span>

                                                    <?php break;} ?>

                                                    {{-- <span class="aa-product-price"><?= $sale_off ='$'. $product->price * (100 - $promotion->sale_off)/100;?></span>
                                                    <span class="aa-product-price"><del>${{ $product->price }}</del></span> --}}

                                                <?php } ?>

                                            <?php } ?>

                                                    <span class="aa-product-price">${{ $product->price }}</span>


                                        @endforeach

                                    {{-- <span class="aa-product-price"><del>${{ $product->price }}</del></span> --}}
                                        <div style="margin:20px 0;">
                                            <p>{{ $product->detail }}</p>

                                        </div>


                                        <div class="aa-prod-quantity">
                                            <form action="{{ url('cart/add-cart') }}" method="post">
                                                @csrf
                                                <label for="" style="display: block">Quantity</label>
                                                {{-- <input type="hidden" name="price" value="{{ isset($sale_off) ? $sale_off : $product->price  }}"> --}}
                                                <input type="number" value="1" name="quantity">
                                                <input type="hidden" name="id" value="{{ $product->product_id }}">

                                                <input class="aa-cart-view-btn" type="submit" value="Update Cart"
                                                    style="margin-top: 75px;margin-right: 320px;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aa-product-details-bottom">
                            <ul class="nav nav-tabs" id="myTab2">
                                <li><a href="#description" data-toggle="tab">Related Products</a></li>
                                <li><a href="#review" data-toggle="tab">Reviews</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="description">

                                <!-- Start men popular category -->
                                    <div class="tab-pane fade in active" id="popular">
                                        <ul class="aa-product-catg aa-popular-slider">
                                            @foreach ($product_tickets as $product)
                                                <!-- start single product item -->
                                                <li style="height:350px;">
                                                    <figure>
                                                        <form action="{{ url('cart/add-cart') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="1" name="quantity">
                                                            <input type="hidden" name="id"
                                                                value="{{ $product->product_id }}">
                                                            <a class="aa-product-img"
                                                                href="{{ url('tickets/detail/' . $product->product_id) }}"><img
                                                                    src="{{ $product->photo }}"
                                                                    style="width: 100%;height:250px"></a>
                                                            <button class="aa-add-card-btn" type="submit"><span
                                                                    class="fa fa-shopping-cart"></span>Add To Cart</button>
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
                                                                                        <span class="aa-product-price" style="color: red"><?= $sale_off ='$'. $product->price * (100 - $promotion->sale_off)/100;?></span>
                                                                                        <span class="aa-product-price" style="color: red"><del>${{ $product->price }}</del></span>

                                                                                    <?php break;} ?>

                                                                                    {{-- <span class="aa-product-price"><?= $sale_off ='$'. $product->price * (100 - $promotion->sale_off)/100;?></span>
                                                                                    <span class="aa-product-price"><del>${{ $product->price }}</del></span> --}}

                                                                                <?php } ?>

                                                                            <?php } ?>

                                                                                    <span class="aa-product-price">${{ $product->price }}</span>


                                                                        @endforeach
                                                            </figcaption>

                                                        </form>
                                                    </figure>


                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                                <!-- start single product item -->
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>

                                <div class="tab-pane fade " id="review" style="opacity: 1">
                                    <div class="aa-product-review-area">
                                      <h3 > Reviews </h3>
                                      <ul class="aa-review-nav">
                                        @foreach ($ratings as $rating)

                                        <li>
                                           <div class="media">
                                             <div class="media-left">
                                                <a href="#">
                                                    {{-- <img class="media-object" src="{{asset('asset')/img/no-avatar.png}}" alt="girl image"> --}}
                                                  </a>
                                             </div>
                                             <div class="media-body">
                                               <h4 class="media-heading"><strong>{{$rating->name_client}}</strong> - <span>{{date('F j, Y', strtotime($rating->created_at)) }}</span></h4>
                                               <div class="aa-product-rating">
                                                <div class="my-rating"></div>
                                               </div>
                                               <p>{{$rating->review}}</p>
                                             </div>
                                           </div>
                                         </li>
                                         @endforeach

                                      </ul>
                                      <h4>Add a review</h4>

                                      <!-- review form -->
                                      @include('account.alter')
                                      <form action="/rating" class="aa-review-form" method="post" style="margin:50px">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->product_id}}">

                                         <div class="form-group">
                                           <label for="message">Your Review</label>
                                           <textarea class="form-control" rows="3" id="message" name="review"></textarea>
                                         </div>
                                         <div class="form-group">
                                           <label for="name">Name</label>
                                           <input type="text" class="form-control" id="name" placeholder="Name" name="name"

                                           value="@if(Auth::check()){{Auth::user()->name}}

                                           @else


                                           @endif">
                                         </div>
                                         <div class="form-group">
                                           <label for="email">Email</label>
                                           <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email"
                                           value="@if(Auth::check())
                                            {{Auth::user()->email}}

                                            @else


                                           @endif
                                           ">
                                         </div>

                                         <button type="submit" class="btn btn-default aa-review-submit" >Submit</button>
                                      </form>
                                    </div>
                                  </div>
                            </div>

                        </div>
                        <!-- Related product -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / product category -->
@endsection
