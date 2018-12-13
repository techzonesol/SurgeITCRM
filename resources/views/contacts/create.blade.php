@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col m8">
                <div class="card">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="align_center">Create Contacts</h4>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col s12">
                            @scrf
                            <div class="input-field col s6">
                                <input  id="contact_f_name" name="contact_f_name" type="text" class="validate">
                                <label for="contact_f_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_l_name" name="contact_l_name" type="text" class="validate">
                                <label for="contact_l_name">Last Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_work_email" name="contact_work_email" type="email" class="validate">
                                <label for="contact_work_email">Email Address</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="contact_company_id">
                                    <option value=""  selected>Choose your Company</option>
                                    <option value="1">Company 1</option>
                                    <option value="2">Company 2</option>
                                    <option value="3">Company 3</option>
                                </select>
                                <label>Materialize Select</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_office_phone" name="contact_office_phone" type="text" class="validate">
                                <label for="contact_office_phone">Office Phone</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_fax" name="contact_fax" type="text" class="validate">
                                <label for="contact_fax">Fax</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_office_phone_ext" name="contact_office_phone_ext" type="text" class="validate">
                                <label for="contact_office_phone_ext">Office Extension</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_city" name="contact_city" type="text" class="validate">
                                <label for="contact_city">Contact City</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_state" name="contact_state" type="text" class="validate">
                                <label for="contact_state">Contact State</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_country" name="contact_country" type="text" class="validate">
                                <label for="contact_country">Contact Country</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="contact_street_address" name="contact_street_address" type="text" class="validate">
                                <label for="contact_street_address">Street Address</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="contact_assigned_to_id">
                                    <option value="" selected>Choose your Company</option>
                                    <option value="1">Company 1</option>
                                    <option value="2">Company 2</option>
                                    <option value="3">Company 3</option>
                                </select>
                                <label>Materialize Select</label>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
    @endsection