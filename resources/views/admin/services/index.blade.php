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
            <div class="col-lg-10">
              <div class="page-header-title">
                <i class="ti-layers bg-c-pink"></i>
                <div class="d-inline">
                  <h4>Services</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="page-header-title">
                <a href="{{ route('services.create') }}" class="btn btn-primary">Add Service</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Page-header end -->
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5>Services</h5>
            </div>
            <div class="card-block table-border-style">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=0;
                    @endphp
                    @foreach ($services as $list)
                    @php
                      $i++
                    @endphp
                      <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $list->title }}</td>
                        <td><img src="{{ asset('storage/'.$list->image) }}" alt="" style="height: 100px"></td>
                        <td>{{ $list->description }}</td>
                        <td>
                          <div class="dropdown-success dropdown open">
                            <button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Active</button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item waves-light waves-effect" href="#">Active</a>
                                <a class="dropdown-item waves-light waves-effect" href="#">Deactive</a>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown-primary dropdown open">
                            <button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item waves-light waves-effect" href="#">Edit</a>
                                <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                    <tr></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main-body end -->
    <div id="styleSelector">

    </div>
  </div>
</div>
@endsection