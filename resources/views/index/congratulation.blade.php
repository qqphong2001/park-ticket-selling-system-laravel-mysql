@extends('layouts.layout')
@section('content')





<section id="aa-error" style="margin:40px">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-error-area">
              <h1>You have successfully placed your order</h1>
                <div style="margin: 50px 0">
              <form method="post" action="{{url('vnpay_payment')}}" >
                @csrf  {{ csrf_field() }}

                <input type="hidden" value={{Session::get('payment')['orders'][0]->pricea}} name="total" >
                <input type="hidden" value={{Session::get('payment')['orders'][0]->customer_id}} name="id" >

                <input type="submit" class="aa-cart-view-btn" value="Pay VNPAY" style="margin-right: 50px;" name="redirect">
            </form>
          <button  class="aa-cart-view-btn" value="Pay VNPAY" style="margin-right: 450px;"><a style="margin: 0;
            padding: 0;
            color: white;
            border: none;" href="{{url('/')}}">Back home page</a> </button>
        </div>
            </div>
          </div>
        </div>
      </div>

    </section>
{{-- <button class="aa-cart-view-btn" value="Back home page" style="margin-right: 50px;" name="redirect"> --}}



@endsection




