@extends('layouts.layout')
@section('content')

<section id="aa-error">
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-error-area">
          <h2>Payment {{$message}}</h2>
          <a href="{{url('/')}}"> Go to Homepage</a>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection


