@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="text-transform: capitalize">{{$menuname}} List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/admin/list-service')}}">Services List</a></li>
                        <li class="breadcrumb-item active">  Food List</li>
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
                                Create
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalScrollableAcc" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Create</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- general form elements -->


                                            <!-- form start -->
                                            <form enctype="multipart/form-data" method="post"
                                                action="{{ url('admin/add-menu-cat') }}">

                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Tên menu</label>
                                                            <input type="text" class="form-control" name="name" value="{{$menuname}}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">id_menu</label>
                                                            <input type="text" class="form-control"  value="{{$menu->id}}" disabled>
                                                            <input type="hidden" name="id_menu" value="{{$menu->id}}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label for="">Url</label>
                                                    <input type="text" class="form-control"  name="url" value="">

                                                </div>

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
                                        @foreach ($cats as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->url }}</td>
                                                <td>
                                                    <a href="{{ url('/admin/delete-menu-cat/'.$item->id) }}"
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
