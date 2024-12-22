<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\NovajiMail;
use App\Mail\ContactMail;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function contactStore(Request $request){
        $formField = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        dd($formField);

        Contact::create($formField);

        $clientMail = $formField['email'];

        Mail::to('victor.i@novajii.com')->send(new ContactMail($formField));
        Mail::to($clientMail)->send(new NovajiMail());
        return back();

    }

    public function subscribeStore(Request $request) {
        $formField = $request->validate([
            'email' => 'required|email|unique:subscribes',

        ]);

        Subscribe::create($formField);
        return back();
    }






}
