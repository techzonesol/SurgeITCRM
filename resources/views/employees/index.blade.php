@extends('layouts.app')

@section('meta_title') Employees Lists @endsection
@section('page_bread_scrum')
    Contacts
@endsection
@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            <!-- Basic datatable -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title font-weight-bold">View Employees</h5>
                </div>
                <div class="card-body">
                    Manage all your employees here.
                </div>

                <table class="table datatable-basic table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td><a href="{{route('view_contact',['id' =>  $employee->id])}}">{{$employee->user_f_name .' '. $employee->user_l_name}}</a></td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->user_cell_no}}</td>
                            <td>{{$employee->user_city}}</td>
                            <td><spn class="badge {{($employee->user_is_active ? 'badge-success' : 'badge-danger')}}">{{$employee->user_is_active ? 'Active' : 'Un Active'}}</spn></td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{route('view_employee',['id' =>  $employee->id])}}" class="dropdown-item"><i class="icon-file-pdf"></i> View</a>
                                            <a href="{{route('view_employee',['id' =>  $employee->id])}}" class="dropdown-item"><i class="icon-file-excel"></i> Edit</a>
                                            <a class="dropdown-item delete_user" data-id="{{$employee->id}}" href="javascript:void(0)"><i class="icon-file-word"></i> Delete</a>
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
            $('.delete_user').on('click', function () {
                var tr = $(this).closest('tr');
                if(confirm('Are you sure you want to delete this user?')){
                    var id = $(this).attr('data-id');
                    $.ajax({
                        url : "{{route('delete_user')}}",
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