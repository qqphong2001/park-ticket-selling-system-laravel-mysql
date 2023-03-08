<?php use Carbon\Carbon; ?>
@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Promotion list</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Promotion list</li>
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
                                Create Promotion
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalScrollableAcc" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Create Promotion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- form start -->
                                            <form method="post" action="{{ url('admin/add-promotion') }}">
                                                @csrf
                                                <div class="card-body">


                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="">Promotion Name</label>
                                                                <input type="text" name="name" class="form-control" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="">Service</label>
                                                                <select  class="form-control" name="menu" required>

                                                                    <option value="1" style="text-transform: capitalize" >Food</option>
                                                                    <option value="3" style="text-transform: capitalize" >Tickets</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="">Start-Date</label>
                                                                <input type="text" name="start_date" id="startDatepicker"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="">End-Date</label>
                                                                <input type="text" name="end_date" id="endDatepicker"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label for="">Sale off</label>
                                                        <input type="number" name="sale_off" class="form-control" min="0" max ="100" required>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="first_name" class="col-form-label">Description</label>
                                                        <textarea class="form-control" style="resize: none" name="description" rows="5"class="form-control" required></textarea>
                                                    </div>
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


                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.card -->

                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if (Session::has('msg'))
                                    <div class="alert alert-success">
                                        {{ Session::get('msg') }}
                                    </div>
                                @endif
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Promotion Name</th>
                                            <th>Sale off</th>
                                            <th>Start-date</th>
                                            <th>End-date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($promotions as $promotion)
                                            <tr>
                                                <td>{{ $promotion->id }}</td>
                                                <td style="text-transform: capitalize">{{ $promotion->name }}</td>
                                                <td>{{ $promotion->sale_off }} %</td>
                                                <td>{{ Carbon::parse($promotion->start_date)->format('d-m-Y') }}</td>
                                                <td>{{ Carbon::parse($promotion->end_date)->format('d-m-Y') }}</td>
                                                <td>{{ $promotion->status == 1 ? 'Active' : '' }}</td>
                                                <td>
                                                    <a href="{{url('admin/detail-promotion/'.$promotion->id)}}" >Details </a> |
                                                    <a href="{{url('admin/update-promotion/'.$promotion->id)}}" >Edit </a> |
                                                    <a href="{{ url('/admin/delete-promotion', $promotion->id) }}"onclick="confirm('Are you sure?')">Delete</i></a>
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

    {{-- datepicker --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#startDatepicker").datepicker();
            $("#endDatepicker").datepicker();
        });
    </script>

    {{-- / datepicker --}}




@endsection
