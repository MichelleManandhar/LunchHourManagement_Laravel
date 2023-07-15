<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Reminder;
use App\User;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    public function forgot(){
        return view('security.forgot');
    }
    use SendsPasswordResetEmails;

    public function password(Request $request){
        //dd($request->all());
        $user = User::whereEmail($request->email)->first();
        if($user == null){
            return redirect()->back()->with(['error'=>'Email does not exists']);     
        }
        $user = User::findById($user->id);
        $reminder = Reminder::exits($user) ? : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with(['success' => 'Reset code send to your email']);

    }
    public function sendEmail($user, $code){
        Mail::send(
            'email.forgotpassword',
            ['user'=>$user, 'code'=>$code],
            function($message) use ($user){
                $message->to($user->email);
                $message->subject("$user->name, reset your password.");
            }
        );
    }
}
