@extends('layouts.layout')
@section('content')
    <?php use Carbon\carbon; ?>
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        @foreach ($banners as $banner)
            <img src="{{ $banner->photo }}" width="100%" height="300px">
        @endforeach
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Tickets</h2>
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
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="aa-product-catg-content">
                    <div class="aa-product-catg-head">
                        <div class="aa-product-catg-head-left">
                            <form action="{{ url('tickets/search') }}" method="get" class="aa-sort-form">
                                <label for="">Price</label>
                                <select name="search">
                                    <option value="1">Default</option>
                                    <option value="search_desc" {{ $search == 'search_desc' ? 'selected' : '' }}>Hight to low
                                    </option>
                                    <option value="search_asc"{{ $search == 'search_asc' ? 'selected' : '' }}>Low to high
                                    </option>
                                </select>
                                <input type="submit" value="Search">
                            </form>
                        </div>

                    </div>
                    <div class="aa-product-catg-body">
                        <ul class="aa-product-catg">
                            @foreach ($product_tickets as $product)
                                <!-- start single product item -->
                                <li style="height:350px; ">
                                    <figure>
                                        <form action="{{ url('cart/add-cart') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="1" name="quantity">
                                            <input type="hidden" name="id" value="{{ $product->product_id }}">
                                            <a class="aa-product-img"
                                                href="{{ url('tickets/detail/' . $product->product_id) }}"><img
                                                    src="{{ $product->photo }}" style="width: 100%;height:250px"></a>
                                            <button class="aa-add-card-btn" type="submit"><span
                                                    class="fa fa-shopping-cart"></span>Add To Cart</button>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">{{ $product->name }}</a></h4>
                                                @foreach ($promotions as $promotion)
                                                    <?php
                                                        $today = Carbon::now()->toDateString();
                                                        if($today >= $promotion->start_date && $today <= $promotion->end_date) {
                                                            if($promotion->menu == $product->menu){

                                                                $today = Carbon::now()->dayOfWeek;
                                                                if($today >= Carbon::MONDAY && $today <= Carbon::FRIDAY) { ?>
                                                    <span
                                                        class="aa-product-price"><?= $sale_off = '$' . ($product->price * (100 - $promotion->sale_off)) / 100 ?></span>
                                                    <span class="aa-product-price"><del>${{ $product->price }}</del></span>

                                                    <?php break;} ?>

                                                    {{-- <span class="aa-product-price"><?= $sale_off = '$' . ($product->price * (100 - $promotion->sale_off)) / 100 ?></span>
                                                                <span class="aa-product-price"><del>${{ $product->price }}</del></span> --}}

                                                    <?php } ?>

                                                    <?php } ?>

                                                    <span class="aa-product-price">${{ $product->price }}</span>
                                                @endforeach
                                                <?php
                                                    if(!isset($promotion)){
                                                        ?>
                                                <span class="aa-product-price">${{ $product->price }}</span>
                                                <?php
                                                    }
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

                    </div>
                    <div class="aa-product-catg-pagination">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- / product category -->
@endsection
