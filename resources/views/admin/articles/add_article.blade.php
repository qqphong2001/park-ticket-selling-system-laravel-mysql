@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Article</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Article list</li>
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
                    <div class="card">
                        <div class="card-header">
                            <!-- Modal -->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <!-- form start -->
                                    <form method="POST" action="{{url('admin/add-article')}}" enctype="multipart/form-data">
                                        @csrf
                                        {{-- < class="card-body"> --}}
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Service name</label>
                                                    <input type="text" class="form-control" name="group_name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Topic</label>
                                                    <input type="text" class="form-control"  name="topic" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-sm-6">
                                                    <label for="exampleInputFile">Photo</label>
                                                    <input  type="file" name="photos[]" id="photos" onchange="preview_images();" multiple >

                                            </div>
                                        </div>

                                        <div class="row" id="image_preview"> </div>


                                        {{-- editor text --}}
                                        <div class="form-group ">
                                            <label>Description</label>
                                            <textarea id="summernote"  name="description" required></textarea>

                                        </div>
                                        {{-- end - editor text --}}

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">By</label>
                                                    <input type="text" name="created_by" value="{{Auth::user()->name}}"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select name="status" class="form-control" required>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="submit" class="btn btn-secondary"><a href="{{url('admin/list-article')}}"style="color: white" >Back</a></button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->

                            </div>


                            <!-- /.card-header -->

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
