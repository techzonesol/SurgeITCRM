<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //public $timestamps = true;
    protected $fillable = [
        'user_f_name', 'user_l_name','user_username','email', 'password','created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function get_user(){
        return User::where('user_is_active',1)->get();
    }
    public function get_user_by_id($id){
        return User::where('id', $id)->first();
    }
    public function update_data($id, $data){
        return User::where('id', $id)->update($data);
    }
    public function delete_user($id){
        return User::where('id' , $id)->delete();
    }

}
