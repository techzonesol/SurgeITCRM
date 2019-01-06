<?php

namespace App\Http\Controllers;

use App\Company;
use App\Contact;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('contacts.index',['contacts' =>  $contacts]);
    }
    public function create(){
        $company_obj = new Company;
        $companies = $company_obj->getCompanies();
        $user_obj = new User;
        $users = $user_obj->get_user();
        return view('contacts.create',['companies' => $companies,'users' => $users]);
    }
    public function save_contact(Request $request){
        $data = [
            'contact_f_name' =>  $request->input('contact_f_name'),
            'contact_l_name' =>  $request->input('contact_l_name'),
            'contact_work_email' =>  $request->input('contact_work_email'),
            'contact_company_id' =>  $request->input('contact_company_id'),
            'contact_office_phone' =>  $request->input('contact_office_phone'),
            'contact_fax' =>  $request->input('contact_fax'),
            'contact_office_phone_ext' =>  $request->input('contact_office_phone_ext'),
            'contact_city' =>  $request->input('contact_city'),
            'contact_state' =>  $request->input('contact_state'),
            'contact_country' =>  $request->input('contact_country'),
            'contact_street_address' =>  $request->input('contact_street_address'),
            'contact_assigned_to_id' =>  $request->input('contact_assigned_to_id'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $contacts = Contact::insertGetId($data);
        if($contacts){
            $request->session()->flash('success', 'Contacts created successful!');
        }else{
            $request->session()->flash('error', 'Something went wrong!');
        }
        return redirect()->route('contacts');
    }
    public function delete_contact(Request $request){
        $contact_onj = new Contact();
        $delete = $contact_onj->delete_contact($request->post('id'));
        if($delete){
            return 1;
        }else{
            return 0;
        }
    }
    public function view_contact($id, Request $request){
        $contact_obj = new Contact();
        $get_contact  = $contact_obj->getContact($id);
        if($get_contact){
            $company_obj = new Company;
            $companies = $company_obj->getCompanies();
            $user_obj = new User;
            $users = $user_obj->get_user();
            return view('contacts.detail',['contact' => $get_contact, 'companies' => $companies, 'users' => $users]);
        }else{
            $request->session()->flash('error', 'Something went wrong!');
            return redirect()->route('home');
        }
    }
    public function update_contact($id, Request $request){
        $data = [
            'contact_f_name' =>  $request->input('contact_f_name'),
            'contact_l_name' =>  $request->input('contact_l_name'),
            'contact_work_email' =>  $request->input('contact_work_email'),
            'contact_company_id' =>  $request->input('contact_company_id'),
            'contact_office_phone' =>  $request->input('contact_office_phone'),
            'contact_fax' =>  $request->input('contact_fax'),
            'contact_office_phone_ext' =>  $request->input('contact_office_phone_ext'),
            'contact_city' =>  $request->input('contact_city'),
            'contact_state' =>  $request->input('contact_state'),
            'contact_country' =>  $request->input('contact_country'),
            'contact_street_address' =>  $request->input('contact_street_address'),
            'contact_assigned_to_id' =>  $request->input('contact_assigned_to_id'),
        ];
        $contact_obj = new Contact;
        $contacts = $contact_obj->update_data($id, $data);
        if($contacts){
            $request->session()->flash('success', 'Contacts updated successful!');
        }else{
            $request->session()->flash('error', 'Something went wrong!, Contacts not saved');
        }
        return redirect()->route('view_contact',['id' => $id]);
    }
    public function check_email(Request $request){
        $email = $request->input('email');
        $contact_obj = new Contact();
        $count =  $contact_obj->check_email($email);
        if($count){
            return "false";
        }else{
            return "true";
        }
    }
}
