@extends('layouts.layout')
@section('content')

@php
$total = 0
@endphp
<section id="cart-view">
    <h1 style="text-align:center">
        Cart </h1>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table" style="display: flex">
              <form action="/cart/update-cart"  method="post" style="width: 80%;padding:0 20px" >
                <div class="table-responsive">
                    @if( count($products)  != 0)
                   <table class="table">
                     <thead>
                       <tr>
                         <th></th>
                         <th>Photo</th>
                         <th>Product</th>
                         <th>Price</th>
                         <th>Quantity</th>
                         <th>Total</th>
                       </tr>
                     </thead>
                     <tbody>

                        @foreach ($products as $key=>$product)
                            @php
                            $price = $product->price * $carts[$product->product_id];
                            $total += $price
                            @endphp

                       <tr>
                         <td><a class="remove" href="{{url('cart/delete/'.$product->product_id)}}"><fa class="fa fa-close"></fa></a></td>
                         <td><img src="{{$product->photo}}" alt="img"></td>
                         <td>{{$product->name}}</td>
                         <td>{{$product->price}}</td>
                         <td><input class="aa-cart-quantity" type="number" value="{{$carts[$product->product_id]}}" name="numproduct[{{$product->product_id}}]"></td>
                         <td>{{$price}}</td>
                       </tr>
                            @endforeach


                       </tbody>
                   </table>
                   <input type="submit" class="aa-cart-view-btn" value="Update cart" style="margin-right: 50px;"  >
                   @csrf
                 </div>

              </form>

              <!-- Cart Total view -->
              <div class="cart-view-total" style="padding:0 20px;border-left:1px solid ">
                <h4>Cart Totals</h4>
                <table class="aa-totals-table">
                  <tbody>
                    <tr>
                      <th>Total</th>
                      <td>{{$total}}</td>
                    </tr>
                  </tbody>
                </table>
                <form  class="aa-login-form"  action="{{ url('cart/order')}}" method="post" style="margin-top: 50px">
                    @csrf
                    <input type="text" name="email" placeholder="email">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="phone" placeholder="Phone number">
                    <textarea type="text" name="description" placeholder="Description" rows="5" cols="40"></textarea>
                    <input type="submit" class="aa-cart-view-btn">

                </form>
                {{-- <form method="post" action="{{url('vnpay_payment')}}" >
                    @csrf
                    <input type="hidden" value="{{$total+10}}" name="total">
                    <input type="submit" class="aa-cart-view-btn" value="Pay VNPAY" style="margin-right: 50px;" name="redirect">

                </form> --}}
              </div>


              @else

              <div >Empty</div>

              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
