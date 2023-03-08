<?php use Carbon\Carbon; ?>
@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between" >
            <button type="button" class="btn btn-primary" >
                <a href="{{ url('admin/list-product') }}" style="color: white">Back</a>
            </button>

            <h5 class="modal-title" id="">Detail  - {{ $product->name }}</h5>
        </div>
        <div class="modal-body">

            <!-- form start -->
            <form method="POST" action="{{url('admin/detail-product',$product->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Service</label>

                            @foreach($menus as $menu)
                                @if($menu->id == $product->menu)
                                    <?php $service = $menu->name ?>
                                @endif
                            @endforeach

                            <input type="text" class="form-control" name="" value="{{ $service }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}"disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}"disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Details</label>
                            <input type="text" class="form-control" name="details" value="{{ $product->detail }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->status == 1 ? 'Active' : 'Inactive' }}"disabled>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group m-4">
                            <img src="{{$product->photo}}" width="300" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="" alt="" width="300px">
                    </div>
                </div>


                {{-- editor text --}}
                <div class="form-group ">
                    <label>Description</label>
                    <div class="my-4" style="border-style: double;" >
                       <div class="m-4">{!! $product->description !!}</div>

                    </div>

                </div>
                {{-- end - editor text --}}
                <!-- /.card-body -->

            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
