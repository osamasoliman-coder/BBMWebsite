<?php

namespace App\Http\Controllers;
use App\Mail\SendCV;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class SendEmailController extends Controller
{
    function send(Request $request)
    {
        $file = $request->file('cv');
        $data = [
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'job_title' => $request->input('job_title'),
            'cv' => $file
        ];

        $to = 'info@bluemarlin.ae';
        Mail::to($to)->send(new SendMail($data));

        return redirect()->route('ourteam')->with(['message' => 'Your Cv Send Successfully']);
    }
}
