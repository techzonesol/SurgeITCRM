@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m8">
                <div class="card">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="align_center">Create Assets</h4>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col s12" action="{{route('save_assets')}}" method="post" id="Assets_form">
                            @csrf
                            <div class="input-field col s6">
                                <input  id="asset_no" name="asset_no" type="text" class="validate">
                                <label for="asset_no">Assets No</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_serial_no" name="asset_serial_no" type="text" class="validate">
                                <label for="asset_serial_no">Serial No</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="asset_status_id" id="asset_status_id">
                                    <option value="" selected>Status</option>
                                    <option value="in_service">In Service</option>
                                    <option value="out_of_service">Out of Service</option>
                                    <option value="Inventory">Inventory</option>
                                </select>
                                <label>Select Status</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="asset_product_type" id="asset_product_type">
                                    <option value="" selected>Status</option>
                                    <option value="good">Good</option>
                                    <option value="service">Service</option>
                                </select>
                                <label>Product Type</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_image" name="asset_image" type="file" class="validate">
                                <label for="asset_image">Asset Image</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_in_service_date" name="asset_in_service_date" type="text" class="validate datepicker">
                                <label for="asset_in_service_date">Date in Service</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_details" name="asset_details" type="text" class="validate">
                                <label for="asset_details">Assets Details</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_name" name="asset_name" type="text" class="validate">
                                <label for="asset_name">Asset Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_tag_number" name="asset_tag_number" type="text" class="validate">
                                <label for="asset_tag_number">Tag Number</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="asset_receiving_notes" name="asset_receiving_notes" type="text" class="validate">
                                <label for="asset_receiving_notes">Receiving Notes</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="asset_contact_id" id="asset_contact_id">
                                    <option value="" selected>Status</option>
                                    <option value="good">Good</option>
                                    <option value="service">Service</option>
                                </select>
                                <label>Contact</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="company_billing_city" name="company_billing_city" type="text" class="validate">
                                <label for="company_billing_city">Billing City</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="company_fax" name="company_fax" type="text" class="validate">
                                <label for="company_fax">Company Fax</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="company_other_phone_no" name="company_other_phone_no" type="text" class="validate">
                                <label for="company_other_phone_no">Other Phone No.</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="company_website" name="company_website" type="text" class="validate">
                                <label for="company_website">Website</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="company_country" name="company_country" type="text" class="validate">
                                <label for="company_country">Country</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="company_billing_country" name="company_billing_country" type="text" class="validate">
                                <label for="company_billing_country">Billing Country</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="company_billing_zip_code" name="company_billing_zip_code" type="text" class="validate">
                                <label for="company_billing_zip_code">Billing Zip Code</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="company_billing_state" name="company_billing_state" type="text" class="validate">
                                <label for="company_billing_state">Billing state</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="company_billing_street_address" name="company_billing_street_address" type="text" class="validate">
                                <label for="company_billing_street_address">Billing Street Address</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="company_industry_id">
                                    <option value="" selected>Choose your Industry</option>
                                    <option value="1">Industry 1</option>
                                    <option value="2">Industry 2</option>
                                    <option value="3">Industry 3</option>
                                </select>
                                <label>Select industry</label>
                            </div>
                            <div class="input-field col s6">
                                <div class="switch">
                                    <label>
                                        Deactive
                                        <input type="checkbox" checked id="company_is_active" name="company_is_active">
                                        <span class="lever"></span>
                                        Active
                                    </label>
                                </div>
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
            $('select').formSelect();

            $("#Contact_form").validate({
                rules: {
                    company_name: {
                        required: true,
                        maxlength: 55
                    },
                    company_email: {
                        required: true,
                        email:true,
                        maxlength: 90,
                        remote: {
                            url: "{{route('check_email')}}",
                            type: "GET",
                            cache: false,
                            dataType: "json",
                            data: {
                                email: function() { return $("#company_email").val(); }
                            }
                        }
                    },
                    company_phone_no: {
                        required: true,
                        maxlength: 55

                    },
                    company_phone_no_ext : {
                        required:true,
                        maxlength: 55
                    },
                    company_title: {
                        required: true,
                        maxlength: 90
                    },
                    company_state: {
                        required: true,
                        maxlength: 55
                    },
                    company_zip_code:{
                        required: true,
                        maxlength: 55
                    },
                    company_street_address:{
                        required: true,
                        maxlength: 255
                    },
                    company_billing_city:{
                        required: true,
                        maxlength: 55
                    },
                    company_fax:{
                        required: true,
                        maxlength: 55
                    },
                    company_other_phone_no:{
                        required: true,
                        maxlength: 55
                    },
                    company_website:{
                        required: true,
                        maxlength: 255
                    },
                    company_country:{
                        required: true,
                        maxlength: 55
                    },
                    company_billing_country:{
                        required: true,
                        maxlength: 55
                    },
                    company_billing_zip_code:{
                        required: true,
                        maxlength: 55
                    },
                    company_billing_state:{
                        required: true,
                        maxlength: 55
                    },
                    company_billing_street_address:{
                        required: true,
                        maxlength: 255
                    },
                    company_industry_id:{
                        required: true
                    }
                },
                //For custom messages
                messages: {
                    company_name:{
                        required: "Please enter company name",
                        maxlength: "Max 55 characters allowed"
                    },
                    company_email: {
                        required: "Please enter company email",
                        email:"Enter valid Email",
                        maxlength: "Max 90 characters allowed",
                        remote: "Email already exist"
                    },
                    company_phone_no: {
                        required: 'Please enter company phone no',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_phone_no_ext: {
                        required: 'Please enter company phone extension',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_title:{
                        required: 'Please enter company title',
                        maxlength: 'Max 90 characters allowed'
                    },
                    company_state:{
                        required: 'Please Enter state name',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_zip_code:{
                        required: 'Please enter company zip code',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_street_address:{
                        required: 'Please enter street address',
                        maxlength: 'Max 255 characters allowed'
                    },
                    company_billing_city:{
                        required: 'Please enter billing city',
                        maxlength: 'Max 255 characters allowed'
                    },
                    company_fax:{
                        required: 'Please enter fax',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_other_phone_no:{
                        required: 'Please enter other phone no',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_website:{
                        required: 'Please enter company website',
                        maxlength: 'Max 255 characters allowed'
                    },
                    company_country:{
                        required: 'Please enter company country',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_billing_country:{
                        required: 'Please enter billing country',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_billing_zip_code:{
                        required: 'Please enter zip code',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_billing_state:{
                        required: 'Please enter billing state',
                        maxlength: 'Max 55 characters allowed'
                    },
                    company_billing_street_address:{
                        required: 'Please Enter street Address',
                        maxlength: 'Max 255 characters allowed'
                    },
                    company_industry_id:{
                        required: 'Please select industry'
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