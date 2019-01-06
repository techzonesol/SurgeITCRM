@extends('layouts.app')
@section('meta_title') Create Contacts @endsection
@section('page_bread_scrum')
    Contacts
@endsection
@section('content')
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title font-weight-semibold">Contact Details</h5>
                </div>

                <div class="card-body">
                    <p class="mb-4">Create your contact here.</p>

                    <form action="{{route('save_contact')}}" method="post" id="Contact_form">
                        @csrf
                        <fieldset class="mb-3">

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">First Name</label>
                                <div class="col-lg-10">
                                    <input id="contact_f_name" name="contact_f_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Last Name</label>
                                <div class="col-lg-10">
                                    <input id="contact_l_name" name="contact_l_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Email Address</label>
                                <div class="col-lg-10">
                                    <input id="contact_work_email" name="contact_work_email" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Select Company:</label>
                                <div class="col-lg-10">
                                    <select name="contact_company_id" id="contact_company_id" class="form-control">
                                        <option value="">Select Company</option>
                                        @foreach($companies as $company)
                                            <option value="{{$company->company_id}}">{{$company->company_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Office Phone</label>
                                <div class="col-lg-10">
                                    <input id="contact_office_phone" name="contact_office_phone" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Fax</label>
                                <div class="col-lg-10">
                                    <input id="contact_fax" name="contact_fax" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Office Extension</label>
                                <div class="col-lg-10">
                                    <input id="contact_office_phone_ext" name="contact_office_phone_ext" type="text" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Street Address</label>
                                <div class="col-lg-10">
                                    <input id="contact_street_address" name="contact_street_address" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">City</label>
                                <div class="col-lg-10">
                                    <input id="contact_city" name="contact_city" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">State</label>
                                <div class="col-lg-10">
                                    <input id="contact_state" name="contact_state" type="text" class="form-control" value="IL">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Postal Code</label>
                                <div class="col-lg-10">
                                    <input id="contact_zip_code" name="contact_zip_code" type="text" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Country</label>
                                <div class="col-lg-10">
                                    <input id="contact_country" name="contact_country" type="text" class="form-control" value="United State">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Contact Assign To:</label>
                                <div class="col-lg-10">
                                    <select name="contact_assigned_to_id" id="contact_assigned_to_id" class="form-control">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->user_f_name .' '. $user->user_l_name}}</option>
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
    @endsection
@section('js')
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $("#Contact_form").validate({
            rules: {
                contact_f_name: {
                    required: true,
                    maxlength: 55
                },
                contact_l_name: {
                    required: true,
                    maxlength: 55

                },
                contact_work_email: {
                    required: true,
                    email:true,
                    maxlength: 90,
                    remote: {
                        url: "{{route('check_email')}}",
                        type: "GET",
                        cache: false,
                        dataType: "json",
                        data: {
                            email: function() { return $("#contact_work_email").val(); }
                        }
                    }
                },
                contact_office_phone: {
                    maxlength: 55
                },contact_office_phone_ext: {
                    maxlength: 55
                },
                contact_city:{
                    maxlength: 55
                },
                contact_state:{
                    maxlength: 55
                },
                contact_country:{
                    maxlength: 55
                },
                contact_street_address:{
                    maxlength: 255
                }

            },
            //For custom messages
            messages: {
                contact_f_name:{
                    required: "Please enter first name",
                    maxlength: "Max 55 characters allowed"
                },
                contact_l_name:{
                    required: "Please enter last name",
                    maxlength: "Max 55 characters allowed"
                },
                contact_work_email: {
                    required: "Please enter work email",
                    email:"Enter valid Email",
                    maxlength: "Max 90 characters allowed",
                    remote: "Email already exist"
                },
                contact_office_phone: {
                    maxlength: 'Max 55 characters allowed'
                },
                contact_office_phone_ext: {
                    maxlength: 'Max 55 characters allowed'
                },
                contact_city:{
                    maxlength: 'Max 55 characters allowed'
                },
                contact_state:{
                    maxlength: 'Max 55 characters allowed'
                },
                contact_country:{
                    maxlength: 'Max 55 characters allowed'
                },
                contact_street_address:{
                    maxlength: 'Max 255 characters allowed'
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