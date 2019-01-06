@extends('layouts.app')
@section('meta_title') Create User @endsection
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title font-weight-semibold">Add New User</h5>
                </div>

                <div class="card-body">
                    <p class="mb-4">Create your employees here.</p>

                    <form action="{{route('create_user')}}" method="post" id="new-user">
                        <fieldset class="mb-3">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">First Name</label>
                                <div class="col-lg-10">
                                    <input id="user_f_name" name="user_f_name" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Last Name</label>
                                <div class="col-lg-10">
                                    <input id="user_l_name" name="user_l_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Email Address</label>
                                <div class="col-lg-10">
                                    <input id="email" name="email" type="email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">User Name</label>
                                <div class="col-lg-10">
                                    <input id="user_username" name="user_username" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Password</label>
                                <div class="col-lg-10">
                                    <input id="user_password" name="user_password" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">DOB</label>
                                <div class="col-lg-10">
                                    <input id="user_dob" name="user_dob" type="text" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Home Phone</label>
                                <div class="col-lg-10">
                                    <input id="user_home_phone" name="user_home_phone" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Cell Phone</label>
                                <div class="col-lg-10">
                                    <input id="user_cell_no" name="user_cell_no" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Street Address</label>
                                <div class="col-lg-10">
                                    <input id="user_street_address" name="user_street_address" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Zip Code</label>
                                <div class="col-lg-10">
                                    <input id="user_zip_code" name="user_zip_code" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Country</label>
                                <div class="col-lg-10">
                                    <input id="user_country" name="user_country" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">State</label>
                                <div class="col-lg-10">
                                    <input id="user_state" name="user_state" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">City</label>
                                <div class="col-lg-10">
                                    <input id="user_city" name="user_city" type="text" class="form-control">
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

    $("#new-user").validate({
            rules: {
                user_f_name: {
                    required: true,
                    maxlength: 55
                },
                user_l_name: {
                    required: true,
                    maxlength: 55
                },
                user_username: {
                    required: true,
                    maxlength: 9
                },
                email: {
                    required: true,
                    email:true,
                },
                user_password: {
                    required: true,
                    maxlength: 55
                }
            },
            //For custom messages
            messages: {
                user_f_name:{
                    required: "Please Enter First Name",
                    maxlength: "Max 55 characters allowed"
                },
                user_l_name:{
                    required: "Please Enter Last Name",
                    maxlength: "Max 55 characters allowed"
                },
                user_username:{
                    required:"Please Enter User Name",
                    maxlength:"Max 9 characters allowed"
                },
                email: {
                    required: "Please Enter Email",
                    email:"Enter valid Email",
                    maxlength: "Max 90 characters allowed"
                },
                user_password: "Please Enter Password"
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
    $(document).ready(function(){
        $('.datepicker').datepicker();
    });

</script>
@endsection