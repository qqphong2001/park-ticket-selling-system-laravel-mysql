@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gallery</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Gallery </li>
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

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalScrollableAcc">
                                Add
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalScrollableAcc" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog  modal-lg  modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Add</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="{{ url('admin/add-gallery') }}"
                                            enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <!-- form start -->
                                                @csrf
                                                {{-- <div class="card-body"> --}}
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">

                                                            <label for="">Services</label>
                                                            <select class="form-control" name="menu">
                                                                @foreach ($menus as $menu)
                                                                    <option value="{{ $menu->id }}">{{ $menu->name }}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Name</label>
                                                            <input type="text" class="form-control" id=""
                                                                name="name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Description</label>
                                                            <input type="text" class="form-control" name="description">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="">Status</label>
                                                                <select name="status" class="form-control">
                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-sm-6">
                                                        <label for="">Photo</label>
                                                        <input type="file" name="photo" id="photo"
                                                            onchange="preview_images();">
                                                    </div>
                                                    <div class="row" id="image_preview"></div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">

                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="reset" class="btn btn-secondary "
                                                    data-dismiss="modal">Reset</button>

                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card -->

                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Service</th>
                                        <th>Photo</th>
                                        <th>URL</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($galleries as $gallery)
                                        <tr class="">
                                            <td>{{ $gallery->gallery_id }}</td>
                                            <td>{{ $gallery->name }}</td>
                                            <td>{{ $gallery->menu_id }}</td>
                                            <td>{{ $gallery->photo }}</td>
                                            <td style="text-align: center">
                                                    <a  id="click" data-toggle="modal" data-target="#exampleModalOne" >
                                                        <img src="{{ $gallery->photo }}" alt="" width="100px"
                                                    height="100px" >
                                                    </a>
                                                    {{-- modal - below  --}}

                                            </td>

                                            {{-- <td> {{ isset($gallery->status) == 1 ? 'Show' : 'Hidden' }}</td> --}}

                                            <td>
                                                <a href="{{ url('admin/delete-gallery/' . $gallery->gallery_id) }}">Delete</i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                        <!-- Button trigger modal -->

                    </div>
                    <!-- /.card -->
                </div>

                <!-- /.col -->
            </div>

            {{-- modal - view images --}}
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal fade" id="exampleModalOne" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">

                                            <?php $item_class = 'carousel-item active';?>
                                             @foreach ($galleries as $gallery)
                                          <div class=" <?= $item_class ?> ">
                                            <img class="d-block w-100" src="{{$gallery->photo}}" style="max-height: 700px">
                                          </div>

                                          <?php $item_class = 'carousel-item ';?>
                                          @endforeach

                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- // modal - view images --}}


            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

        </div>


    </section>
    <!-- /.content -->

    {{-- preview_images --}}
    <script>
        function preview_images() {
            var total_file = document.getElementById("photo").files.length;
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
