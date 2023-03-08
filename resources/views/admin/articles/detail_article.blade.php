<?php use Carbon\Carbon; ?>
@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between" >
            <button type="button" class="btn btn-primary" >
                <a href="{{ url('admin/list-article') }}" style="color: white">Back</a>
            </button>

            <h5 class="modal-title" id="">Detail Article - {{ $article->topic }}</h5>
        </div>
        <div class="modal-body">

            <!-- form start -->
            <form method="POST" action="{{url('admin/update-article',$article->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Service name</label>
                            <input type="text" class="form-control" name="group_name" value="{{ $article->group_name }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Topic</label>
                            <input type="text" class="form-control" name="topic" value="{{ $article->topic }}"disabled>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">

                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group m-4">
                            <img src="{{$article->photo}}" width="300" alt="">

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
                       <div class="m-4">{!! $article->description !!}</div>

                    </div>

                </div>
                {{-- end - editor text --}}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">By</label>
                            <input type="text" name="created_by" value="{{ Auth::user()->name }}" class="form-control"
                                disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" class="form-control" >
                                <option value="1" {{ $article->status == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $article->status == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->

            </form>
        </div>
        <!-- /.card -->

    </div>
@endsection
