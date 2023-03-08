<?php use Carbon\Carbon; ?>
@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">

        <div class="modal-header">
            <button type="submit" class="btn btn-primary" >
                <a href="{{ url('admin/list-promotion') }}" style="color:white">Back</a>
            </button>
            <h5 class="modal-title" id="">Detail Promotion - {{ $promotion->name }}</h5>

        </div>
        <div class="modal-body">
            <!-- form start -->
            <form method="POST" action="{{ url('admin/update-promotion/' . $promotion->id) }}">
                @csrf
                {{-- @method('PUT') --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Promotion Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $promotion->name }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Service</label>
                            <select  class="form-control" name="menu" required>

                                <option value="1" {{ $promotion->menu == '1' ? 'selected' : '' }} >Food</option>
                                <option value="3" {{ $promotion->menu == '3' ? 'selected' : '' }} >Tickets</option>

                            </select>
                        </div>
                    </div>

                </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Start-Date</label>
                                <input type="text" name="start_date" id="startDatepicker"
                                    value="{{ Carbon::parse($promotion->start_date)->format('d-m-Y') }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">End-Date</label>
                                <input type="text" name="end_date" id="endDatepicker"
                                    value="{{ Carbon::parse($promotion->end_date)->format('d-m-Y') }}" class="form-control">
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="">Sale off</label>
                        <input type="number" name="sale_off" class="form-control" value="{{ $promotion->sale_off }}">
                    </div>

                    <div class="mb-4">
                        <label for="first_name" class="col-form-label">Description</label>
                        <textarea class="form-control" style="resize: none" name="description" rows="5"class="form-control">{{ $promotion->description }} </textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">By</label>
                                <input type="text" name="created_by" class="form-control"
                                    value="{{ Auth::user()->name }}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $promotion->status == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0"{{ $promotion->status == '0' ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->
                <div class="card-footer px-0">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-primary" data-dismis="modal">Reset</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>









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
@endsection
