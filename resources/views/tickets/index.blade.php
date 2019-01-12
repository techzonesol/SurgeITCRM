@extends('layouts.app')
@section('meta_title') Tickets Lists @endsection
@section('page_bread_scrum')
    Tickets
@endsection
@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            <!-- Basic datatable -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title font-weight-bold">View Tickets</h5>
                </div>
                <div class="card-body">
                    Manage all your tickets here.
                </div>

                <table class="table datatable-basic table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Subject</th>
                        <th>Assign To</th>
                        <th>Priority</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{$ticket->ticket_id}}</td>
                            <td>{{$ticket->ticket_subject}}</td>
                            <td><a href="{{route('view_employee',['id' =>  $ticket->employee_id])}}">{{$ticket->user_f_name .' '. $ticket->user_l_name}}</a></td>
                            <td>{{$ticket->ticket_priority}}</td>
                            <td>{{$ticket->category_name}}</td>
                            <td>{{$ticket->ticket_status_id}}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{route('view_ticket',['id' =>  $ticket->ticket_id])}}" class="dropdown-item"><i class="icon-file-pdf"></i> View</a>
                                            <a href="{{route('view_ticket',['id' =>  $ticket->ticket_id])}}" class="dropdown-item"><i class="icon-file-excel"></i> Edit</a>
                                            <a class="dropdown-item delete_ticket" data-id="{{$ticket->ticket_id}}" href="javascript:void(0)"><i class="icon-file-word"></i> Delete</a>
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
            $('.delete_ticket').on('click', function () {
                var tr = $(this).closest('tr');
                if(confirm('Are you sure you want to delete this ticket?')){
                    var id = $(this).attr('data-id');
                    $.ajax({
                        url : "{{route('delete_ticket')}}",
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