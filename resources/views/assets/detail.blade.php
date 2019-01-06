@extends('layouts.app')
@section('meta_title') Assets Detail @endsection
@section('page_bread_scrum')
    Assets
@endsection

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title font-weight-semibold">Edit Assets</h5>
                </div>

                <div class="card-body">
                    <p class="mb-4">Manage your Assets here.</p>

                    <form action="{{route('update_assets',['id' => $asset->asset_id])}}" method="post" id="Assets_form" enctype="multipart/form-data">
                        <fieldset class="mb-3">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Asset Name</label>
                                <div class="col-lg-10">
                                    <input id="asset_name" name="asset_name" type="text" class="form-control" value="{{$asset->asset_tag_number}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Tag Number</label>
                                <div class="col-lg-10">
                                    <input id="asset_tag_number" name="asset_tag_number" type="text" class="form-control" value="{{$asset->asset_tag_number}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Assets No</label>
                                <div class="col-lg-10">
                                    <input id="asset_no" name="asset_no" type="text" class="form-control" value="{{$asset->asset_no}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Serial No</label>
                                <div class="col-lg-10">
                                    <input id="asset_serial_no" name="asset_serial_no" type="text" class="form-control" value="{{$asset->asset_serial_no}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Select Status</label>
                                <div class="col-lg-10">
                                    <select name="asset_status_id" id="asset_status_id" class="form-control">
                                        <option value="" selected>Status</option>
                                        <option value="in_service" {{$asset->asset_status_id == 'in_service' ? 'selected' : ''}}>In Service</option>
                                        <option value="out_of_service" {{$asset->asset_status_id == 'out_of_service' ? 'selected' : ''}}>Out of Service</option>
                                        <option value="inventory" {{$asset->asset_status_id == 'inventory' ? 'selected' : ''}}>Inventory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Asset Image</label>
                                <div class="col-lg-10">
                                    <input id="asset_image" name="asset_image" type="file" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Date in Service</label>
                                <div class="col-lg-10">
                                    <input id="asset_in_service_date" name="asset_in_service_date" type="date" class="form-control" value="{{date('Y-m-d', strtotime($asset->asset_in_service_date))}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Assets Details</label>
                                <div class="col-lg-10">
                                    <input id="asset_details" name="asset_details" type="text" class="form-control" value="{{$asset->asset_details}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Date Sold</label>
                                <div class="col-lg-10">
                                    <input id="asset_date_sold" name="asset_date_sold" type="date" class="form-control" value="{{date('Y-m-d', strtotime($asset->asset_date_sold))}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Type</label>
                                <div class="col-lg-10">
                                    <select name="asset_product_type" id="asset_product_type" class="form-control">
                                        <option value="good" {{$asset->asset_product_type == 'good' ? 'selected' : ''}}>Good</option>
                                        <option value="service" {{$asset->asset_product_type == 'service' ? 'selected' : ''}}>Service</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Memory</label>
                                <div class="col-lg-10">
                                    <input id="asset_product_memory" name="asset_product_memory" type="text" class="form-control" value="{{$asset->asset_product_memory}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Architecture</label>
                                <div class="col-lg-10">
                                    <select name="asset_product_architecture" id="asset_product_architecture" class="form-control">
                                        <option value="32" {{$asset->asset_product_architecture == '32' ? 'selected' : ''}}>32 bit</option>
                                        <option value="64" {{$asset->asset_product_architecture == '64' ? 'selected' : ''}}>64 bit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Processor</label>
                                <div class="col-lg-10">
                                    <input id="asset_product_processor" name="asset_product_processor" type="text" class="form-control" value="{{$asset->asset_product_processor}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Operating System</label>
                                <div class="col-lg-10">
                                    <select name="asset_product_os" id="asset_product_os" class="form-control">
                                        <option value="windows10" {{$asset->asset_product_os == 'windows10' ? 'selected' : ''}}>Windows 10</option>
                                        <option value="windows7" {{$asset->asset_product_os == 'windows7' ? 'selected' : ''}}>Windows 7</option>
                                        <option value="windows8" {{$asset->asset_product_os == 'windows8' ? 'selected' : ''}}>Windows 8</option>
                                        <option value="windows_vista" {{$asset->asset_product_os == 'windows_vista' ? 'selected' : ''}}>Windows Vista</option>
                                        <option value="server2003" {{$asset->asset_product_os == 'server2003' ? 'selected' : ''}}>Server 2003</option>
                                        <option value="server2008" {{$asset->asset_product_os == 'server2008' ? 'selected' : ''}}>Server 2008</option>
                                        <option value="server2012" {{$asset->asset_product_os == 'server2008' ? 'selected' : ''}}>Server 2012</option>
                                        <option value="server2016" {{$asset->asset_product_os == 'server2016' ? 'selected' : ''}}>Server 2016</option>
                                        <option value="mac_os" {{$asset->asset_product_os == 'mac_os' ? 'selected' : ''}}>Mac OS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Receiving Notes</label>
                                <div class="col-lg-10">
                                    <input id="asset_receiving_notes" name="asset_receiving_notes" type="text" class="form-control" value="{{$asset->asset_receiving_notes}}">
                                </div>
                            </div>
                        </fieldset>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form inputs -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->
@endsection


@section('content')

<!-- Main content -->
<div class="content-wrapper">

<!-- Content area -->
    <div class="content">

        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title font-weight-semibold">Asset Details</h5>
            </div>

            <div class="card-body">
                <p class="mb-4">Manage your assets detail here.</p>

                <form action="{{route('update_assets',['id' => $asset->asset_id])}}" method="post" id="Assets_form" enctype="multipart/form-data">
                    <fieldset class="mb-3">
                        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Asset Name</label>
                            <div class="col-lg-10">
                                <input id="asset_name" name="asset_name" type="text" class="form-control" value="{{ $asset->contact_f_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Tag Number</label>
                            <div class="col-lg-10">
                                <input name="asset_tag_number" type="text" class="form-control" value="{{$asset->asset_tag_number}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Asset No</label>
                            <div class="col-lg-10">
                                <input id="asset_no" name="asset_no" type="text" class="form-control" value="{{$asset->asset_no}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Serial No</label>
                            <div class="col-lg-10">
                                <input id="asset_serial_no" name="asset_serial_no" type="text" class="form-control" value="{{$asset->asset_serial_no}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Fax</label>
                            <div class="col-lg-10">
                                <input id="contact_fax" name="contact_fax" type="text" class="form-control" value="{{ $asset->contact_fax }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Office Extension</label>
                            <div class="col-lg-10">
                                <input id="contact_office_phone_ext" name="contact_office_phone_ext" type="text" class="form-control" value="{{ $asset->contact_office_phone_ext }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">City</label>
                            <div class="col-lg-10">
                                <input id="contact_city" name="contact_city" type="text" class="form-control" value="{{ $asset->contact_city }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">State</label>
                            <div class="col-lg-10">
                                <input id="contact_state" name="contact_state" type="text" class="form-control" value="{{ $asset->contact_state }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Country</label>
                            <div class="col-lg-10">
                                <input id="contact_country" name="contact_country" type="text" class="form-control" value="{{ $asset->contact_country }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Street Address</label>
                            <div class="col-lg-10">
                                <input id="contact_street_address" name="contact_street_address" type="text" class="form-control" value="{{ $asset->contact_street_address }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Contact Assign To:</label>
                            <div class="col-lg-10">
                                <select name="contact_assigned_to_id" id="contact_assigned_to_id" class="form-control">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}" {{$asset->contact_assigned_to_id == $user->id ? 'selected' : ''}}>{{$user->user_f_name .' '. $user->user_l_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form inputs -->

    </div>
    <!-- /content area -->    

</div>
<!-- /main content -->

@endsection


@section('js')
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.datepicker').datepicker();

            $("#Assets_form").validate({
                rules: {
                    asset_name: {
                        required: true,
                        maxlength: 55
                    },
                    asset_tag_number: {
                        maxlength: 55,
                    },
                    asset_no: {
                        maxlength: 55

                    },
                    asset_serial_no : {
                        maxlength: 55
                    }
                },
                //For custom messages
                messages: {
                    asset_name:{
                        required: "Please enter asset name",
                        maxlength: "Max 55 characters allowed"
                    },
                    asset_tag_number: {
                        maxlength: "Max 55 characters allowed",
                    },
                    asset_no: {
                        maxlength: 'Max 55 characters allowed'
                    },
                    asset_serial_no: {
                        maxlength: 'Max 55 characters allowed'
                    }
                },
                errorElement : 'div',
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(placement).append(error)
                    } else {
                        error.insertAfter(element);
                    }
                }
            });


        });
    </script>
@endsection