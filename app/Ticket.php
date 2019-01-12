<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Ticket extends Model
{
    protected $guarded = [];
    public function get_ticket_list(){
        return DB::table('tickets')
            ->join('users','tickets.ticket_assigned_to_id','=', 'users.id')
            ->join('categories','tickets.ticket_category_id','=', 'categories.id')
            ->select('tickets.*', 'users.id as employee_id','users.user_f_name', 'users.user_l_name','categories.category_name')
            ->get();
    }
    public function delete_ticket($id){
        return Ticket::where('ticket_id' , $id)->delete();
    }
}
