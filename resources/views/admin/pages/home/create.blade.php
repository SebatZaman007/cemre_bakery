@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Home Section </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Logo</label>
                      <input class="form-control" type="file" name="logo" id="formFileMultiple" multiple>
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Discription_1</label>
                  <input type="text" name="description_1" class="form-control" id="exampleInputPassword1" >
                </div>

                  <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Description_2</label>
                      <input class="form-control" type="text" name="description_2" id="formFileMultiple" multiple>
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
