<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Company;
use App\Contact;
use App\User;
use Illuminate\Http\Request;
use App\Ticket;
use App\Category;
use Carbon\Carbon;

class TicketsController extends Controller
{
    public function index(){
        $ticket_obj = new Ticket;
        $tickets = $ticket_obj->get_ticket_list();
        return view('tickets.index',['tickets' =>  $tickets]);
    }
    public function create(){
        $companies = Company::get();
        $contacts = Contact::get();
        $users = User::get();
        $categories = Category::get();
        $assets = Asset::get();
        return view('tickets.create',['companies' => $companies,'contacts' => $contacts,'users' => $users,'categories' => $categories,'assets'=> $assets]);
    }
    public function save_ticket(Request $request){
        $data = [
            'ticket_assigned_to_id' => $request->input('ticket_assigned_to_id'),
            'ticket_company_id' => $request->input('ticket_company_id'),
            'ticket_contact_id' => $request->input('ticket_contact_id'),
            'ticket_details' => $request->input('ticket_details'),
            'ticket_category_id' => $request->input('ticket_category_id'),
            'ticket_subject' => $request->input('ticket_subject'),
            'ticket_priority' => $request->input('ticket_priority'),
            'ticket_status_id' => $request->input('ticket_status_id'),
            'ticket_sub_category_id' => $request->input('ticket_sub_category_id	'),
            'ticket_asset_id' => $request->input('ticket_asset_id'),
            'ticket_created_by_id' => auth()->user()->id,
            'ticket_modified_by_id' => auth()->user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $insert_tickets = Ticket::insertGetId($data);
        if($insert_tickets){
            $request->session()->flash('success', 'Tickets created successful!');
        }else{
            $request->session()->flash('error', 'Something went wrong!');
        }
        return redirect()->route('tickets');
    }
    public function sub_cat(Request $request){
        $cat_id = $request->input('val');
        $cat_obj = new Category;
        $categories =  $cat_obj->get_sub_cat($cat_id);
        $opt = 0;
        if(count($categories)){
            $opt = '<option value="">Select subcategory</option>';
            foreach ($categories as $category){
                $opt .= '<option value="'. $category->id.'">'. $category->category_name .'</option>';
            }
        }
        return response()->json($opt);
    }
    public function delete_ticket(Request $request){
        $ticket_obj = new Ticket();
        $delete = $ticket_obj->delete_ticket($request->post('id'));
        if($delete){
            return 1;
        }else{
            return 0;
        }
    }
}
