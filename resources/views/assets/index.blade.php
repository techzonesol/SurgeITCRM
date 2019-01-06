@extends('layouts.app')
@section('meta_title') Assets Lists @endsection
@section('page_bread_scrum')
Assets
@endsection
@section('content')

<!-- Main content -->
<div class="content-wrapper">

    <!-- Content area -->
<div class="content">

  <!-- Basic datatable -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title font-weight-bold">View Assets</h5>
    </div>
    <div class="card-body">
        Manage all assets here.
    </div>
    
    <table class="table datatable-basic table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Asset Name</th>
                <th>Serial No.</th>
                <th>Tag No.</th>
                <th>Product Type</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
      <tbody>
        @foreach($assets as $asset)
        <tr>
            <td>{{$asset->asset_id}}</td>
            <td><a href="{{route('view_assets',['id' =>  $asset->asset_id])}}">{{$asset->asset_name}}</a></td>
            <td>{{$asset->asset_serial_no}}</td>
            <td>{{$asset->asset_tag_number}}</td>
            <td>{{ucwords($asset->asset_product_type)}}</td>
            <td>{{ ucwords(str_replace('_',' ',$asset->asset_status_id)) }}</td>

            <td class="text-center">
                <div class="list-icons">
                  <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{route('view_assets',['id' =>  $asset->asset_id])}}" class="dropdown-item"><i class="icon-file-pdf"></i> View</a>
                      <a href="{{route('view_assets',['id' =>  $asset->asset_id])}}" class="dropdown-item"><i class="icon-file-excel"></i> Edit</a>
                      <a class="dropdown-item delete_assets" data-id="{{$asset->asset_id}}" href="javascript:void(0)"><i class="icon-file-word"></i> Delete</a>
                    </div>
                  </div>
                </div>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /basic datatable -->

</div>
<!-- /content area -->

</div>
<!-- /main content -->

@endsection


@section('js')
    <script>
        $(document).ready(function(){
            $('.delete_assets').on('click', function () {
                var tr = $(this).closest('tr');
                if(confirm('Are you sure you want to delete this Asset?')){
                    var id = $(this).attr('data-id');
                    $.ajax({
                        url : "{{route('delete_assets')}}",
                        data: {'id' : id, "_token": "{{ csrf_token() }}"},
                        type:'post',
                        success:function(r){
                            if(r){
                                $(tr).hide();
                            }else{
                                alert('Something went wrong');
                            }
                        }
                    })
                }
            });
        });
    </script>
@endsection

