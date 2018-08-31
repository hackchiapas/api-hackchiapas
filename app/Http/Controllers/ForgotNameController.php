<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;

class ForgotNameController extends Controller
{
    public function showPageForgotName (){
        return view ('auth.name.email');
    }

    public function sendEMail(){
        $data = ['message' => 'This is a test!'];

        \Mail::to('augustorucle@gmail.com')->send(new TestEmail($data));

        return view('auth.name.email');
    }
}
