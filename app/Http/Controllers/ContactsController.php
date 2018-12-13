<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Contacts;

class ContactsController extends Controller
{
    public function index(){

    }
    public function create(){
        return view('contacts.create');
    }
    public function save_contact(Contacts $request){
        dd('hassan');
    }
}
