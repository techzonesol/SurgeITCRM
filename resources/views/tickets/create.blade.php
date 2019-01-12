@extends('layouts.app')
@section('meta_title') Create Tickets @endsection
@section('page_bread_scrum')
    Tickets
@endsection
@section('content')
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title font-weight-semibold">Tickets Details</h5>
                </div>

                <div class="card-body">
                    <p class="mb-4">Create your ticket here.</p>

                    <form action="{{route('save_ticket')}}" method="post" id="Contact_form">
                        @csrf
                        <fieldset class="mb-3">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Subject</label>
                                <div class="col-lg-10">
                                    <input id="ticket_subject" name="ticket_subject" type="text" autofocus class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Select Company:</label>
                                <div class="col-lg-10">
                                    <select name="ticket_company_id" id="ticket_company_id" class="form-control">
                                        <option value="">Select Company</option>
                                        @foreach($companies as $company)
                                            <option value="{{$company->company_id}}">{{$company->company_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Select Contact:</label>
                                <div class="col-lg-10">
                                    <select name="ticket_contact_id" id="ticket_contact_id" class="form-control">
                                        <option value="">Select Contact</option>
                                        @foreach($contacts as $contact)
                                            <option value="{{$contact->contact_id}}">{{$contact->contact_f_name.' '.$contact->contact_l_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Tickets Assign To:</label>
                                <div class="col-lg-10">
                                    <select name="ticket_assigned_to_id" id="ticket_assigned_to_id" class="form-control">
                                        <option value="">Select Users</option>
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->user_f_name .' '. $user->user_l_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Ticket Detail</label>
                                <div class="col-lg-10">
                                    <input id="ticket_details" name="ticket_details" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Category Id:</label>
                                <div class="col-lg-10">
                                    <select name="ticket_category_id" id="ticket_category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row sub_cat_main_div" style="display: none;">
                                <label class="col-form-label col-lg-2">Subcategory</label>
                                <div class="col-lg-10">
                                    <select name="ticket_sub_category_id" id="ticket_sub_category_id" class="form-control">
                                        <option value="">Select subcategory</option>

                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Priority</label>
                                <div class="col-lg-10">
                                    <select name="ticket_priority" id="ticket_priority" class="form-control">
                                        <option value="">Select Priority</option>
                                            <option value="High">High</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>
                                            <option value="Surge IT">Surge IT </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Status Id</label>
                                <div class="col-lg-10">
                                    <select name="ticket_status_id" id="ticket_status_id" class="form-control">
                                        <option value="">Select status</option>
                                            <option value="New">New</option>
                                            <option value="Closed">Closed</option>
                                            <option value="Pending Input">Pending Input</option>
                                            <option value="Waiting Approval">Waiting  Approval</option>
                                            <option value="Dispatched">Dispatched</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Escalate">Escalate</option>
                                            <option value="Waiting Materials">Waiting Materials</option>
                                            <option value="Waiting Customer">Waiting Customer</option>
                                            <option value="Waiting Vendor">Waiting Vendor</option>
                                            <option value="On Hold">On Hold</option>
                                            <option value="Critical">Critical</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Asset</label>
                                <div class="col-lg-10">
                                    <select name="ticket_asset_id" id="ticket_asset_id" class="form-control">
                                        <option value="">Select Assets</option>
                                        @foreach($assets as $asset)
                                            <option value="{{$asset->asset_id}}">{{$asset->asset_name}}</option>
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
        $('#ticket_category_id').on('change', function(){
           var value = $(this).val();
           $.ajax({
              url: '{{route('sub_cat')}}',
               data:{val:value},
               type:'GET',
               dataType:'json',
               success:function (e) {
                  if(e) {
                      $('#ticket_sub_category_id').html(e);
                      $('.sub_cat_main_div').css('display', 'flex');
                  }else{
                      $('.sub_cat_main_div').css('display', 'none');
                  }
               }
           });
        });
        $(document).ready(function(){

            $("#Contact_form").validate({
                rules: {
                    ticket_subject: {
                        required: true,
                        maxlength: 500
                    },
                    ticket_details: {
                        required: true,
                        maxlength: 500

                    }
                },
                //For custom messages
                messages: {
                    ticket_subject:{
                        required: "Please enter ticket subject",
                        maxlength: "Max 500 characters allowed"
                    },
                    ticket_details:{
                        required: "Please enter tickets details",
                        maxlength: "Max 500 characters allowed"
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