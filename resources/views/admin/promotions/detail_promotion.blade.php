<?php use Carbon\Carbon; ?>
@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between" >
            <button type="button" class="btn btn-primary" >
                <a href="{{ url('admin/list-promotion') }}" style="color: white">Back</a>
            </button>

            <h5 class="modal-title" id="">Detail Promotion - {{ $promotion->name }}</h5>
        </div>
        <div class="modal-body">
            <!-- form start -->
            <form method="" action="">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Promotion Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $promotion->name }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Service</label>
                                <input type="text" name="id" class="form-control" value="{{ $promotion->menu == 1 ? 'Food':'Tickets'}}"
                                    disabled>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Start-Date</label>
                                <input type="text" name="start_date" id="startDatepicker"
                                    value="{{ Carbon::parse($promotion->start_date)->format('d-m-Y') }}"
                                    class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">End-Date</label>
                                <input type="text" name="end_date" id="endDatepicker"
                                    value="{{ Carbon::parse($promotion->end_date)->format('d-m-Y') }}" class="form-control"
                                    disabled>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="">Sale off</label>
                        <input type="text" name="sale_off" class="form-control" value="{{ $promotion->sale_off }}"
                            disabled>
                    </div>

                    <div class="mb-4">
                        <label for="first_name" class="col-form-label">Description</label>
                        <textarea class="form-control" style="resize: none" name="description" rows="5"class="form-control" disabled>{{ $promotion->description }} </textarea>
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
                                <select name="status" class="form-control" disabled>
                                    <option value="1" {{ $promotion->status == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0"{{ $promotion->status == '0' ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Created-Date</label>
                                <input type="text" name="created_date" value="{{ $promotion->created_date }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Updated-Date</label>
                                <input type="text" name="updated_date" class="form-control">
                            </div>
                        </div>
                    </div> --}}

                </div>
                <!-- /.card-body -->
            </form>
        </div>
        <!-- /.card -->

    </div>

@endsection
