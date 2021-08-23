<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\True_;

class ContactController extends Controller
{

    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message')
        ];
            $to = 'info@bluemarlin.ae';
            Mail::to($to)->send(new ContactMail($data));
            session()->flash('success_message', 'successfully sent your email');
            return redirect()->back();
    }

}
