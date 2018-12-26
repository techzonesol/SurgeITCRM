@extends('layouts.app')
@section('content1')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m12" style="background: white;">
                <div class="card">
                    <div class="">
                        <div class="col m6">
                            <h4 class="margin-0px">View Contacts</h4>
                        </div>
                        <div class="col m6 right-align">
                            <p><a class="waves-effect waves-light btn-small delete_company" href="{{route('create_contact')}}"><i class="fa fa-plus" style="font-size: 0.8rem;"></i> Add Conact</a></p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col s12">
                            <table class="highlight">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->contact_id}}</td>
                                <td>{{$contact->contact_f_name .' '. $contact->contact_l_name}}</td>
                                <td>{{$contact->contact_work_email}}</td>
                                <td>{{$contact->contact_office_phone}}</td>
                                <td>{{$contact->contact_city}}</td>
                                <td>Active</td>
                                <td>
                                    <a class="waves-effect waves-light btn-small delete_contact" data-id="{{$contact->contact_id}}" href="javascript:void(0)">Delete</a>
                                    <a class="waves-effect waves-light btn-small" href="{{route('view_contact',['id' =>  $contact->contact_id])}}">Details</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                            {{$contacts}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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


@section('content')

<!-- Content area -->
<div class="content">

  <!-- Basic datatable -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">View Contacts</h5>
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
                  <a class="dropdown-item" data-id="{{$contact->contact_id}}" href="javascript:void(0)"><i class="icon-file-word"></i> Delete</a>
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

@endsection