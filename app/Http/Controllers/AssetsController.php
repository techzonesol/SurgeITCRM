<?php

namespace App\Http\Controllers;

use App\Asset;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AssetsController extends Controller
{
    public function index(){
        $assets = Asset::get();
        return view('assets.index',['assets' =>  $assets]);
    }
    public function create(){
        return view('assets.create');
    }
    public function save_assets(Request $request){
        $path = '';
        if ($request->hasFile('asset_image')) {
            $path = $request->asset_image->store('Assets');
        }
//        $asset_img = $request->file('asset_image')->store('Assets');
        $data = [
            'asset_no' => $request->input('asset_no'),
            'asset_serial_no' => $request->input('asset_serial_no'),
            'asset_status_id' => $request->input('asset_status_id'),
            'asset_product_type' => $request->input('asset_product_type'),
            'asset_image' => $path,
            'asset_in_service_date' => date('Y-m-d H:i:s',strtotime($request->input('asset_in_service_date'))),
            'asset_details' => $request->input('asset_details'),
            'asset_name' => $request->input('asset_name'),
            'asset_tag_number' => $request->input('asset_tag_number'),
            'asset_date_sold' => date('Y-m-d H:i:s',strtotime($request->input('asset_date_sold'))),
            'asset_contact_id' => $request->input('asset_contact_id'),
            'asset_product_memory' => $request->input('asset_product_memory'),
            'asset_product_architecture' => $request->input('asset_product_architecture'),
            'asset_product_processor' => $request->input('asset_product_processor'),
            'asset_product_os' => $request->input('asset_product_os'),
            'asset_receiving_notes' => $request->input('asset_receiving_notes'),
            'asset_created_by' => auth()->user()->id,
            'asset_modified_by' => auth()->user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $insert_company = Asset::insertGetId($data);
        if($insert_company){
            $request->session()->flash('success', 'Assets created successful!');
        }else{
            $request->session()->flash('error', 'Something went wrong!');
        }
        return redirect()->route('assets');
    }
    public function delete_assets(Request $request){
        $asset_obj = new Asset();
        $delete = $asset_obj->delete_asset($request->post('id'));
        if($delete){
            return 1;
        }else{
            return 0;
        }
    }
    public function view_assets($id, Request $request){
        $asset_obj = new Asset();
        $get_asset = $asset_obj->getAsset($id);
        $users = User::get();
        if($get_asset){
            return view('assets.detail',['asset' => $get_asset,'users' => $users]);
        }else{
            $request->session()->flash('error', 'Something went wrong!');
            return redirect()->route('home');
        }
    }
    public function update_assets($id, Request $request){
        $path = '';
        $asset = Asset::where('asset_id' , $id)->first();
        if ($request->hasFile('asset_image')) {
            $path = $request->asset_image->store('Assets');
        }else{
            $path = $asset->asset_image;
        }
        $data = [
            'asset_no' => $request->input('asset_no'),
            'asset_serial_no' => $request->input('asset_serial_no'),
            'asset_status_id' => $request->input('asset_status_id'),
            'asset_product_type' => $request->input('asset_product_type'),
            'asset_image' => $path,
            'asset_in_service_date' => date('Y-m-d H:i:s',strtotime($request->input('asset_in_service_date'))),
            'asset_details' => $request->input('asset_details'),
            'asset_name' => $request->input('asset_name'),
            'asset_tag_number' => $request->input('asset_tag_number'),
            'asset_date_sold' => date('Y-m-d H:i:s',strtotime($request->input('asset_date_sold'))),
            'asset_contact_id' => $request->input('asset_contact_id'),
            'asset_product_memory' => $request->input('asset_product_memory'),
            'asset_product_architecture' => $request->input('asset_product_architecture'),
            'asset_product_processor' => $request->input('asset_product_processor'),
            'asset_product_os' => $request->input('asset_product_os'),
            'asset_receiving_notes' => $request->input('asset_receiving_notes'),
            'asset_modified_by' => auth()->user()->id,
            'updated_at' => Carbon::now(),
        ];
        $asset_obj = new Asset();
        $asset = $asset_obj->update_data($id, $data);
        if($asset){
            $request->session()->flash('success', 'Assets updated successful!');
        }else{
            $request->session()->flash('error', 'Something went wrong!, Contacts not saved');
        }
        return redirect()->route('view_assets',['id' => $id]);
    }
}
