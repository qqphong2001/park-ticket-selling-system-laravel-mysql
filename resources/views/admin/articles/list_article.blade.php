@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Article List</h1>
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

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" >
                                <a href="{{url('admin/add-article-view')}}" style="color:white">Create Article</a>
                            </button>


                            <!-- /.card-header -->
                            <div class="card-body">
                                @if(Session::has('msg'))
                                    <div class="alert alert-success">
                                        {{Session::get('msg')}}
                                    </div>
                                @endif
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Service group</th>
                                            <th>Topic</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($articles as $article)
                                        <tr>
                                            <td>{{$article->id}}</td>
                                            <td>{{$article->group_name}}</td>
                                            <td>{{$article->topic}}</td>
                                            <td>{{$article->status}}</td>
                                            <td>
                                                <a href="{{url('admin/detail-article',$article->id)}}">Details </a> |
                                                <a href="{{url('admin/update-article',$article->id)}}" >Edit </a> |
                                                <a href="{{url('admin/delete-article',$article->id)}}"onclick="confirm('Are you sure?')">Delete</i></a>
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
