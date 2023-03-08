@extends('layouts.layout')
@section('content')
    <section id="" style="background-color:unset ;">
        @foreach($banners as $banner)
            <img src="{{ $banner->photo }}" width="100%" height="300px " >
        @endforeach
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    {{-- <h2>Contact / about us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ol> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Archive -->
    <section id="aa-blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-blog-archive-area">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="aa-blog-content">
                                    <div class="row">

                                        @yield('aboutus-content')

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3" style="text-align: end; padding: 0 30px;">
                                <aside class="aa-blog-sidebar">
                                    <div class="aa-sidebar-widget">
                                        <h3><a href="{{url('/news')}}">News</a> </h3>
                                        {{-- <ul class="aa-catg-nav">
                                            <li><a href="#">Men</a></li>
                                        </ul> --}}
                                    </div>
                                    <div class="aa-sidebar-widget">
                                        <h3><a href="{{url('/contact')}}">Contact</a> </h3>
                                        {{-- <div class="tag-cloud">
                                            <a href="#">Fashion</a>
                                        </div> --}}
                                    </div>
                                </aside>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Blog Archive -->






@endsection
