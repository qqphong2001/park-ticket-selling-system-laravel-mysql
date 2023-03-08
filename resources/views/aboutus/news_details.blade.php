@extends('layouts.layout')
@section('content')

<section id="aa-catg-head-banner" >
    @foreach($banners as $banner)
        <img src="{{ $banner->photo }}" width="100%" height="300px " >
    @endforeach
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>{{$blog_home->topic}}</h2>
                {{-- <ol class="breadcrumb">
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
                                <div class="col-md-6">
                                    <div class="card" style="">
                                        <img src="{{$blog_home->photo}}"
                                            class="card-img-top" style="max-width: 100%;" alt="...">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        {!!$blog_home->description!!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- / Blog Archive -->

@endsection
