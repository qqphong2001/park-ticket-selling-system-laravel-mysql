@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Services List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List-services</li>
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
                                <div class="modal-dialog  modal-lg modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Add</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ url('admin/add-product') }}" enctype="multipart/form-data">
                                                <!-- form start -->
                                                @csrf
                                                {{-- <div class="card-body"> --}}
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Services</label>
                                                            {{-- <select class="form-control"style="text-transform: capitalize" name="menu" required> --}}
                                                                <select  class="form-control" name="menu" required>

                                                                    <option value="1" style="text-transform: capitalize" >Food</option>
                                                                    <option value="2" style="text-transform: capitalize" >Zones</option>
                                                                    <option value="3" style="text-transform: capitalize" >Tickets</option>

                                                                </select>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Name</label>
                                                            <input type="text" class="form-control" id="" name="name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Quantity</label>
                                                            <input type="text" class="form-control" id="" name="quantity">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Price</label>
                                                            <input type="text" class="form-control" id="" name="price">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Details</label>
                                                            <input type="text" class="form-control" name="detail" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="">Status</label>
                                                                <select name="status" class="form-control" required>
                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <div class="col-sm-6" style="padding: unset;">
                                                        <label for="">Photo</label>
                                                        <input type="file" name="photo" id="photo"
                                                            onchange="preview_images();">
                                                    </div>
                                                    <div class="row" id="image_preview"></div>
                                                </div>
                                                <div class="form-group ">
                                                    <label>Description</label>
                                                    <textarea id="summernote"  name="description"></textarea>

                                                </div>

                                            <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
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
                                        <th>Service</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="product-container-{{$product->product_id}}">
                                            <td >{{ $product->product_id }}</td>
                                            @foreach($menus as $menu)
                                                @if($menu->id == $product->menu)
                                                    <td style="text-transform: capitalize">  {{$menu->name}}</td>
                                                @endif
                                            @endforeach
                                            <td >{{ $product->name }}</td>
                                            <td style="vertical-align: middel" >
                                                <img src="{{ $product->photo }}" alt="" width="100px"
                                                    height="100px">
                                            </td>
                                            <td >{{ $product->price }}</td>
                                            <td >{{ $product->quantity }}</td>
                                            <td >{{ $product->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{url('admin/detail-product/'.$product->product_id)}}" >Detail </a> |
                                                <a href="{{url('admin/edit-product/'.$product->product_id)}}" >Edit </a> |
                                                <a href="{{url('admin/delete-product/'.$product->product_id)}}">Delete</i></a>
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
