<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'location' => 'required',
            'time' => 'required',
        ]);

        $messageText = "
NEW APPOINTMENT REQUEST

Name: {$request->name}
Email: {$request->email}
Phone: {$request->phone}

Service: {$request->service}
Location: {$request->location}
Time: {$request->time}
        ";

        Mail::raw($messageText, function ($mail) {
            $mail->to(config('mail.from.address'))
                 ->subject('New Appointment Request');
        });

        return back()->with('success', 'Appointment booked successfully!');
    }
}
