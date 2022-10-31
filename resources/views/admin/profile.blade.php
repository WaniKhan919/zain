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
                <i class="ti-settings bg-c-blue"></i>
                <div class="d-inline">
                  <h4>Settings</h4>
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
                  <li class="breadcrumb-item"><a href="{{ route('setting.index') }}">Setting</a>
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
                  <h4 class="sub-title">Setting</h4>
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
                  <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <img src=" {{ asset('storage/'.$admin->image)}}" style="height: 150px;border-radius:50%" alt="">
                      </div>
                      <label class="col-sm-2 col-form-label">Image</label>
                      <div class="col-sm-4">
                        <input type="file" name="image" class="form-control" >
                      </div>
                      <label class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" value="{{ $admin->name ?? '' }}" placeholder="Enter Name">
                        @error('logo')
                          <span name="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-4">
                        <input type="email" class="form-control" name="email" value="{{ $admin->email ?? '' }}" placeholder="Enter Email">
                        @error('email')
                          <span name="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <label class="col-sm-2 col-form-label">Current Password</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" name="current_password" placeholder="Enter Current Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        @error('password')
                          <span name="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <label class="col-sm-2 col-form-label">Confirm Password</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" name="confirm_password" placeholder="Enter Confirm Password">
                        @error('confirm_password')
                          <span name="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="card-header-right">
                      <button class="btn btn-card btn-primary float-right">Update</button>
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
