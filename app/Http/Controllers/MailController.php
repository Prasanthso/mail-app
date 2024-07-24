<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $toEmail = 'prasanthsubramaniyan945@gmail.com';
        $message = 'Welcome to laravel';
        $subject = 'Sending Gmail Using Laravel 11';

        $response = Mail::to($toEmail)->send(new ContactFormMail($message, $subject));

        dd($response);
    }
}
