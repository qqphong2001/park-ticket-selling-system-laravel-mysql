<?php use Carbon\Carbon; ?>
@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">

        <div class="modal-header">
            <button type="submit" class="btn btn-primary" >
                <a href="{{ url('admin/list-article') }}" style="color:white">Back</a>
            </button>
            <h5 class="modal-title" id="exampleModalScrollableTitle">Update Article - {{ $article->topic }}</h5>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form method="POST" action="{{ url('admin/update-article', $article->id) }}">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Service name</label>
                            <input type="text" class="form-control" name="group_name" value="{{ $article->group_name }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Topic</label>
                            <input type="text" class="form-control" name="topic" value="{{ $article->topic }}">
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <label for="exampleInputFile">Photo</label>
                        <input type="file" name="photos[]" id="photos" onchange="preview_images();" multiple>

                    </div>
                </div>


                <div class="row" id="image_preview"></div>


                {{-- editor text --}}
                <div class="form-group ">
                    <label>Description</label>
                    <textarea class="form-control" id="summernote" name="description">{{ $article->description }} </textarea>

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
                            <select name="status" class="form-control">
                                <option value="1" {{ $article->status == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $article->status == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer px-0" >
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-primary" data-dismis="modal">Reset</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>

    <script>
        function preview_images() {
            var total_file = document.getElementById("photos").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append(`
                <div class='col-md-3'>
                    <img style='width:100%' class='img-responsive' src='${URL.createObjectURL(event.target.files[i])}'>
                </div>`);
            }
        }

        function resetForm() {
            $("#image_preview").html("");
            return true;
        }
    </script>
@endsection
