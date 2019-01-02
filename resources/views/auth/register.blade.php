@extends('layouts.app')
@section('meta_title') Create User @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m12 background-white">
                <div class="card">

                    <div class="col s12">
                        <h4 class="align_center">Add New User</h4>
                    </div>


                    <form class="col s12" id="new-user" method="post" action="{{route('create_user')}}">
                            @csrf
                            <div class="input-field col s3">
                                <input  id="user_f_name" name="user_f_name" type="text" class="validate">
                                <label for="user_f_name">First Name</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="user_l_name" name="user_l_name" type="text" class="validate">
                                <label for="user_l_name">Last Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_username" name="user_username" type="text" class="validate">
                                <label for="user_username">User Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_password" name="user_password" type="password" class="validate">
                                <label for="user_password">Password</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_dob" name="user_dob" type="text" class="validate datepicker">
                                <label for="user_dob">DOB</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_home_phone" name="user_home_phone" type="text" class="validate">
                                <label for="user_home_phone">Home Phone</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_cell_no" name="user_cell_no" type="text" class="validate">
                                <label for="user_cell_no">Cell Phone</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_street_address" name="user_street_address" type="text" class="validate">
                                <label for="user_street_address">Street Address</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_zip_code" name="user_zip_code" type="text" class="validate">
                                <label for="user_zip_code">Zip Code</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_country" name="user_country" type="text" class="validate" value="United States">
                                <label for="user_country">Country</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_state" name="user_state" type="text" class="validate">
                                <label for="user_state">State</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="user_city" name="user_city" type="text" class="validate">
                                <label for="user_city">City</label>
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
@endsection

@section('js')
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('select').formSelect();
    });

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