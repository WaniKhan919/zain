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
                <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                <div class="d-inline">
                  <h4>Post Back per service</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page-header end -->
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5>Postback per service</h5>
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
              {{-- <form action="{{ route('date-filter') }}" method="post">
                @csrf
                <div class="row input-daterange">
                  <div class="col-md-3">
                      <input type="number" name="year" id="from_date" class="form-control" placeholder="Year"/>
                  </div>
                  <div class="col-md-3">
                      <input type="number" name="day" id="to_date" class="form-control" placeholder="Date"/>
                  </div>
                  <div class="col-md-3">
                      <input type="number" name="month" id="to_date" class="form-control" placeholder="Month"/>
                  </div>
                  <div class="col-md-3">
                      <button type="submit" name="filter" id="filter" class="btn btn-primary">Filter</button>
                  </div>
                </div>
              </form> --}}
            </div>
            <div class="card-block table-border-style">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Title</th>
                      <th>Post Back Url</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Click</th>
                      <th>Total Click</th>
                      <th>View Report</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=0;
                    @endphp
                    @foreach ($postback as $list)
                    @php
                      $i++
                    @endphp
                      <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $list->title }}</td>
                        <td>{{ $list->postBackUrl }}</td>
                        <td>{{ $list->description }}</td>
                        <td>{{ $list->created_at }}</td>
                        <td>
                          @if($list->postback->count()>0)
                            Clicked
                          @else
                          ---
                          @endif
                        </td>
                        <td>
                          {{ $list->postback->count() }}
                        </td>
                        <td>
                          <a href="{{ route('post-backurl-report',$list->id) }}" class="btn btn-outline-info"> View</a>
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