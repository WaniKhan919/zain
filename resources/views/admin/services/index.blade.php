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
                      <th>Image</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="row_position">
                    @php
                      $i=0;
                    @endphp
                    @foreach ($services as $list)
                    @php
                      $i++
                    @endphp
                      <tr id="{{ $list->id }}">
                        <td>{{ $i }}</td>
                        <td>{{ $list->title }}</td>
                        <td><img src="{{ asset('storage/'.$list->image) }}" alt="" style="height: 100px"></td>
                        <td>{{ $list->description }}</td>
                        <td>
                          @php
                            $status='';
                            $active='';
                            if($list->status==1){
                              $status='success';
                              $active='Active';
                            }else{
                              $status='danger';
                              $active='Deactive';
                            }
                          @endphp
                          <div class="dropdown-{{ $status }} dropdown open">
                            <button class="btn btn-{{ $status }} dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $active }}</button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item waves-light waves-effect" href="{{ route('services.status',['id'=>$list->id,'status'=>'1']) }}">Active</a>
                                <a class="dropdown-item waves-light waves-effect" href="{{ route('services.status',['id'=>$list->id,'status'=>'0']) }}">Deactive</a>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown-primary dropdown open">
                            <button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item waves-light waves-effect" href="{{ route('services.edit',$list->id) }}">Edit</a>
                                <a class="dropdown-item waves-light waves-effect" type="button" onclick="delete_service(this)" data-id="{{ route('services.destory',$list->id) }}">Delete</a>
                            </div>
                          </div>
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
    <!-- Main-body end -->
    <div id="styleSelector">

    </div>
  </div>
</div>


<div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you Sure to delete this!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="" method="post" id="delete_form">
          @csrf
          <button type="submit" class="btn btn-danger">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function delete_service(el){
    let link=$(el).data('id');
    $('.deleted-modal').modal('show');
    $('#delete_form').attr('action', link);
  }
</script>
<script>
  $(document).ready(function () {
      $('.row_position').sortable({
          dealy:150,
          stop:function(){
              var selectedData=new Array();
              $('.row_position>tr').each(function(){
                  selectedData.push($(this).attr("id"));
              });
              updatePosition(selectedData);
          }
      }); 
      function updatePosition(data_param){
          $.ajax({
              type: "POST",
              url: "{{ route('services.orderPosition') }}",
              data: {
                  "_token": "{{ csrf_token() }}",
                  "allData":data_param
              },
              success: function (response) {
                  $('#position_msg').html('');
                  $('#position_msg').append('<div class="alert alert-success alert-dismissible fade show" role="alert">'+response+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
              }
          });
      }
  });
</script>
@endsection