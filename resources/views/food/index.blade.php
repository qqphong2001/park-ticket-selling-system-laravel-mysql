@extends('layouts.layout')
@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        @foreach ($banners as $banner)
            <img src="{{ $banner->photo }}" alt="">
        @endforeach
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Food</h2>
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
                            <form action="{{url('food/search')}}" method="get" class="aa-sort-form">
                                <label for="">Price</label>
                                <select name="search">
                                    <option value="1"  >Default</option>
                                    <option value="search_desc" {{$search == 'search_desc' ? 'selected':'' }}>Hight to low</option>
                                    <option value="search_asc"{{ $search == 'search_asc' ? 'selected':'' }}>Low to high</option>
                                </select>
                                <input type="submit" value="Search" >
                            </form>
                        </div>

                    </div>
                    <div class="aa-product-catg-body">
                        @foreach ($product_food as $food)
                            <ul class="aa-product-catg">
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="{{ url('food/detail/' . $food->product_id) }}"><img
                                                src="{{ $food->photo }}" width="300px" height="250px"></a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">{{ $food->name }}</a></h4>
                                            <span class="aa-product-price">${{ $food->price }}</span>
                                            {{-- <span class="aa-product-price"><del>${{ $food->price }}</del></span> --}}
                                            <p class="aa-product-descrip">{{ $food->description }}</p>
                                        </figcaption>
                                    </figure>

                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal" class="buttonModal"
                                           value="{{$food->product_id}}"
                                            >
                                            <span class="fa fa-search"></span>
                                        </a>
                                    </div>

                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">HOT</span>
                                </li>
                            </ul>
                        @endforeach
                        <!-- quick view modal -->

                        <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                        <div class="row">
                                            <!-- Modal view slider -->
                                            <div class="col-md-6 col-sm-6 col-xs-12"
                                                style="display:flex; justify-content: center;">
                                                <img src="" width="300px" height="250px" id="modelphotofood"></a>
                                            </div>
                                            <!-- Modal view content -->
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="aa-product-view-content">
                                                    <h3 id="modelnamefood"></h3>
                                                    <div class="aa-price-block">
                                                        <span class="aa-product-view-price" id="modelpricefood"></span>

                                                    </div>
                                                    <p id="modeldescfood"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                        <!-- / quick view modal -->
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

    <script>
        function showId(id) {
            $.ajax = ({
                type: GET,
                url: 'food/index' + id,
                success: function(data) {
                    $('.modal-body').html(data);
                    $('#quick-view-modal').modal('show');
                }
            });
        }



        function showId(id) {
            $.get('food/index' + id, function(data) {
                $('#quick-view-modal').modal('show');
            });
        }
    </script>
@endsection
