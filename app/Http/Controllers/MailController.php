<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required',
            'phone' => 'required',
        ]);

        $data = $request->all();

        // // Create a new ticket
        // $ticket = Ticket::create($data);

        // // Send email
        // Mail::to('recipient@example.com')->send(new ContactFormMail($ticket));

        try {
            // Send the email
            Mail::to('admin@example.com')->send(new ContactMail($data));

            return response()->json(['message' => 'Email sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Email could not be sent: ' . $e->getMessage()], 500);
        }
    }
}
