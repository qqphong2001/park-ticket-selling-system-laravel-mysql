@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary">
                        <a href="/admin/list-order" style="color:white">Back</a>
                    </button>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order detail</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @php
                    $total = 0
                    @endphp


                    <div class="card">
                        <div style="width: 100% ; margin-left:50px;margin-top:100px">
                        <p> email:  {{$customer->email}}</p>
                        <p>  phone:     {{$customer->phone}}
                       </p>
                         <p>  total:   @foreach($carts as $cart)
                        @php
                        $total += $cart->price
                        @endphp
                        @endforeach
                        @php
                        echo $total
                        @endphp
                       </p>
                       <p>status: {{$customer->payment == null ? 'unpaid' : 'paid' }}</p>
                        </div>
                        <div class="card-header">


                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Product name</th>
                                        <th>Photo</th>


                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php

                                    @endphp

                                    @foreach($carts as $order)

                                    <tr>
                                        <td>{{$order->customer_id}}</td>

                                        <td>{{$order->name}}</td>

                                        <td >

                                            <img src=" {{$order->photo}}" alt="" width="200px" height="200px">
                                           </td>
                                        <td>{{$order->price}}</td>

                                        <td>
                                            <a onclick="confirm('are you sure ?')" href="{{url('/admin/delete-order/'.$order->product_id)}}" >Delete </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
