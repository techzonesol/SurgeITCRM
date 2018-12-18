<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function delete_company($id){
        return Company::where('company_id' , $id)->delete();
    }
    public function getCompany($id){
        return Company::where('company_id', $id)->first();
    }
    public function update_data($id, $data){
        return Company::where('company_id', $id)->update($data);
    }
}
