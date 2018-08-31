<?php

namespace App\Http\Controllers;
namespace Illuminate\Auth\Notifications;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class ForgotNameController extends Notification{
    public $token;

    public function __construct($token){
       $this->token = $token;
    }

    public function showPageForgotName (){
        return view ('auth.name.email');
    }
    public function via($notifiable){
        return ['mail'];
    }
    public function message($notifiable)
    {
        return $this->line('You are receiving this email because we received a password reset request for your account. Click the button below to reset your password:')
                    ->action('Reset Password', url('password/reset', $this->token).'?email='.urlencode($notifiable->email))
                    ->line('If you did not request a password reset, no further action is required.');
    }
}
