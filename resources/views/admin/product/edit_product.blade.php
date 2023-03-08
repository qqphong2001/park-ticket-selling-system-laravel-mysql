<?php use Carbon\Carbon; ?>
@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between" >
            <button type="button" class="btn btn-primary" >
                <a href="{{ url('admin/list-product') }}" style="color: white">Back</a>
            </button>

            <h5 class="modal-title" id="">Edit  - {{ $product->name }}</h5>
        </div>
        <div class="modal-body">

            <!-- form start -->
            <form method="POST" action="{{url('admin/save-edit-product',$product->product_id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Service</label>
                            <select class="form-control"style="text-transform: capitalize" name="menu">
                                @foreach($menus as $menu)
                                    @if($menu->id == $product->menu)
                                        <?php $service = $menu->name?>
                                    @endif
                                @endforeach

                                <option value="{{$product->menu}}" selected >{{$service}}</option>
                                @foreach ($menus as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Details</label>
                            <input type="text" class="form-control" name="detail" value="{{ $product->detail }}" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $product->status == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $product->status == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
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
                    <textarea class="form-control" id="summernote" name="description">{{ $product->description }} </textarea>
                </div>
                {{-- end - editor text --}}
                <!-- /.card-body -->
                <div class="form-group ">
                    <button class="btn btn-primary" type="submit" >Update</button>
                </div>

            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
