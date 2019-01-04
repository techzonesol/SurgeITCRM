@extends('layouts.app')
@section('meta_title') Create Company @endsection
@section('page_bread_scrum')
    Company
@endsection
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title font-weight-semibold">Create Company</h5>
                </div>

                <div class="card-body">
                    <p class="mb-4">Create your Companies here.</p>

                    <form action="{{url('/company/create')}}" method="post" id="Contact_form">
                        <fieldset class="mb-3">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Company Name</label>
                                <div class="col-lg-10">
                                    <input id="company_name" name="company_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Company Email</label>
                                <div class="col-lg-10">
                                    <input id="company_email" name="company_email" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Company Phone No</label>
                                <div class="col-lg-10">
                                    <input id="company_phone_no" name="company_phone_no" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Phone Ext</label>
                                <div class="col-lg-10">
                                    <input id="company_phone_no_ext" name="company_phone_no_ext" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Company Title</label>
                                <div class="col-lg-10">
                                    <input id="company_title" name="company_title" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Company State</label>
                                <div class="col-lg-10">
                                    <input id="company_state" name="company_state" type="text" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Zip Code</label>
                                <div class="col-lg-10">
                                    <input id="company_zip_code" name="company_zip_code" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Street Address</label>
                                <div class="col-lg-10">
                                    <input id="company_street_address" name="company_street_address" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Billing City</label>
                                <div class="col-lg-10">
                                    <input id="company_billing_city" name="company_billing_city" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Company Fax</label>
                                <div class="col-lg-10">
                                    <input id="company_fax" name="company_fax" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Other Phone No.</label>
                                <div class="col-lg-10">
                                    <input id="company_other_phone_no" name="company_other_phone_no" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Website</label>
                                <div class="col-lg-10">
                                    <input id="company_website" name="company_website" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Country</label>
                                <div class="col-lg-10">
                                    <input id="company_country" name="company_country" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Billing Country</label>
                                <div class="col-lg-10">
                                    <input id="company_billing_country" name="company_billing_country" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Website</label>
                                <div class="col-lg-10">
                                    <input id="company_website" name="company_website" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Billing Zip Code</label>
                                <div class="col-lg-10">
                                    <input id="company_billing_zip_code" name="company_billing_zip_code" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Billing state</label>
                                <div class="col-lg-10">
                                    <input id="company_billing_state" name="company_billing_state" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Billing Street Address</label>
                                <div class="col-lg-10">
                                    <input id="company_billing_street_address" name="company_billing_street_address" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Select industry</label>
                                <div class="col-lg-10">
                                    <select name="company_industry_id" id="company_industry_id" class="form-control">
                                        @foreach($industries as $industry)
                                            <option value="{{$industry->id}}" >{{$industry->industry_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Is Active</label>
                                <div class="col-lg-10">
                                    <div class="switch">
                                        <label>
                                            Deactive
                                            <input type="checkbox" checked id="company_is_active" name="company_is_active">
                                            <span class="lever"></span>
                                            Active
                                        </label>
                                    </div>
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