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
}
