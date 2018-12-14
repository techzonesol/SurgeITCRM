@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m10">
                <div class="card">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="align_center">View Contacts</h4>
                        </div>
                    </div>
                    <div class="row1">
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