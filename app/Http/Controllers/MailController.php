<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;

class MailController extends Controller
{
    public function send(Request $request)
    {
        // Validate the incoming request data
        $details = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Prepare email content
        $subject = 'New Contact Form Submission';
        $body = "From: {$details['name']}\nEmail: {$details['email']}\nPhone: {$details['phone']}\nAddress: {$details['address']}\nMessage: {$details['message']}";

        // Sending email
        try {
            Mail::raw($body, function ($mail) use ($details, $subject) {
                $mail->from($details['email'], $details['name']);
                $mail->to('your-email@gmail.com')->subject($subject);
            });

            return response()->json(['message' => 'Mail sent successfully']);
        } catch (Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
