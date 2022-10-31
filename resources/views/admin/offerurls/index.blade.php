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
                  <h4>Offer Urls/ Click</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page-header end -->
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5>Click</h5>
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
              <div id="position_msg"></div>
            </div>
            <div class="card-block table-border-style">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Title</th>
                      <th>Urls</th>
                      <th>Description</th>
                      <th>Click</th>
                      <th>Total Click</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=0;
                    @endphp
                    @foreach ($offer_urls as $list)
                    @php
                      $i++
                    @endphp
                      <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $list->title }}</td>
                        <td>{{ $list->offerUrl }}</td>
                        <td>{{ $list->description }}</td>
                        <td>
                          @if($list->clicks->count()>0)
                            Clicked
                          @else
                          ---
                          @endif
                        </td>
                        <td>
                          {{ $list->clicks->count() }}
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
                {{-- <div class="d-flex justify-content-center">
                  {!! $services->links("pagination::bootstrap-4") !!}
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection