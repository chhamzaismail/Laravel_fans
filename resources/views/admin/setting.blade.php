@extends('admin.layouts.app')

@section('Admin_Content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      @if(Session::has('success'))
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
      @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Settings</li>
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
                <h3 class="card-title">Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{url('setting/update')}}/1" method="post" enctype="multipart/form-data">
               @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control"  name="email" placeholder="Email" value="{{$setting->email}}">
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <input type="tel" class="form-control"  name="telephone" placeholder="Telephone" value="{{$setting->telephone}}">
                        <span class="text-danger">
                            @error('telephone')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control"  name="twitter" placeholder="Twitter" value="{{$setting->twitter}}">
                        <span class="text-danger">
                            @error('twitter')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control"  name="facebook" placeholder="Facebook" value="{{$setting->facebook}}">
                        <span class="text-danger">
                            @error('facebook')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tiktok">Tiktok</label>
                        <input type="text" class="form-control"  name="tiktok" placeholder="Tiktok" value="{{$setting->tiktok}}">
                        <span class="text-danger">
                            @error('tiktok')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="youtube">Youtube</label>
                        <input type="text" class="form-control"  name="youtube" placeholder="Youtube" value="{{$setting->youtube}}">
                        <span class="text-danger">
                            @error('youtube')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control"  name="instagram" placeholder="instagram" value="{{$setting->instagram}}">

                      </div>
                    </div>
              

                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="whatsapp">Whatsapp</label>
                        <input type="text" class="form-control" placeholder="Whatsapp" name="whatsapp" value="{{$setting->whatsapp}}">
                        <span class="text-danger">
                            @error('whatsapp')
                                {{$message}}
                            @enderror
                        </span>
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