@extends('aboutus.layouts')
@section('aboutus-content')
    <div class="aa-blog-content">
        <div class="row" style="display: flex; flex-wrap: wrap; ">
            @foreach ($news as $new)
                <div class="col-md-4 col-sm-4">
                    <div class="aa-latest-blog-single">
                        <figure class="aa-blog-img">
                            <a href="{{ url('news-details/' . $new->id) }}"><img src="{{ $new->photo }}" width="300px"
                                    height="200px"></a>
                        </figure>
                        <div class="aa-blog-info" style="margin: 10px">
                            <h1 class="aa-blog-title" style="margin: unset"><a
                                    href="{{ url('news-details/' . $new->id) }}">{{ $new->topic }}</a></h1>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>


        <!-- Blog Pagination -->
        <div class="aa-blog-archive-pagination">
            <nav>
                <ul class="pagination">
                    <li>
                        <a aria-label="Previous" href="#">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a aria-label="Next" href="#">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
@endsection
