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
                <i class="icofont icofont-ui-home bg-c-blue card1-icon"></i>
                <div class="d-inline">
                  <h4>Post Back Reports</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page-header end -->
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5>Reports</h5>
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
                      <th>Service Name</th>
                      <th>Phone No</th>
                      <th>Urls</th>
                      <th>Date</th>
                      <th>Sucribe</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=0;
                    @endphp
                    @foreach ($reports as $list)
                    @php
                      $i++
                    @endphp
                      <tr>
                        <td>{{ $i }}</td>
                        @php
                          $service=DB::table('services')->where('id',$list->service_id)->first();
                        @endphp
                        <td>
                          {{ $service->title }}
                        </td>
                        <td>{{ $list->phone_no }}</td>
                        <td>{{ $list->service_name }}</td>
                        <td>{{ $service->offerUrl }}</td>
                        <td>{{ $list->created_at }}</td>
                        <td>
                          @if($list->subscribe==1)
                            Subscribed
                          @else
                          ---
                          @endif
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