<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contact=Contact::all();
  
        return view('admin.pages.contact.index',compact('contact'));
        return $contact;
    }
        public function indexapi(){
        $contact=Contact::all();
        return $contact;
    }

}
