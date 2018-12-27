{{-- @extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m8">
                <div class="card">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="align_center">Contact Details</h4>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col s12" action="{{route('update_contact',['id' => $contact->contact_id])}}" method="post" id="Contact_form">
                            @csrf
                            <div class="input-field col s6">
                                <input  id="contact_f_name" name="contact_f_name" type="text" class="validate"  value="{{ $contact->contact_f_name }}">
                                <label for="contact_f_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="validate" value="{{ $contact->contact_l_name }}">
                                <label for="contact_l_name">Last Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_work_email" name="contact_work_email" type="email" class="validate" value="{{ $contact->contact_work_email }}">
                                <label for="contact_work_email">Email Address</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="contact_company_id" id="contact_company_id">
                                    @foreach($companies as $company)
                                    <option value="{{$company->company_id}}" {{$contact->contact_company_id == $company->company_id ? 'selected' : ''}}>{{$company->company_name}}</option>
                                    @endforeach
                                </select>
                                <label>Select Company</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_office_phone" name="contact_office_phone" type="text" class="validate" value="{{ $contact->contact_office_phone }}">
                                <label for="contact_office_phone">Office Phone</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_fax" name="contact_fax" type="text" class="validate" value="{{ $contact->contact_fax }}">
                                <label for="contact_fax">Fax</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_office_phone_ext" name="contact_office_phone_ext" type="text" class="validate" value="{{ $contact->contact_office_phone_ext }}">
                                <label for="contact_office_phone_ext">Office Extension</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_city" name="contact_city" type="text" class="validate" value="{{ $contact->contact_city }}">
                                <label for="contact_city">Contact City</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_state" name="contact_state" type="text" class="validate" value="{{ $contact->contact_state }}">
                                <label for="contact_state">Contact State</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_country" name="contact_country" type="text" class="validate" value="{{ $contact->contact_country }}">
                                <label for="contact_country">Contact Country</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_street_address" name="contact_street_address" type="text" class="validate" value="{{ $contact->contact_street_address }}">
                                <label for="contact_street_address">Street Address</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="contact_assigned_to_id" id="contact_assigned_to_id">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}" {{$contact->contact_assigned_to_id == $user->id ? 'selected' : ''}}>{{$user->user_f_name .' '. $user->user_l_name}}</option>
                                    @endforeach
                                </select>
                                <label>Contact Assign To:</label>
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
 --}}



@extends('layouts.app')

@section('content')

<!-- Main content -->
<div class="content-wrapper">

<!-- Content area -->
    <div class="content">

        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title font-weight-semibold">Contact Details</h5>
            </div>

            <div class="card-body">
                <p class="mb-4">Manage your contact details here.</p>

                <form action="{{route('update_contact',['id' => $contact->contact_id])}}" method="post" id="Contact_form">
                    <fieldset class="mb-3">
                        
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">First Name</label>
                            <div class="col-lg-10">
                                <input id="contact_f_name" name="contact_f_name" type="text" class="form-control" value="{{ $contact->contact_f_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Last Name</label>
                            <div class="col-lg-10">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="form-control" value="{{ $contact->contact_l_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email Address</label>
                            <div class="col-lg-10">
                                <input id="contact_work_email" name="contact_work_email" type="email" class="form-control" value="{{ $contact->contact_work_email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="form-control" value="{{ $contact->contact_l_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="form-control" value="{{ $contact->contact_l_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="form-control" value="{{ $contact->contact_l_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="form-control" value="{{ $contact->contact_l_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="form-control" value="{{ $contact->contact_l_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="form-control" value="{{ $contact->contact_l_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="form-control" value="{{ $contact->contact_l_name }}">
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
                    contact_company_id : {
                        required:true
                    },
                    contact_office_phone: {
                        required: true,
                        maxlength: 55
                    },contact_office_phone_ext: {
                        required: true,
                        maxlength: 55
                    },
                    contact_city:{
                        required: true,
                        maxlength: 55
                    },
                    contact_state:{
                        required: true,
                        maxlength: 55
                    },
                    contact_country:{
                        required: true,
                        maxlength: 55
                    },
                    contact_street_address:{
                        required: true,
                        maxlength: 255
                    },
                    contact_assigned_to_id:{
                        required: true,
                    }
                },
                //For custom messages
                messages: {
                    contact_f_name:{
                        required: "Enter Enter First Name",
                        maxlength: "Max 55 characters allowed"
                    },
                    contact_l_name:{
                        required: "Enter Enter Last Name",
                        maxlength: "Max 55 characters allowed"
                    },
                    contact_work_email: {
                        required: "Enter Enter Work Email",
                        email:"Enter valid Email",
                        maxlength: "Max 90 characters allowed",
                        remote: "Email already exist"
                    },
                    contact_company_id : {
                        required : "Please Select Company id"
                    },
                    contact_office_phone: {
                        required: 'Enter Enter Office Phone',
                        maxlength: 'Max 55 characters allowed'
                    },
                    contact_office_phone_ext: {
                        required: 'Enter Enter Office Phone extension',
                        maxlength: 'Max 55 characters allowed'
                    },
                    contact_city:{
                        required: 'Please Enter City Name',
                        maxlength: 'Max 55 characters allowed'
                    },
                    contact_state:{
                        required: 'Please Enter State Name',
                        maxlength: 'Max 55 characters allowed'
                    },
                    contact_country:{
                        required: 'Please Enter Country Name',
                        maxlength: 'Max 55 characters allowed'
                    },
                    contact_street_address:{
                        required: 'Please Enter street Address',
                        maxlength: 'Max 255 characters allowed'
                    },
                    contact_assigned_to_id:{
                        required: 'Please select Assign id',
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
