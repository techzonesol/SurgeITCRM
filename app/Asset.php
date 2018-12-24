<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    protected $guarded = [];
    public function getAsset($id){
        return Asset::where('asset_id', $id)->first();
    }
    public function update_data($id, $data){
        return Asset::where('asset_id', $id)->update($data);
    }
    public function delete_asset($id){
        return Asset::where('asset_id' , $id)->delete();
    }
}
