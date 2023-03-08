@extends('admin.layouts.layout')
@section('admin_content')


        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-primary btn-close-edit-modal" style="color:white"
              > <a href="{{url('admin/list-service')}}" style="color:white">Back</a>  </button>
                <h5 class="modal-title" id="exampleModalLabel">Edit

                </h5>


            </div>
            <div class="modal-body">
                <form method="post" action="{{url('admin/save-edit-service')}}" enctype="multipart/form-data">
                  @csrf
                    <div class="row ">
                        <div class="col-sm-6">
                            <label for="lead_id"
                                class="col-form-label">Menu_id</label>
                            <input type="text" class="form-control"
                                id="lead_id" value="{{$menu->id}}" name="id" disabled>
                        </div>
                        <div class="col-sm-6">
                            <label for="lead_id"
                                class="col-form-label">Name</label>
                            <input type="text" class="form-control"
                                id="lead_id" value="{{$menu->name}}" name="name" >
                        </div>
                        {{-- <div class="mb-12">
                            <label for="lead_id"
                            class="col-form-label" style="display: block">Photo</label>
                                <input type="file" name="photo">

                        </div> --}}

                    </div>



                    <div class="row ">
                        <div class="col-sm-12">
                            <label for="lead_id"
                                class="col-form-label">Url</label>
                                <input type="text" class="form-control"
                                id="lead_id"  name="url" value="{{$menu->url}}">

                        </div>

                    </div>



                    <div class="form-group " style="margin: 20px 0">

                        <button class="btn btn-primary" type="submit" >Update</button>

                    </div>

                </form>
            </div>

        </div>


@endsection
