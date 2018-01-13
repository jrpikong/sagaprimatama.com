<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view('pages.contactus');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'      => 'required|string|max:45',
            'last_name' => 'required|string|max:45',
            'email'     => 'required|string|email|max:45',
            'phone'     => 'required',
            'message'   => 'required|min:10'
        ]);
        $contact = ContactUs::create([
            'name'      => $request->name.' '.$request->last_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'message'   => $request->message
        ]);

        if($contact){
            return redirect('contactus')->with('status', 'Message Send!');
        }


    }
}
