@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">vi du mục foood - XXXX</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Food</li>
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
                                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Create Service</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- general form elements -->

                                            <!-- form start -->
                                            <form>
                                                <div class="row ">
                                                    <div class="col-sm-6">
                                                        <label for="lead_id" class="col-form-label">Group</label>
                                                        <input type="text" class="form-control" id="lead_id" disabled>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="lead_id" class="col-form-label">ID:</label>
                                                        <input type="text" class="form-control" id="lead_id" disabled>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-sm-6">
                                                        <label for="lead_id" class="col-form-label">Name</label>
                                                        <input type="text" class="form-control" id="lead_id">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="lead_id" class="col-form-label">Price</label>
                                                        <input type="text" class="form-control" id="lead_id">
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-sm-6">
                                                        <label for="lead_id" class="col-form-label">Photo</label>
                                                        <input type="text" class="form-control" id="lead_id">
                                                    </div>
                                                    <div class="col-sm-6">

                                                        <img src="" alt="" width="300px">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="first_name" class="col-form-label">Description</label>
                                                    <textarea class="form-control" style="resize: none" name="" id="" cols="30"
                                                        rows="10"class="form-control"></textarea>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-sm-6">
                                                        <label for="lead_id" class="col-form-label">Created date</label>
                                                        <input type="text" class="form-control" id="lead_id">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="lead_id" class="col-form-label">By</label>
                                                        <input type="text" class="form-control" id="lead_id">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <div class="row" style="margin-left: auto ">
                                                        <div class="form-check col-sm-6">
                                                            <input type="radio" class="form-check-input"
                                                                id="exampleCheck1">
                                                            <label class="form-check-label"
                                                                for="exampleCheck1">Active</label>
                                                        </div>
                                                        <div class="form-check col-sm-6">
                                                            <input type="radio" class="form-check-input"
                                                                id="exampleCheck1">
                                                            <label class="form-check-label"
                                                                for="exampleCheck1">Inactive</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-footer">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                            </form>
                                        </div>
                                        <!-- /.card-body -->


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
                                        <th>price</th>
                                        <th>No.</th>
                                        <th>Photo</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>food</td>
                                        <td>100</td>
                                        <td></td>
                                        <td><img src="" alt=""></td>
                                        <td>fdfs</td>
                                        <td></td>
                                        <td>
                                            <!--- The Modal -- Edit-->
                                            <a href="#myModalEdit" data-toggle="modal">Edit </a> |

                                            <div class="modal" id="myModalEdit">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit - XXX
                                                            </h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="row ">
                                                                    <div class="col-sm-6">
                                                                        <label for="lead_id"
                                                                            class="col-form-label">Group</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lead_id" disabled>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="lead_id"
                                                                            class="col-form-label">ID:</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lead_id" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col-sm-6">
                                                                        <label for="lead_id"
                                                                            class="col-form-label">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lead_id">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="lead_id"
                                                                            class="col-form-label">Price</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lead_id">
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col-sm-6">
                                                                        <label for="lead_id"
                                                                            class="col-form-label">Photo</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lead_id">
                                                                    </div>
                                                                    <div class="col-sm-6">

                                                                        <img src="" alt=""
                                                                            width="300px">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <label for="first_name"
                                                                        class="col-form-label">Description</label>
                                                                    <textarea class="form-control" style="resize: none" name="" id="" cols="30"
                                                                        rows="10"class="form-control"></textarea>
                                                                </div>

                                                                <div class="row ">
                                                                    <div class="col-sm-6">
                                                                        <label for="lead_id"
                                                                            class="col-form-label">Created date</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lead_id">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="lead_id"
                                                                            class="col-form-label">By</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lead_id">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Status</label>
                                                                    <div class="row" style="margin-left: auto ">
                                                                        <div class="form-check col-sm-6">
                                                                            <input type="radio" class="form-check-input"
                                                                                id="exampleCheck1">
                                                                            <label class="form-check-label"
                                                                                for="exampleCheck1">Active</label>
                                                                        </div>
                                                                        <div class="form-check col-sm-6">
                                                                            <input type="radio" class="form-check-input"
                                                                                id="exampleCheck1">
                                                                            <label class="form-check-label"
                                                                                for="exampleCheck1">Inactive</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">Delete</i></a>

                                        </td>
                                        {{-- show các sp có trong id đó --}}

                                    </tr>

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
