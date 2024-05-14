<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send_email(Request $request)
    {
        $name = 'Nur';
        $email = 'nurdiantoro123@gmail.com';
        $link = 'www.com';

        Mail::to('nurdiantoro100@gmail.com')->send(new ForgotPassword($name, $email, $link));
    }
}
