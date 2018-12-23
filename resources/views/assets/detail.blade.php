@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m8 offset-m2">
                <div class="card">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="align_center">Assets Detail</h4>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col s12" action="{{route('update_assets',['id' => $asset->asset_id])}}" method="post" id="Assets_form" enctype="multipart/form-data">
                            @csrf
                            <div class="input-field col s6">
                                <input id="asset_name" name="asset_name" type="text" class="validate" value="{{$asset->asset_name}}">
                                <label for="asset_name">Asset Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_tag_number" name="asset_tag_number" type="text" class="validate" value="{{$asset->asset_tag_number}}">
                                <label for="asset_tag_number">Tag Number</label>
                            </div>
                            <div class="input-field col s6">
                                <input  id="asset_no" name="asset_no" type="text" class="validate" value="{{$asset->asset_no}}">
                                <label for="asset_no">Assets No</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_serial_no" name="asset_serial_no" type="text" class="validate" value="{{$asset->asset_serial_no}}">
                                <label for="asset_serial_no">Serial No</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="asset_status_id" id="asset_status_id">
                                    <option value="" selected>Status</option>
                                    <option value="in_service" {{$asset->asset_status_id == 'in_service' ? 'selected' : ''}}>In Service</option>
                                    <option value="out_of_service" {{$asset->asset_status_id == 'out_of_service' ? 'selected' : ''}}>Out of Service</option>
                                    <option value="inventory" {{$asset->asset_status_id == 'inventory' ? 'selected' : ''}}>Inventory</option>
                                </select>
                                <label>Select Status</label>
                            </div>
                            <div class="input-field file-field col s6">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="asset_image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Asset Image" name="asset_image">
                                </div>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_in_service_date" name="asset_in_service_date" type="text" class="validate datepicker" value="{{date('Y-m-d', strtotime($asset->asset_in_service_date))}}">
                                <label for="asset_in_service_date">Date in Service</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_details" name="asset_details" type="text" class="validate" value="{{$asset->asset_details}}">
                                <label for="asset_details">Assets Details</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_date_sold" name="asset_date_sold" type="text" class="validate datepicker" value="{{date('Y-m-d', strtotime($asset->asset_date_sold))}}" >
                                <label for="asset_date_sold">Date Sold</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="asset_product_type" id="asset_product_type">
                                    <option value="good">Good</option>
                                    <option value="service">Service</option>
                                </select>
                                <label>Product Type</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_product_memory" name="asset_product_memory" type="text" class="validate" value="{{$asset->asset_product_memory}}">
                                <label for="asset_product_memory">Product Memory</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="asset_product_architecture" id="asset_product_architecture">
                                    <option value="32" {{$asset->asset_product_architecture == '32' ? 'selected' : ''}}>32 bit</option>
                                    <option value="64" {{$asset->asset_product_architecture == '64' ? 'selected' : ''}}>64 bit</option>
                                </select>
                                <label>Product Architecture</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_product_processor" name="asset_product_processor" type="text" class="validate" value="{{$asset->asset_product_processor}}">
                                <label for="asset_product_processor">Product Processor</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="asset_product_os" id="asset_product_os">
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
                                <label>Operating System</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="asset_receiving_notes" name="asset_receiving_notes" type="text" class="validate" value="{{$asset->asset_receiving_notes}}">
                                <label for="asset_receiving_notes">Receiving Notes</label>
                            </div>
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light align_center" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.datepicker').datepicker();
            $('select').formSelect();

            $("#Assets_form").validate({
                rules: {
                    asset_name: {
                        required: true,
                        maxlength: 55
                    },
                    asset_tag_number: {
                        required: true,
                        maxlength: 55,
                    },
                    asset_no: {
                        required: true,
                        maxlength: 55

                    },
                    asset_serial_no : {
                        required:true,
                        maxlength: 55
                    },
                    asset_status_id: {
                        required: true
                    }
                },
                //For custom messages
                messages: {
                    asset_name:{
                        required: "Please enter asset name",
                        maxlength: "Max 55 characters allowed"
                    },
                    asset_tag_number: {
                        required: "Please enter tag number",
                        maxlength: "Max 55 characters allowed",
                    },
                    asset_no: {
                        required: 'Please enter asset no',
                        maxlength: 'Max 55 characters allowed'
                    },
                    asset_serial_no: {
                        required: 'Please enter serial number',
                        maxlength: 'Max 55 characters allowed'
                    },
                    asset_status_id:{
                        required: 'Please select status'
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