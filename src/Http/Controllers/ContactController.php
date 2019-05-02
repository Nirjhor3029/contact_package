<?php

namespace Nirjhor\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Nirjhor\Contact\Mail\ContactMailable;
use Nirjhor\Contact\Models\Contact;

class ContactController extends Controller
{
    //

    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        //return $request;

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));

        return Redirect::back();

    }

}
