<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\NovajiMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactStore(Request $request){
        $formField = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($formField);

        $clientMail = $formField['email'];

        Mail::to('victor.i@novajii.com')->send(new ContactMail($formField));
        Mail::to($clientMail)->send(new NovajiMail());
        return back();

    }
}
