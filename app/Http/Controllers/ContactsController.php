<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){

    }
    public function create(){
        return view('contacts.create');
    }
    public function save_contact(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
    }
}
