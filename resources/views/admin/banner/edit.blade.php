@extends('admin.layouts.app')

@section('Admin_Content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/banner')}}">Banner</a></li>
              <li class="breadcrumb-item active">Edit Banner</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Banner</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{url('banner/update')}}/{{$banner->id}}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$banner->title}}">
                        <span class="text-danger">
                            @error('title')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{$banner->subtitle}}">
                        <span class="text-danger">
                            @error('subtitle')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" placeholder="Description" name="description" value="{{$banner->description}}">
                        <span class="text-danger">
                            @error('description')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <span class="text-danger">
                              @error('image')
                                  {{$message}}
                              @enderror
                            </span>
                            <img src="{{asset('public/storage/bannerImages')}}/{{$banner->image}}" alt="Image" class="mt-3" style="width:100px; height:100px; border-radius:10px;">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



@endsection