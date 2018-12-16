@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m10">
                <div class="card">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="align_center">View Companies</h4>
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
                                    <th>website</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{$company->company_id}}</td>
                                        <td>{{$company->company_name}}</td>
                                        <td>{{$company->company_email}}</td>
                                        <td>{{'(' .$company->company_phone_no_ext. ')' .' '.$company->company_phone_no}}</td>
                                        <td><a href="{{'http://'.$company->company_website}}">{{$company->company_website}}</a></td>
                                        <td>{{ ($company->company_is_active == 1 ? 'Active' : 'Un Active') }}</td>
                                        <td>
                                            <a class="waves-effect waves-light btn-small delete_company" data-id="{{$company->company_id}}" href="javascript:void(0)">Delete</a>
                                            <a class="waves-effect waves-light btn-small" href="{{route('view_company',['id' =>  $company->company_id])}}">Details</a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                            {{$companies}}
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