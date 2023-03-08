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
                        <li class="breadcrumb-item active">Services List</li>
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
                                Create services
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalScrollableAcc" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Create services</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- general form elements -->


                                            <!-- form start -->
                                            <form enctype="multipart/form-data" method="post"
                                                action="{{ url('admin/add-service') }}">

                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Services name</label>
                                                    <input type="text" class="form-control" name="name" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Url</label>
                                                    <input type="text" class="form-control" name="url" required>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label >photo</label>

                                                     <input type="file"  id="" name="photo" >
                                                </div> --}}

                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <input type="submit" value="Submit" class="btn btn-primary">

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
                                            <th>Url</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td>{{ $menu->id }}</td>
                                                <td style="text-transform: capitalize">{{ $menu->name }}</td>
                                                <td>{{ $menu->url }}</td>
                                                <td>

                                                    <a href="{{ url('/admin/edit-service/' . $menu->id) }}">Edit |</a>
                                                    <a href="{{ url('/admin/delete-service/' . $menu->id) }}"
                                                        onclick="confirm('are u sure')">Delete</a>

                                                </td>
                                                {{-- show các sp có trong id đó --}}

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
