@extends('layouts.app')

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
    <div class="content">

      <!-- Basic datatable -->
      <div class="card">
        <div class="card-header header-elements-inline">
          <h5 class="card-title font-weight-bold">View Contacts</h5>
        </div>
        <div class="card-body">
            Manage all your contacts here.
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
            @foreach($contacts as $contact)
            <tr>
              <td>{{$contact->contact_id}}</td>
              <td><a href="{{route('view_contact',['id' =>  $contact->contact_id])}}">{{$contact->contact_f_name .' '. $contact->contact_l_name}}</a></td>
              <td>{{$contact->contact_work_email}}</td>
              <td>{{$contact->contact_office_phone}}</td>
              <td>{{$contact->contact_city}}</td>
              <td><spn class="badge badge-success">Activ</spn></td>
              <td class="text-center">
                <div class="list-icons">
                  <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{route('view_contact',['id' =>  $contact->contact_id])}}" class="dropdown-item"><i class="icon-file-pdf"></i> View</a>
                      <a href="{{route('view_contact',['id' =>  $contact->contact_id])}}" class="dropdown-item"><i class="icon-file-excel"></i> Edit</a>
                      <a class="dropdown-item delete_contact" data-id="{{$contact->contact_id}}" href="javascript:void(0)"><i class="icon-file-word"></i> Delete</a>
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
       $('.delete_contact').on('click', function () {
           var tr = $(this).closest('tr');
          if(confirm('Are you sure you want to delete this user?')){
              var id = $(this).attr('data-id');
              $.ajax({
                  url : "{{route('delete_contact')}}",
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