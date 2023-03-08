@extends('aboutus.layouts')
@section('aboutus-content')
@foreach($rules as $rule)
<div class="aa-blog-content aa-blog-details">
    <article class="aa-blog-content-single">
       {!! $rule->description!!}
    </article>

</div>


@endforeach
@endsection
