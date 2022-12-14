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
                    <a href="{{ route('admin-dashboard') }}">
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
                  <h4 class="sub-title">Edit Service</h4>
                  <form method="POST" action="{{ route('services.update',$service->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="title" value="{{ $service->title ?? ''}}">
                        @error('title')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <label class="col-sm-2 col-form-label">Short Code</label>
                      <div class="col-sm-4">
                        <input type="number" class="form-control" name="shortcode" value="{{ $service->shortcode ?? ''}}" placeholder="Short Code">
                        @error('shortcode')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Subscription Url</label>
                      <div class="col-sm-4">
                        <input id="color" type="text" name="offerUrl" class="form-control" placeholder="Offer URL" value="{{ $service->offerUrl ?? ''}}">
                        @error('offerUrl')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <label class="col-sm-2 col-form-label">Sevice EndPoint</label>
                      <div class="col-sm-4">
                      <div class="form-group d-flex align-items-center">
                      <span class="">{{ url('/') . '/' }}</span>
                        <input id="text" type="text" name="postBackUrl" class="form-control" placeholder="eg. gaming" value="{{ $service->postBackUrl ?? ''}}" >
                        @error('postBackUrl')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Analytics Postback URL</label>
                      <div class="col-sm-4">
                        <div class="form-group d-flex align-items-center">
                          <input id="text" type="text" name="adlink" class="form-control" placeholder="eg. https://example.com/postback?clickid=" value="{{ $service->adlink ?? '' }}">
                          <span class="font-weight-bold mx-2">{{ '{clickid}' }}</span>
                        </div>
                        @error('adlink')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">FlipCard Back Color</label>
                      <div class="col-sm-4">
                        <input id="color" type="color" name="back_color" class="form-control" value="{{ $service->back_color ?? ''}}" style="height:50px !important;">
                        @error('bg_color')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <label class="col-sm-2 col-form-label">FlipCard Font Color</label>
                      <div class="col-sm-4">
                        <input id="color" type="color" name="font_color" class="form-control" value="{{ $service->font_color ?? '' }}" style="height:50px !important;">
                        @error('font_color')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Thumbnail</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="image">
                        @error('image')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                        @if($service->image)
                          <img src="{{ asset('storage/'.$service->image) }}" height="100px" alt="">
                        @endif
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <textarea name="description" class="form-control" id="description" rows="10">{{ $service->description ?? ''}}</textarea>
                        @error('description')
                          <span class="text-danger" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="card-header-right">
                      <button class="btn btn-card btn-primary float-right" type="submit">Update</button>
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