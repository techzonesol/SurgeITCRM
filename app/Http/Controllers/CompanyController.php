<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::paginate(10);
        return view('company.index',['companies' =>  $companies]);
    }
    public function create(){
        return view('company.create');
    }
    public function save_company(Request $request){
        $is_active = '';
        if($request->input('company_is_active') == 'on'){
            $is_active = 1;
        }else{
            $is_active = 0;
        }
        $data = [
            'company_name' =>  $request->input('company_name'),
            'company_email' =>  $request->input('company_email'),
            'company_phone_no' =>  $request->input('company_phone_no'),
            'company_phone_no_ext' =>  $request->input('company_phone_no_ext'),
            'company_title' =>  $request->input('company_title'),
            'company_state' =>  $request->input('company_state'),
            'company_zip_code' =>  $request->input('company_zip_code'),
            'company_street_address' =>  $request->input('company_street_address'),
            'company_billing_city' =>  $request->input('company_billing_city'),
            'company_fax' =>  $request->input('company_fax'),
            'company_other_phone_no' =>  $request->input('company_other_phone_no'),
            'company_website' =>  $request->input('company_website'),
            'company_country' =>  $request->input('company_country'),
            'company_billing_country' =>  $request->input('company_billing_country'),
            'company_billing_zip_code' =>  $request->input('company_billing_zip_code'),
            'company_billing_state' =>  $request->input('company_billing_state'),
            'company_billing_street_address' =>  $request->input('company_billing_street_address'),
            'company_industry_id' =>  $request->input('company_industry_id'),
            'company_is_active' =>  $is_active,
//            'company_created_by' => auth()->user()->id,
//            'company_modified_by' => auth()->user()->id
        ];
        $insert_company = Company::insertGetId($data);
        if($insert_company){
            $request->session()->flash('success', 'Company created successful!');
        }else{
            $request->session()->flash('error', 'Something went wrong!');
        }
        return redirect()->route('company');
    }
    public function delete_company(Request $request){
        $company_modal_obj = new Company();
        $delete = $company_modal_obj->delete_company($request->post('id'));
        if($delete){
            return 1;
        }else{
            return 0;
        }
    }
    public function view_company($id, Request $request){
        $company_modal_obj = new Company();
        $get_company  = $company_modal_obj->getCompany($id);
        if($get_company){
            return view('company.detail',['company' => $get_company]);
        }else{
            $request->session()->flash('error', 'Something went wrong!');
            return redirect()->route('home');
        }
    }
    public function update_company($id, Request $request){
        $is_active = '';
        if($request->input('company_is_active') == 'on'){
            $is_active = 1;
        }else{
            $is_active = 0;
        }
        $data = [
            'company_name' =>  $request->input('company_name'),
            'company_email' =>  $request->input('company_email'),
            'company_phone_no' =>  $request->input('company_phone_no'),
            'company_phone_no_ext' =>  $request->input('company_phone_no_ext'),
            'company_title' =>  $request->input('company_title'),
            'company_state' =>  $request->input('company_state'),
            'company_zip_code' =>  $request->input('company_zip_code'),
            'company_street_address' =>  $request->input('company_street_address'),
            'company_billing_city' =>  $request->input('company_billing_city'),
            'company_fax' =>  $request->input('company_fax'),
            'company_other_phone_no' =>  $request->input('company_other_phone_no'),
            'company_website' =>  $request->input('company_website'),
            'company_country' =>  $request->input('company_country'),
            'company_billing_country' =>  $request->input('company_billing_country'),
            'company_billing_zip_code' =>  $request->input('company_billing_zip_code'),
            'company_billing_state' =>  $request->input('company_billing_state'),
            'company_billing_street_address' =>  $request->input('company_billing_street_address'),
            'company_industry_id' =>  $request->input('company_industry_id'),
            'company_is_active' =>  $is_active,
//            'company_created_by' => auth()->user()->id,
//            'company_modified_by' => auth()->user()->id
        ];
        $company_obj = new Company();
        $company = $company_obj->update_data($id, $data);
        if($company){
            $request->session()->flash('success', 'Contacts updated successful!');
        }else{
            $request->session()->flash('error', 'Something went wrong!, Contacts not saved');
        }
        return redirect()->route('view_company',['id' => $id]);
    }
}
