<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contact=Contact::all();
  
        return view('admin.pages.contact.index',compact('contact'));
    }
        public function indexapi(){
        $contact=Contact::all();
        return $contact;
    }
    public function store(Request $request){
        $phone=$request->input('phone');
        $email=$request->input('email');
        $message=$request->input('message');

        $contact=Contact::insert([
            'phone'=>$phone,
            'email'=>$email,
            'message'=>$message
        ]);
        return $contact;
    }

}
