<?php

namespace App\Http\Controllers;

use App\Mail\welcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
   public function sendWelcomeEmail()
   {
       $toEmail = 'prabhath.shanka@gmail.com';
       $message  = 'Welcome to our website';
       $subject = 'Welcome Email using laravel mail';
       $test = Mail::to($toEmail)->send(new welcomeEmail($message, $subject));

       dd($test);
   }
}
