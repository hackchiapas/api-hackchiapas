<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use App\User;
class ForgotNameController extends Controller
{
    public function showPageForgotName (){
        return view ('auth.name.email');
    }

    public function sendEMail(){

        $Users  = User::all();
        $email = $_POST['email'];
        $userName = "";

        foreach($Users as $User){
            if($User->email === $email)
                $userName = $User->name;
        }
        
        $data = ['userName' => $userName];

        \Mail::to('augustorucle@gmail.com')->send(new TestEmail($data));

        if( count( \Mail::failures()) > 0 ) {
            return redirect('/name/get');
        } else {
            return redirect('/home');
        }
    }
}
