@extends('layouts.app')
@section('meta_title') Company Lists @endsection
@section('page_bread_scrum')
    Company
@endsection
@section('content')

<!-- Main content -->
<div class="content-wrapper">

    <!-- Content area -->
<div class="content">

  <!-- Basic datatable -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title font-weight-bold">View Companies</h5>
    </div>
    <div class="card-body">
        Manage all companies here.
    </div>
    
    <table class="table datatable-basic table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
      <tbody>
        @foreach($companies as $company)
        <tr>
            <td>{{$company->company_id}}</td>
            <td><a href="{{route('view_company',['id' =>  $company->company_id])}}">{{$company->company_name}}</a></td>
            <td>{{$company->company_email}}</td>
            <td>{{$company->company_phone_no}}</td>
            <td><a href="{{'http://'.$company->company_website}}" target="_blank">{{$company->company_website}}</a></td>

            <td><span class="badge">{{ ($company->company_is_active == 1 ? 'Active' : 'Not Active') }}</span></td>
            
            <td class="text-center">
                <div class="list-icons">
                  <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{route('view_company',['id' =>  $company->company_id])}}" class="dropdown-item"><i class="icon-file-pdf"></i> View</a>
                      <a href="{{route('view_company',['id' =>  $company->company_id])}}" class="dropdown-item"><i class="icon-file-excel"></i> Edit</a>
                      <a class="dropdown-item delete_company" data-id="{{$company->company_id}}" href="javascript:void(0)"><i class="icon-file-word"></i> Delete</a>
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
            $('.delete_company').on('click', function () {
                var tr = $(this).closest('tr');
                if(confirm('Are you sure you want to delete this Company?')){
                    var id = $(this).attr('data-id');
                    $.ajax({
                        url : "{{route('delete_company')}}",
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


