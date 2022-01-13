@extends('admin.master')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Section </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('portfolio.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <input type="hidden" name="id" value="{{$edit->id}}">
                      <label for="formFileMultiple" class="form-label">Portfolio Image</label>
                      <input class="form-control" type="file" name="portfolio_image" id="formFileMultiple" multiple>
                      <img src="{{asset(BlogImage().$edit->portfolio_image)}}" width="70px" height="70px" alt="img">
                    </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Portfolio Productname</label>
                  <input type="text" name="portfolio_productname" value="{{$edit->portfolio_productname}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Portfolio Rate</label>
                  <input type="text" name="portfolio_rate" value="{{$edit->portfolio_rate}}" class="form-control" id="exampleInputPassword1" >
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
