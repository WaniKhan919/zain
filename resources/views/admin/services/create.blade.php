@extends('admin.layout')
@section('container')
<div class="pcoded-content">
  <div class="pcoded-inner-content">

    <!-- Main-body start -->
    <div class="main-body">
      <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
          <div class="row align-items-end">
            <div class="col-lg-8">
              <div class="page-header-title">
                <i class="ti-layers bg-c-pink"></i>
                <div class="d-inline">
                  <h4>Services</h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4">
              <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                    <a href="index.html">
                      <i class="icofont icofont-home"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ route('setting.index') }}">Services</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Page-header end -->
        <!-- Page body start -->
        <div class="page-body">
          <div class="row">
            <div class="col-sm-12">
              <!-- Basic Form Inputs card start -->
              <div class="card">
                <div class="card-block">
                  <h4 class="sub-title">Services</h4>
                  @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session()->get('success') }}
                    </div>
                  @endif
                  @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session()->get('error') }}
                    </div>
                  @endif
                  <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="title">
                        @error('title')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <label class="col-sm-2 col-form-label">Thumbnail</label>
                      <div class="col-sm-4">
                        <input type="file" class="form-control" name="image">
                        @error('image')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Back Color</label>
                      <div class="col-sm-4">
                        <input id="color" type="color" name="back_color" class="form-control" value="" style="height:50px !important;">
                        @error('bg_color')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <label class="col-sm-2 col-form-label">Font Color</label>
                      <div class="col-sm-4">
                        <input id="color" type="color" name="font_color" class="form-control" value="" style="height:50px !important;">
                        @error('font_color')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <textarea name="description" class="form-control" id="description" rows="10"></textarea>
                        @error('description')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="card-header-right">
                      <button class="btn btn-card btn-primary float-right">Add</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body end -->
      </div>
    </div>
    <!-- Main-body end -->
    <div id="styleSelector">

    </div>
  </div>
</div>
@endsection