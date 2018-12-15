<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];
    public function delete_contact($id){
        return Contact::where('contact_id' , $id)->delete();
    }
    public function getContact($id){
        return Contact::where('contact_id', $id)->first();
    }
    public function update_data($id, $data){
        return Contact::where('contact_id', $id)->update($data);
    }
    public function check_email($email){
        return Contact::where('contact_work_email', $email)->count();
    }
}
