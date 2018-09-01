<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Validator;
use App\User;
class ForgotNameController extends Controller
{
    public function showPageForgotName (){
        return view ('auth.name.email');
    }

    public function sendEMail(Request $request){
        $Users  = User::all();
        $email = $_POST['email'];

        foreach($Users as $User){
            if($User->email === $email){
                $data = ['userName' => $User->name];

                \Mail::to($email)->send(new TestEmail($data));
    
                if( count( \Mail::failures()) > 0 ) {
                    return redirect('/name/get')->withErrors(['email' => 'Hubo un error en los mensajes vuelve a intenar']);  
                } else {
                    $request->session()->flash('status', 'Excelente! El mensaje fue enviado correctamente');
                    return redirect('/name/get');
                }
            }
        }
        return redirect('name/get')->withErrors(['email' => 'Este correo no se encuentra registrado']);  
    }

}
