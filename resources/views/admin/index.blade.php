@extends('admin.layout')
@section('container')

<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">

        <div class="page-body">
          <div class="row">
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
              <div class="card widget-card-1">
                <div class="card-block-small">
                  <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                  <span class="text-c-blue f-w-600">Total Services</span>
                  <h4>{{ $service }}</h4>
                  <div>
                    <span class="f-left m-t-10 text-muted">
                      <a href="{{ route('services.index') }}">
                        <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
              <div class="card widget-card-1">
                <div class="card-block-small">
                  <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                  <span class="text-c-pink f-w-600">Offer Url / Click</span>
                  <h4>{{ $offerurl }}</h4>
                  <div>
                    <span class="f-left m-t-10 text-muted">
                      <a href="{{ route('admin-offer-url') }}">
                        <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>view
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
              <div class="card widget-card-1">
                <div class="card-block-small">
                  <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                  <span class="text-c-green f-w-600">Post Back Url</span>
                  <h4>0</h4>
                  <div>
                    <span class="f-left m-t-10 text-muted">
                      <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- card1 end -->

          </div>
        </div>
      </div>

      <div id="styleSelector">

      </div>
    </div>
  </div>
</div>

@endsection
