<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    public function get_sub_cat($id){
        return DB::table('sub_category')->where('parent_id', $id)->get();
    }
}
