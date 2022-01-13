@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Blog Feature </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('home.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">

                  <div class="mb-3">
                    <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Logo</label>
                      <input class="form-control" type="file" name="logo"  id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->logo)}}" width="70px" height="70px" alt="img">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" value="{{$edit->title}}"  class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Discription-1</label>
                  <input type="text" name="description_1" value="{{$edit->description_1}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Description-2</label>
                      <input class="form-control" type="text" value="{{$edit->description_2}}" name="description_2" id="formFileMultiple" multiple>
                    </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>


@endsection
