<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;

class EmployeeController extends Controller
{
    public function index(){
        $employees = User::get();
        return view('employees.index',['employees' =>  $employees]);
    }
    public function view_employees($id, Request $request){
        $user_obj = new User();
        $get_user  = $user_obj->get_user_by_id($id);
        if($get_user){
//            $company_obj = new Company;
//            $companies = $company_obj->getCompanies();
//            $user_obj = new User;
//            $users = $user_obj->get_user();
            return view('employees.detail',['employee' => $get_user]);
        }else{
            $request->session()->flash('error', 'Something went wrong!');
            return redirect()->route('home');
        }
    }
    public function update_employee($id, Request $data){
        $user_obj = new User;
        if($data['user_password']){
           $password = Hash::make($data['user_password']);
        }else{
            $get_current_user = $user_obj->get_user_by_id($id);
            $password = $get_current_user->password;
        }
        if($data->input('user_is_active') == 'on'){
            $is_active = 1;
        }else{
            $is_active = 0;
        }
        $array = [
            'user_f_name' => $data['user_f_name'],
            'user_l_name' => $data['user_l_name'],
            'user_username' => $data['user_username'],
            'email' => $data['email'],
            'password' => $password,
            'user_dob' => date('Y-m-d',strtotime($data['user_dob'])),
            'user_cell_no' => $data['user_cell_no'],
            'user_home_phone' => $data['user_home_phone'],
            'user_city' => $data['user_city'],
            'user_zip_code' => $data['user_zip_code'],
            'user_state' => $data['user_state'],
            'user_country' => $data['user_country'],
            'user_street_address' => $data['user_street_address'],
            'user_modified_by' => auth()->user()->user_id,
            'user_is_active' => $is_active
        ];
        $save_user = $user_obj->update_data($id, $array);
        if($save_user){
            $data->session()->flash('success', 'User updated successfully!');
        }else{
            $data->session()->flash('error', 'Something went wrong!, User not saved');
        }
        return redirect()->route('view_employee',['id' => $id]);
    }
    public function delete_user(Request $request){
        $user_obj = new user();
        $delete = $user_obj->delete_user($request->post('id'));
        if($delete){
            return 1;
        }else{
            return 0;
        }
    }
}
