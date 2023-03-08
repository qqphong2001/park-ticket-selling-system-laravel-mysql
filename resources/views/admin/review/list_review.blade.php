@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Review List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Review list</li>
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


                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Client - ID</th>
                                        <th>Client name</th>
                                        <th>Email</th>
                                        <th>Review</th>
                                        <th>Product Name</th>

                                        <th>Photo</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php

                                    @endphp

                                    @foreach($reviews as $rating)

                                    <tr>

                                        <td></td>
                                        <td>{{$rating->id}}</td>
                                        <td>{{$rating->product_id}}</td>
                                        <td>{{$rating->name_client}}</td>
                                        <td>{{$rating->email}}</td>

                                        <td>{{$rating->review}}</td>
                                        <td>{{$rating->name}}</td>

                                        <td><img src="{{$rating->photo}}" alt="" width="200px" height="200px"> </td>



                                        <td>
                                            <a href="#myModalDetail" data-toggle="modal">Details </a> |

                                            <a href="/admin/delete-review/{{$rating->id}}">Detele</a>
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
@endsection
