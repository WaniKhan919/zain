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
                  <h4>Landing Page</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                    <a href="{{ route('admin-dashboard') }}">
                      <i class="icofont icofont-home"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Landing Page</a>
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
                  <h4 class="sub-title">Landing Page</h4>
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
                  <form method="POST" action="{{ route('pages.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row" dir="rtl">
                      <label class="col-sm-2 col-form-label" dir="rtl">
                        عنوان</label>
                      <div class="col-sm-10">
                        <input type="text" dir="rtl" class="form-control" name="title" value="{{ $data->title ?? '' }}">
                        @error('title')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row" dir="rtl">
                      <label class="col-sm-2 col-form-label" dir="rtl">
                        وصف</label>
                      <div class="col-sm-10">
                        <textarea name="description" idir="rtl" class="form-control">{{ $data->description ?? '' }}</textarea>
                        @error('description')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row" dir="rtl">
                      <label class="col-sm-2 col-form-label" dir="rtl">زر كتابة</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" dir="rtl" name="button" value="{{ $data->button ?? '' }}">
                        @error('button')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="card-header-right" dir="rtl">
                      <button class="btn btn-card btn-primary float-right" dir="rtl">تحديث</button>
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
