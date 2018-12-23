@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m12 background-white">
                <div class="card">
                    <div class="col s6">
                        <h4 class="margin-0px">View Assets</h4>
                    </div>
                    <div class="col s6">
                        <p class="right-align">
                            <a class="waves-effect waves-light btn-small" href="{{route('create_assets')}}"><i class="fa fa-plus" style="font-size: 0.8rem;"></i> Add Company</a>
                        </p>
                    </div>
                    <div class="col s12">
                        <table class="highlight">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
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
                                    <td>{{$asset->asset_name}}</td>
                                    <td>{{$asset->asset_serial_no}}</td>
                                    <td>{{$asset->asset_tag_number}}</td>
                                    <td>{{$asset->asset_product_type}}</td>
                                    <td>{{ $asset->asset_status_id }}</td>
                                    <td>
                                        <a class="waves-effect waves-light btn-small delete_assets" data-id="{{$asset->asset_id}}" href="javascript:void(0)">Delete</a>
                                        <a class="waves-effect waves-light btn-small" href="{{route('view_assets',['id' =>  $asset->asset_id])}}">Details</a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        {{$assets}}
                    </div>
                </div>
            </div>
        </div>
    </div>
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