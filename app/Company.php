<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    public function delete_company($id){
        return Company::where('company_id' , $id)->delete();
    }
    public function getCompany($id){
        return Company::where('company_id', $id)->first();
    }
    public function update_data($id, $data){
        return Company::where('company_id', $id)->update($data);
    }
    public function getCompanies(){
        return Company::where('company_is_active',1)->select('company_id','company_name')->get();
    }
}
