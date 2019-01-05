@extends('layouts.app')
@section('meta_title') Create Assets @endsection
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
                    <h5 class="card-title font-weight-semibold">Create Assets</h5>
                </div>

                <div class="card-body">
                    <p class="mb-4">Create your Assets here.</p>

                    <form action="{{route('save_assets')}}" method="post" id="Assets_form" enctype="multipart/form-data">
                        <fieldset class="mb-3">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Asset Name</label>
                                <div class="col-lg-10">
                                    <input id="asset_name" name="asset_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Tag Number</label>
                                <div class="col-lg-10">
                                    <input id="asset_tag_number" name="asset_tag_number" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Assets No</label>
                                <div class="col-lg-10">
                                    <input id="asset_no" name="asset_no" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Serial No</label>
                                <div class="col-lg-10">
                                    <input id="asset_serial_no" name="asset_serial_no" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Select Status</label>
                                <div class="col-lg-10">
                                    <select name="asset_status_id" id="asset_status_id" class="form-control">
                                        <option value="" selected>Status</option>
                                        <option value="in_service">In Service</option>
                                        <option value="out_of_service">Out of Service</option>
                                        <option value="Inventory">Inventory</option>
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
                                    <input id="asset_in_service_date" name="asset_in_service_date" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Assets Details</label>
                                <div class="col-lg-10">
                                    <input id="asset_details" name="asset_details" type="text" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Date Sold</label>
                                <div class="col-lg-10">
                                    <input id="asset_date_sold" name="asset_date_sold" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Type</label>
                                <div class="col-lg-10">
                                    <select name="asset_product_type" id="asset_product_type" class="form-control">
                                        <option value="good">Good</option>
                                        <option value="service">Service</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Memory</label>
                                <div class="col-lg-10">
                                    <input id="asset_product_memory" name="asset_product_memory" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Architecture</label>
                                <div class="col-lg-10">
                                    <select name="asset_product_architecture" id="asset_product_architecture" class="form-control">
                                        <option value="32">32 bit</option>
                                        <option value="64">64 bit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Product Processor</label>
                                <div class="col-lg-10">
                                    <input id="asset_product_processor" name="asset_product_processor" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Operating System</label>
                                <div class="col-lg-10">
                                    <select name="asset_product_os" id="asset_product_os" class="form-control">
                                        <option value="windows10">Windows 10</option>
                                        <option value="windows7">Windows 7</option>
                                        <option value="windows8">Windows 8</option>
                                        <option value="windows_vista">Windows Vista</option>
                                        <option value="server2003">Server 2003</option>
                                        <option value="server2008">Server 2008</option>
                                        <option value="server2012">Server 2012</option>
                                        <option value="server2016">Server 2016</option>
                                        <option value="mac_os">Mac OS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Receiving Notes</label>
                                <div class="col-lg-10">
                                    <input id="asset_receiving_notes" name="asset_receiving_notes" type="text" class="form-control">
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