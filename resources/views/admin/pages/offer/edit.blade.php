@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Offer Section </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('offer.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Offer</label>
                      <input class="form-control" type="text" name="offer" value="{{$edit->offer}}" id="formFileMultiple" multiple>
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title-1</label>
                  <input type="text" name="title_1" value="{{$edit->title_1}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Title-2</label>
                  <input type="text" name="title_2" value="{{$edit->title_2}}" class="form-control" id="exampleInputPassword1" >
                </div>

                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Description</label>
                      <input class="form-control" type="text" name="description" value="{{$edit->description}}" id="formFileMultiple" multiple>
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
