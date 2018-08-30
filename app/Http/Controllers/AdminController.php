<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'admins';

    public function showLoginForm () {
        return view('auth.admin.loginAdmin');
    }

    public function authenticated (){
        return redirect('administradores/home');
    }

    public function secret(){
        return view('auth.admin.homeAdmin');
    }

}
