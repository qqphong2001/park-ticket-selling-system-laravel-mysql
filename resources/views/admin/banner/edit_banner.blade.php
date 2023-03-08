<?php use Carbon\Carbon; ?>
@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between" >
            <button type="button" class="btn btn-primary" >
                <a href="{{ url('admin/list-banner') }}" style="color: white">Back</a>
            </button>

            <h5 class="modal-title" id="">Edit  - {{ $banner->name }}</h5>
        </div>
        <div class="modal-body">

            <!-- form start -->
            <form method="POST" action="{{url('admin/update-banner/'.$banner->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                 
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $banner->name }}">
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group m-4">
                            <img src="{{$banner->photo}}" width="300" alt="">
                            <input type="file" name="photo">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="" alt="" width="300px">
                    </div>
                </div>

                <div class="form-group ">
                    <button class="btn btn-primary" type="submit" >Update</button>
                </div>

            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
