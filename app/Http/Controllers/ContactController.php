<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // MESSAGE DATABASE ME SAVE
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        $emailContent = "
        Jumma khan you received a new message!:

        Name: {$request->name}
        Email: {$request->email}
        Subject: {$request->subject}

        Message:
        {$request->message}
        ";

        Mail::raw($emailContent, function ($message) use ($request) {
            $message->to('jmkinfo123@gmail.com')
                    ->replyTo($request->email, $request->name)
                    ->subject($request->subject ?? 'New Contact Message');
        });

        return back()->with('success', 'Message sent successfully!');
    }
}