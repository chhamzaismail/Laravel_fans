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
        @elseif(Session::has('danger')) 
        <div class="alert alert-danger text-center">
            {{ Session::get('danger') }}
        </div>
      @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Banner
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header ">
                <h3 class="card-title">Banners</h3>
                <div style="text-align:end;">
                  <a href="{{route('banner.store')}}" class="btn btn-primary">Add Banner</a>
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <!-- <th>Description</th> -->
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($banner as $data)
                  <tr >
                    <td class="text-center"><img src="{{asset('public/storage/bannerImages')}}/{{$data->image}}" alt="BannerImage" style="width:150px; height:150px; border-radius:10px;"></td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->subtitle}}</td>
                    <!-- <td>{{$data->description}}</td> -->
                    <td>
                      <a class='btn btn-success edit_btn' href="{{url('/banner/edit/')}}/{{$data->id}}">Edit</a>

                      <a class=' btn btn-danger delete_btn'
                      href="{{url('/banner/delete/')}}/{{$data->id}}" >Delete</a> 
                    </td>
                   
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <!-- <th>Description</th> -->
                    <th>Actions</th>
                  </tr>
                  </tfoot>
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
  </div>



  @endsection


